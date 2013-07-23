{ include file="sipprovision_admin_menu.tpl" }

<h3>Phones:</h3>

<a href="{modurl modname='sipprovision' type='admin' func='EditPhone'}">Add Phone</a>
<table>
    <thead>
	<tr>
	    <th>ID</th>
	    <th>MACA Address</th>
	    <th>Line (id)</th>
	</tr>
    </thead>
    <tbody>
    {foreach item='datum' from=$data}
	<tr>
	    <td><a href="{modurl modname='sipprovision' type='admin'
		   func='EditPhone' id=$datum.id}">{$datum.id}</a></td>
	    <td>{$datum.mac}</td>
	    <td>{$datum.extension}</td>
	</tr>
    {/foreach}
    </tbody>
</table>
