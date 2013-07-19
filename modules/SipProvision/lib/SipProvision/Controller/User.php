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

class SipProvision_Controller_User extends Zikula_AbstractController
{

    public function main()
    {
	return "This space intentionally left blank";
    }
    
    public function AddLog()
    {
	// Authentication by IP address:
	$ip = System::serverGetVar('REMOTE_ADDR');
	if (!preg_match('/^216\.187\.52\./', $ip)) {
		return LogUtil::registerPermissionError();
	}
	$filename = FormUtil::getPassedValue('file');
	$data = file_get_contents('php://input');
	$formData = array(
	    'filename' => $filename,
	    'data' => $data,
	);
	DBUtil::insertObject($formData,'sipprovision_logs');
	return "Okey-dokey Smokey";
    }
    
    public function ListLog()
    {
	// Perform access check
        if (!SecurityUtil::checkPermission('SipProvision::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError();
        }

	$logs = DBUtil::selectObjectArray ('sipprovision_logs', '',
		'',-1, -1, '', null, null, array('id', 'date', 'filename'));
	$this->view->assign('logs',$logs);
	return $this->view->fetch('sipprovision_user_listlog.tpl');
    }

    public function ViewLog()
    {
	// Perform access check
        if (!SecurityUtil::checkPermission('SipProvision::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError();
        }
	$id = FormUtil::getPassedValue('id');
	$log = DBUtil::selectObjectByID ('sipprovision_logs', $id);
	$this->view->assign('log', $log);
	return $this->view->fetch('sipprovision_user_viewlog.tpl');
    }
	  

}
