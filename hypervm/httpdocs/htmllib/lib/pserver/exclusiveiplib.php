<?php

class ExclusiveIp extends Lxclass
{

	static $__desc   =  array("", "",  "exclusive_ipaddress");
	static $__desc_nname   =  array("", "",  "device_name");
	static $__desc_devname    =  array("s", "",  "device_name", URL_SHOW);
	static $__desc_ipaddr  =     array("n", "",  "ipaddress", URL_SHOW);
	static $__desc_clientname  =     array("n", "",  "client");
	static $__desc_netmask  =     array("n", "",  "netmask", URL_SHOW);
	static $__desc_syncserver   =     array("", "",  "server_name");


	static $__desc_sslipaddress_o =    array("d", "",  "");
	static $__desc_domainipaddress_o =    array("d", "",  "");


	function get()
	{
	}
	function write()
	{
	}


	static function createListNlist($parent, $view)
	{
		//$nlist["nname"] = "3%";
		$nlist["ipaddr"] = "100%";
		$nlist["syncserver"] = "10%";
		if ($parent->isAdmin()) {
			$nlist['clientname'] = '10%';
		}
		$nlist["devname"] = "30%";
		return $nlist;
	}

	function isSelect()
	{
		return false;
	}

	static function createListAlist($parent, $class)
	{
		$alist[] = "a=list&c=$class";
		return $alist;
	}

	function createShowPropertyList(&$alist)
	{
		$alist['property'][] = 'a=show';
		$alist['property'][] = 'a=show&o=sslipaddress';
		$alist['property'][] = 'a=show&o=domainipaddress';
	}

	function createShowAlist(&$alist, $subaction = null)
	{
		return null;
	}

	function createShowUpdateform()
	{
		$uflist['update'] = null;
		return $uflist;
	}

	function updateform($subaction, $param)
	{
		//$vlist['devname'] = array("M", $this->devname);
		$vlist['ipaddr'] = array('M', $this->ipaddr);
		$vlist['netmask'] = array('M', $this->netmask);
		$vlist['__v_button'] = "";
		return $vlist;
	}


	static function initThisList($parent, $class)
	{

		$db = new Sqlite($parent->__masterserver, "ipaddress");

		if ($parent->isAdmin()) {
			$result = $db->getTable();
		} else {
			$result = $db->getRowsWhere("clientname = '" . $parent->nname . "'");
		}
		return $result;
	}
}
