<?php
/* Smarty version 3.1.30, created on 2020-09-30 18:24:29
  from "C:\xampp3\htdocs\Pr_Ksiegarnia\app\views\ProductsView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f74b13d262025_89434311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b3402cd624d7f58b1af40316b69cd943c62adb2' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\Pr_Ksiegarnia\\app\\views\\ProductsView.tpl',
      1 => 1601482920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:ProductsPartView.tpl' => 1,
  ),
),false)) {
function content_5f74b13d262025_89434311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3150129025f74b13d25fe80_51561820', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4608967725f74b13d261832_67516031', 'booksTable');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_3150129025f74b13d25fe80_51561820 extends Smarty_Internal_Block
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
ProductView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
BookView','tab_book'); return false;">
	<legend>Wpisz poniżej tytuł książki, którą chcesz wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Tytuł" name="productSF" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->product;?>
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
class Block_4608967725f74b13d261832_67516031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_prod">
            <?php $_smarty_tpl->_subTemplateRender("file:ProductsPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'booksTable'} */
}
