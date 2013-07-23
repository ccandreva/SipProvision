{gt text="Sip Provision" assign=title domain='zikula'}
<h2>{$title|safetext}</h2>
{insert name="getstatusmsg"}
{* if $templatetitle}{pagesetvar name=title value=$templatetitle}{/if *}
{modulelinks modname='SipProvision' type='admin'}