{include file="head.tpl"}
{include file="header.tpl"}
{if isset ($title)}
    {if $title !== 'Home'}
        {include file="breadcumb.tpl"}
    {/if}
{/if}
{include file="body.tpl"}
{include file="footer.tpl"}