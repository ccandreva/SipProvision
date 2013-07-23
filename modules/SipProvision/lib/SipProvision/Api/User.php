<?php
/*
 * SIP Provision
 * 
 * @copyright (C) 2013, Christopher X. Candreva <chris@westnet.com>
 * @link http://github.com/ccandreva/SipProvision
 * @license See license.txt
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * 
 */

class SipProvision_Api_User extends Zikula_AbstractApi
{

    public function getExtension($args)
    {
	if (isset($args['id'])) {
	    $id = $args['id'];
	} else {
	    return false;
	}
	$extension = DBUtil::selectObjectById('sipprovision_extensions', $id);
	return $extension;
    }

    /*Eventually something will need to be passed in to specify a company file*/
    public function getExtensions($args)
    {
        // return(array('foo' => 'bar'));
	$where ='';
	if (isset($args['company'])) {
	    $company = $args['company'];
	    if (is_numeric($company)) {
		$where = "where company=$company";
	    }
	}
	$extensions = DBUtil::selectObjectArray('sipprovision_extensions', $where);
		// '',-1, -1, 'extension', null, null, array('id','extension', 'label'));
	return $extensions;
    }

    public function saveExtension($args)
    {
	if (isset($args['extension'])) {
	    $ext = $args['extension'];
	} else {
	    return "No data passed";
	}
	
	// Until companies are implemented, hard-code to WestNet;
	if (!isset($ext['company'])) {
	    $ext['company'] = 0;
	}
	if (isset($ext['id'])) {
            $ret = DBUtil::updateObject($ext, 'sipprovision_extensions');
	    if ($ret) {
		    LogUtil::registerStatus("Update Successful");
	    } else {
		    LogUtil::registerError("Failed update");
	    }
	} else {
	    $ret = DBUtil::insertObject($ext, 'sipprovision_extensions');
	    if ($ret) {
		    LogUtil::registerStatus("Insert Successful");
	    } else {
		    LogUtil::registerError("Failed insert");
	    }
	}
        // LogUtil::registerStatus('Well, this is the end !');
        return $ret;
    }

    public function getPhone($args)
    {
	if (isset($args['id'])) {
	    $id = $args['id'];
	} else {
	    return false;
	}
	$phone = DBUtil::selectObjectById('sipprovision_phoness', $id);
	return $phone;
    }

    /*Eventually something will need to be passed in to specify a company file*/
    public function getPhones($args)
    {
        // return(array('foo' => 'bar'));
	$where ='';
	if (isset($args['company'])) {
	    $company = $args['company'];
	    if (is_numeric($company)) {
		$where = "where company=$company";
	    }
	}
	$phones = DBUtil::selectObjectArray('sipprovision_phones', $where);
		// '',-1, -1, 'extension', null, null, array('id','extension', 'label'));
	return $phones;
    }

    public function savePhone($args)
    {
	if (isset($args['phone'])) {
	    $phone = $args['phone'];
	} else {
	    return "No data passed";
	}
	
	// Until companies are implemented, hard-code to WestNet;
	if (!isset($phone['company'])) {
	    $phone['company'] = 0;
	}
	if (isset($phone['id'])) {
            $ret = DBUtil::updateObject($phone, 'sipprovision_phones');
	    if ($ret) {
		    LogUtil::registerStatus("Update Successful");
	    } else {
		    LogUtil::registerError("Failed update");
	    }
	} else {
	    $ret = DBUtil::insertObject($phone, 'sipprovision_phones');
	    if ($ret) {
		    LogUtil::registerStatus("Insert Successful");
	    } else {
		    LogUtil::registerError("Failed insert");
	    }
	    LogUtil::registerStatus('Insert Completed');
	}
        // LogUtil::registerStatus('Well, this is the end !');
        return $ret;
    }
    
}

?>
