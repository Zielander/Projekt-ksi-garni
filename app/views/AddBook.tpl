{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
</div>
    
<p>
<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
        
<form action="{$conf->action_root}bookSave" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="autor">Wpisz imię i nazwisko autora</label>
                <input id="autor" type="text" placeholder="Autor" name="autor" value="{$form->autor}">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-7-24">
		<label for="tytul">Wpisz tytul</label>
                <input id="tytul" type="text" placeholder="Tytuł" name="tytul" value="{$form->tytul}">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-7-24">
		<label for="wydawnictwo">Wpisz nazwę wydawnictwa</label>
                <input id="wydawnictwo" type="text" placeholder="Wydawnictwo" name="wydawnictwo" value="{$form->wydawnictwo}">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-7-24">
		<label for="cena">Wpisz cenę</label>
                <input id="cena" type="text" placeholder="Cena" name="cena" value="{$form->cena}">
	</div>

        <div class="l-box-lrg pure-u-1 pure-u-med-23-24">
		<input type="submit" value="Zapisz" class="pure-button"/>
        </div>
	</fieldset>
        <input type="hidden" name="id" value="{$form->id}">
</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
{include file='messages.tpl'}
</div>

</div>
{/block}

