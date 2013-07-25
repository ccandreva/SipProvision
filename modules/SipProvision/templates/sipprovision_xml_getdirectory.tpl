<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<!-- $RCSfile$  $Revision: 35928 $ -->
<directory>
    <item_list>
	{foreach from=$extensions item='ext' name='Directory'}
	    <item>
		<fn>{$ext.firstname}</fn>
		<ln>{$ext.lastname}</ln>
		<ct>{$ext.extension}</ct>
		<sd>{$smarty.foreach.Directory.iteration}</sd>
		<rt>3</rt>
		<dc/>
		<ad>0</ad>
		<ar>0</ar>
		<bw>0</bw>
		<bb>0</bb>
	    </item>
	{/foreach}
    </item_list>
</directory>
