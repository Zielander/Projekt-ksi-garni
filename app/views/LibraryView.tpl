{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}backFromService"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót na stronę główną</a>
</div>
    
        <p></p>

<div>
<form class="pure-form pure-form-stacked" action="{$conf->action_url}LibraryView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}BookView','tab_book'); return false;">
	<legend>Wpisz poniżej tytuł książki, którą chcesz wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Tytuł" name="librarySF" value="{$library->library}"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj</button>
	</fieldset>
    </form>
</div>	              
                
{include file='messages.tpl'}


{/block}

{block name=booksTable}
<div id="tab_prod">
            {include file="BookView.tpl"}
</div>
{/block}
