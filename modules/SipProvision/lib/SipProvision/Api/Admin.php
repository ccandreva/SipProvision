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

class SipProvision_Api_Admin extends Zikula_AbstractApi
{

   /**
     * Get available menu links.
     *
     * @return array array of menu links.
     */
    public function getlinks($args)
    {
        if (SecurityUtil::checkPermission('SipProvision::', '::', ACCESS_READ)) {
            $links = array(
              array('url' => ModUtil::url('SipProvision', 'admin', 'main'),
                  text=>$this->__('Main'), 'class' => 'z-icon-es-preview'),
              array('url' => ModUtil::url('SipProvision', 'admin', 'listExtensions'),
                  text=>$this->__('Extensions'), 'class' => 'z-icon-es-view'),
              array('url' => ModUtil::url('SipProvision', 'admin', 'listPhones'),
                  text=>$this->__('Phones'), 'class' => 'z-icon-es-view'),
              array('url' => ModUtil::url('SipProvision', 'admin', 'listLogs'),
                  text=>$this->__('Logs'), 'class' => 'z-icon-es-view'),
            );
        }
        return $links;
    }
}

?>
