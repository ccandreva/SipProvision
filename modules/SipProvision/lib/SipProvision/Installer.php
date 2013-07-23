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

class SipProvision_Installer extends Zikula_AbstractInstaller
{
    public function install()
    {
        ModUtil::setVar('SipProvision', 'modulestylesheet', 'style.css');

        if ( !DBUtil::createTable('sipprovision_logs') ) return false;
        if ( !DBUtil::createTable('sipprovision_companies') ) return false;
        if ( !DBUtil::createTable('sipprovision_extensions') ) return false;
        if ( !DBUtil::createTable('sipprovision_phones') ) return false;

	return true;
    }
    
    public function upgrade($oldversion)
    {
	return true;
    }
    
    public function uninstall()
    {
	DBUtil::dropTable('sipprovision_logs');
	DBUtil::dropTable('sipprovision_extensions');
	DBUtil::dropTable('sipprovision_companies');
	DBUtil::dropTable('sipprovision_extensions');
	return true;
    }
}
