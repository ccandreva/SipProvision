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

class SipProvision_Form_Handler_EditExtension extends Zikula_Form_AbstractHandler
  {
    
    /* Global variables here */
    var $id;

    /* Functions */
    public function __construct(&$args)
    {
        if (isset($args['id'])) 
        {
            $id = $args['id'];
            if (!is_numeric($id)) $id = '';
        }
        $this->id = $id;
    }
    
    public function initialize(Zikula_Form_View $view)
    {
	if (isset($this->id)) {
	    $args=array('id'=> $this->id);
	    $ext = ModUtil::apiFunc('SipProvision', 'User', 'getExtension', $args);
	    $this->view->assign($ext);
	}

      return true;
    }
    
    public function handleCommand(Zikula_Form_View $view, &$args)
    {    
        $command = $args['commandName'];
        if ($command == 'save') {
            if (!$this->view->isValid()) return false;
            $formData = $this->view->getValues();

            $ret = ModUtil::apiFunc('SipProvision', 'User', 'saveExtension', 
                    array('extension' => $formData));
        } else {
            $ret = 1;
        }
	if ($ret) {
	    return $this->view->redirect (ModUtil::url('SipProvision', 'admin','main'));
	} else {
            LogUtil::registerStatus("Something went wrong");
	    return false;
	}        
    }

    
}
  
