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

class SipProvision_Controller_XML extends Zikula_AbstractController
{
    public function getConfig()
    {
	// Authentication by IP address:
	$ip = System::serverGetVar('REMOTE_ADDR');
	if (!preg_match('/^216\.187\.52\./', $ip)) {
		return LogUtil::registerPermissionError();
	}
	$mac = FormUtil::getPassedValue('mac');
	$line = FormUtil::getPassedValue('line');
	if ($mac) {
	    $data = ModUtil::apiFunc('SipProvision', 'User', 'getPhones', array('mac' => $mac));
	    if (is_array($data)) $datum = $data[0]; else exit(404);
	    $tpl = 'sipprovision_xml_mac.tpl';
	} elseif ($line) {
	    $datum = ModUtil::apiFunc('SipProvision', 'User', 'getExtension', array('id' => $line));
	    $tpl = 'sipprovision_xml_phone.tpl';
	}
	if (!is_array($datum)) exit ("404 Eat me");
	$this->view->assign($datum);
	header('Content-Type: text/plain');
	//foreach ($datum as $k => $v) echo "$k -> $v\n";
	echo $this->view->fetch($tpl);
	exit (200);
    }
}
