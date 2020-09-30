<?php
/* Smarty version 3.1.30, created on 2020-09-30 19:01:55
  from "C:\xampp3\htdocs\Pr_Ksiegarnia\app\views\LibraryView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f74ba03ee35c8_51506842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ae44a466422bd038a07635aa9c5d046ebaf9c8f' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\Pr_Ksiegarnia\\app\\views\\LibraryView.tpl',
      1 => 1601485263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:BookView.tpl' => 1,
  ),
),false)) {
function content_5f74ba03ee35c8_51506842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7270286915f74ba03ee0a89_31081667', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10322740035f74ba03ee2a85_50716385', 'booksTable');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_7270286915f74ba03ee0a89_31081667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backFromService"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót na stronę główną</a>
</div>
    
        <p></p>

<div>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
LibraryView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
BookView','tab_book'); return false;">
	<legend>Wpisz poniżej tytuł książki, którą chcesz wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Tytuł" name="librarySF" value="<?php echo $_smarty_tpl->tpl_vars['library']->value->library;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj</button>
	</fieldset>
    </form>
</div>	              
                
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php
}
}
/* {/block 'content'} */
/* {block 'booksTable'} */
class Block_10322740035f74ba03ee2a85_50716385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_prod">
            <?php $_smarty_tpl->_subTemplateRender("file:BookView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'booksTable'} */
}
