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

class mimetype__apache extends Lxdriverclass {

function dbactionUpdate($subaction)
{
	createMimeType();
}

function dbactionAdd()
{
	createMimeType();
}
function dbactionDelete()
{
	createMimeType();
}

function createMimeType()
{
	
	$result = $this->main->__var_mime_list;
	$result = merge_array_object_not_deleted($result, $this->main);
	$string = null;
	foreach($result as $r) {
		$string .= "Addtype {$r['type']} {$r['extension']}\n";
	}

	lfile_put_contents("/etc/httpd/conf/kloxo/mimetype.conf", $string);
}

}
