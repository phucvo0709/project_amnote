<body>
<!-- Begin page -->
<div id="wrapper">
    {include file="left-sidebar.tpl"}

    <div class="content-page">
        <div class="content">
            {include file="topbar.tpl"}
            <!-- Start Content-->
            <div class="container-fluid">
                {include file="breadcumb.tpl"}
                {if isset($view)}
                    {include file="$view"}
                {/if}
            </div>
        </div> <!-- content -->
    </div>
</div>
<!-- END wrapper -->