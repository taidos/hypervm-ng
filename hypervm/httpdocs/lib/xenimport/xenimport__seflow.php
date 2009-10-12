<?PHP
//
//    HyperVM, Server Virtualization GUI for OpenVZ and Xen
//
//    Copyright (C) 2000-2009     LxLabs
//    Copyright (C) 2009          LxCenter
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU Affero General Public License as
//    published by the Free Software Foundation, either version 3 of the
//    License, or (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU Affero General Public License for more details.
//
//    You should have received a copy of the GNU Affero General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
?>

<?php 
include_once "htmllib/lib/include.php";

//__xenimport_get_data();

//$ret = __xenimport_parse_config("test.cfg");
//dprintr($ret);

function __xenimport_get_data()
{
	lxfile_mkdir("/home/oldxenconfig-hypervm");
	$list = lscandir_without_dot("/etc/hypervm/");
	foreach($list as $l) {
		if (!csb($l, "xm")) {
			continue;
		}
		if (csb($l, "xmexample")) {
			continue;
		}
		$vm[] = __xenimport_parse_config("/etc/xen/$l");
		//lxfile_mv("/etc/xen/$l", "/home/oldxenconfig-hypervm");
		lunlink("/etc/xen/auto/$l");
	}
	dprintr($vm);
	return $vm;
}


function __xenimport_parse_config($file)
{
	$list = lfile_trim($file);

	foreach($list as $l) {
		if (!csa($l, "=")) {
			continue;
		}
		list($var, $val) = explode("=", $l);

		$var = trim($var);
		$val = trim($val);

		switch($var) {
			case "memory":
				$ret['memory'] = $val;
				break;

			case "name":
				$ret['name'] = strtolower(trim($val, '"'));
				break;

			case "ip":
				$val = trim($val, '"');
				$ret['ipaddress'] = $val;
				break;

			case "gateway":
				$val = trim($val, '"');
				$ret['gateway'] = $val;
				break;

			case "netmask":
				$val = trim($val, '"');
				$ret['netmask'] = $val;
				break;

			case "disk":
				__xenimport_parsedisk($ret, $val);
				break;

		}
	}
	return $ret;


}

function __xenimport_parsedisk(&$ret, $val)
{
	preg_match("/\['file:([^']*)'.*'file:([^']*)'\]/i", $val, $matches);

	$ret['type'] = 'file';

	if (!isset($matches[0])) {
		throw new lxException("could_not_parse_disk_string");
	}

	$diskstring = $matches[1];
	$disk = explode(",", $matches[1]);
	$disk[0] = trim($disk[0], "/");
	$location = strtil($disk[0], "/");
	$maindiskname = strfrom($disk[0], $location);
	$maindiskname = trim($maindiskname, "/");
	$ret['location'] = $location;
	$ret['maindiskname'] = $maindiskname;

	$swap = explode(",", $matches[2]);
	$swap[0] = trim($swap[0], "/");
	$location = strtil($swap[0], "/");
	$swapdiskname = strfrom($swap[0], $location);
	$swapdiskname = trim($swapdiskname, "/");


	if ($location !== $ret['location']) {
		throw new lxException("swap_disk_location_not_same", 'nname', "{$ret['name']}: {$ret['location']}");
	}

	$ret['location'] = "/{$ret['location']}";

	$ret['swapdiskname'] = $swapdiskname;

}


