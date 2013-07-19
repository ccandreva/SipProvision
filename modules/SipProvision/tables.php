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

function SipProvision_tables()
{
  //Initialize table aray
  $tables = array();

  $tables['sipprovision_logs'] = 'sipprovision_logs';
  $tables['sipprovision_logs_column'] = array(
      'id'  => 'id',
      'date' => 'date',
      'filename' => 'filename',
      'data' => 'data',
  );
  $tables['sipprovision_logs_column_def'] = array(
      'id'  => 'I UNSIGNED NOTNULL AUTOINCREMENT PRIMARY',
      'date' => 'T NOTNULL DEFTIMESTAMP',
      'filename' => 'C(255)',
      'data' => 'X2',
  );
  
  return $tables;
  
}
