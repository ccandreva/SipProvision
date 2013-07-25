<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<!-- Example Per-phone Configuration File -->
<!-- $Revision: 1.59 $  $Date: 2004/05/22 00:50:41 $ -->
<phone1>
  <reg
	reg.1.address="{$address}"
	reg.1.displayName="{$displayname}"
	reg.1.label="{$label}"
	reg.1.auth.userId="{$authuserid}"
	reg.1.auth.password="{$authpassword}"
	reg.1.server.1.address="sip.westnet.com"
	reg.1.server.1.transport="UDPonly"
	reg.1.server.1.register="1"
	reg.1.server.1.expires="180"
	reg.1.ringType="14"
	reg.2.address=""
	reg.2.displayName=""
	reg.2.label=""
	reg.2.auth.userId=""
	reg.2.auth.password=""
	reg.2.server.1.address=""
	reg.2.server.1.transport=""
	reg.2.server.1.register=""
	reg.2.server.1.expires=""
  />
  <msg msg.bypassInstantMessage="1">
  <mwi msg.mwi.1.subscribe="" msg.mwi.1.callBackMode="contact" msg.mwi.1.callBack="{$extension}"/>
  
  </msg>

<device  device.set="1" device.auth.localAdminPassword.set="1" 
           device.auth.localAdminPassword="4041" />

</phone1>
