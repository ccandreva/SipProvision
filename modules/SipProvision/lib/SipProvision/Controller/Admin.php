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

class SipProvision_Controller_Admin extends Zikula_AbstractController
{

    public function main()
    {
	return $this->ListExtensions();
    }
    
    public function EditExtension()
    {
	// Perform access check
        if (!SecurityUtil::checkPermission('SipProvision:EditExtension:', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError();
        }
            
        $this->view->assign('templatetitle', 'SipProvision :: Edit Extension');
        $id = FormUtil :: getPassedValue('id');
        $view = FormUtil::newForm('SipProvision', $this);
        $view->assign('templatetitle', 'DbtDiary :: Edit Diary');
                
        $tmplfile = 'sipprovision_admin_editextension.tpl';
        $args = array();
        if ($id) $args['id'] = $id;
        $formobj = new SipProvision_Form_Handler_EditExtension($args);
        $output = $view->execute($tmplfile, $formobj);
        return $output;

    }

    public function ListExtensions()
    {
	// Perform access check
        if (!SecurityUtil::checkPermission('SipProvision:ListExtensions:', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError();
        }
	$data = ModUtil::apiFunc('SipProvision', 'User', 'getExtensions', array());
	//$data = DBUtil::selectObjectArray('sipprovision_extensions');
	$this->view->assign('data', $data);
	return $this->view->fetch('sipprovision_admin_listextensions.tpl');
    }
    
    public function ListLog()
    {
	// Perform access check
        if (!SecurityUtil::checkPermission('SipProvision::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError();
        }

	$logs = DBUtil::selectObjectArray ('sipprovision_logs', '',
		'',-1, -1, 'date', null, null, array('id', 'date', 'filename'));
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
