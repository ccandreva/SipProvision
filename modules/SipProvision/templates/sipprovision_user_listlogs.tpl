{ include file="sipprovision_admin_menu.tpl" }

<h3>List of Log Entries</h3>
<table>
    <thead>
	<tr>
	    <th>ID</th>
	    <th>Date</th>
	    <th>File Name</th>
	</tr>
    </thead>
    <tbody>
    {foreach item='log' from=$logs}
	<tr>
	    <td>{$log.id}</td>
	    <td>{$log.date}</td>
	    <td><a href="{modurl modname='sipprovision' type='admin' func='ViewLog' id=$log.id}">{$log.filename}</a></td>
	</tr>
    {/foreach}
    </tbody>
</table>
