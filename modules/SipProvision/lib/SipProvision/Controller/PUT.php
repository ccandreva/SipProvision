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

class SipProvision_Controller_PUT extends Zikula_AbstractController
{
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
	exit (200);
    }
}
