{extends file="main.tpl"}

{block name=content}

<h2 class="content-head is-center">Widok admina</h2>

<div class="pure-g">
    
<div class="l-box-lrg pure-u-1 pure-u-med-10-24">
    
{include file='messages.tpl'}

</div>

<div class="l-box-lrg pure-u-1 pure-u-med-14-24">
    <div class="pure-menu-horizontal">
        <li class="pure-menu-selected"><a class="pure-button" href="{$conf->action_url}BookView">Przegląd wszystkich książek</a>
        <li></li>
    </div>
</div>

</div>

{/block}