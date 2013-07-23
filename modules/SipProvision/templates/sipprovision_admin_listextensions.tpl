{ include file="sipprovision_admin_menu.tpl" }

<h3>Extensions:</h3>

<a href="{modurl modname='sipprovision' type='admin' func='EditExtension'}">Add Extension</a>
<table>
    <thead>
	<tr>
	    <th>ID</th>
	    <th>Extension</th>
	    <th>Label</th>
	</tr>
    </thead>
    <tbody>
    {foreach item='datum' from=$data}
	<tr>
	    <td><a href="{modurl modname='sipprovision' type='admin'
		   func='EditExtension' id=$datum.id}">{$datum.id}</a></td>
	    <td>{$datum.extension}</td>
	    <td>{$datum.label}</td>
	</tr>
    {/foreach}
    </tbody>
</table>
