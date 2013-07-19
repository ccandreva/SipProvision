<?php

class SipProvision_Version extends Zikula_AbstractVersion
{
    public function getMetaData()
    {
        $meta = array();
        $meta['name']         = $this->__('SipProvision');
        $meta['displayname']  = $this->__('SIP Provision');
        $meta['description']  = $this->__('Provision SIP phones based on parameters.');
        $meta['url']         = $this->__('SipProvision');
        $meta['version']      = '0.0.1';
        $meta['core_min']      =   '1.3.5';
        $meta['core_max']      =   '1.3.99';
        $meta['official']     = true;
        $meta['author']       = 'Chris Candreva';
        $meta['contact']      = 'http://github.com/ccandreva/SipProvision';
        $meta['securityschema'] = array('SipProvision::' => 'SipProvision::');

        return $meta;
    }
}
