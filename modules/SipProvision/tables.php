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
  $tables['sipprovision_companies'] = 'sipprovision_companies';
  $tables['sipprovision_companies_column'] = array(
      'id'  => 'id',
      'name' => 'name',
  );
  $tables['sipprovision_companies_column_def'] = array(
      'id'  => 'I UNSIGNED NOTNULL AUTOINCREMENT PRIMARY',
      'name' => 'C(255)',
  );

  $tables['sipprovision_phones'] = 'sipprovision_phones';
  $tables['sipprovision_phones_column'] = array(
      'id'  => 'id',
      'company' => 'company',
      'mac' => 'mac',
      'extension' => 'extension',
  );
  $tables['sipprovision_phones_column_def'] = array(
      'id'  => 'I UNSIGNED NOTNULL AUTOINCREMENT PRIMARY',
      'company' => 'I UNSIGNED',
      'mac' => 'C(12)',
      'extension' => 'I UNSIGNED',
  );

  $tables['sipprovision_extensions'] = 'sipprovision_extensions';
  $tables['sipprovision_extensions_column'] = array(
      'id'  => 'id',
      'company' => 'company',
      'extension' => 'extension',
      'displayname' => 'displayname',
      'address' => 'address',
      'authuserid' => 'authuserid',
      'authpassword' => 'authpassword',
      'label' => 'label',
      /*
      'type' => 'type',
      'thirdparyname' => 'thirdpartyname',
      'numlinekays' => 'numlinekeys',
      'callsperline' => 'callsperline'
       */
  );
  $tables['sipprovision_extensions_column_def'] = array(
      'id'  => 'I UNSIGNED NOTNULL AUTOINCREMENT PRIMARY',
      'company' => 'I UNSIGNED',
      'extension' => 'C(255)',
      'displayname' => 'C(255)',
      'address' => 'C(255)',
      'authuserid' => 'C(255)',
      'authpassword' => 'C(255)',
      'label' => 'C(255)',
  );
  /*
   * Tables:
   *   Client
   *   Extension
   *   Phone/hardware (MAC Address)
   * 
   * 
   * 
   * Display Name 	101-Westnet
Address 	101-Westnet
Auth User ID 	101-Westnet
Auth Password 	
Label 	
Type 	PrivateShared
Third Party Name 	
Num Line Keys 	
Calls Per Line 	
   * Address 	
Port 	
Transport 	: DNSnaptr, UDPonly, TCPprefered, TCPonly, TLS
Expires 	180
Register 	1
Retry Time Out 	
Retry Max Count 	
Line Seize Time Ouyt
   * 
   * 
   * 
   * 
   */
  
  
  return $tables;
  
}
