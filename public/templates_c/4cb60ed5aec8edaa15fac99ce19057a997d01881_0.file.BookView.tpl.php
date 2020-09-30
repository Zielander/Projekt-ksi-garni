<?php
/* Smarty version 3.1.30, created on 2020-09-30 18:36:50
  from "C:\xampp3\htdocs\Pr_Ksiegarnia\app\views\BookView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f74b422dcdea5_08224714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cb60ed5aec8edaa15fac99ce19057a997d01881' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\Pr_Ksiegarnia\\app\\views\\BookView.tpl',
      1 => 1601481987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:BookView.tpl' => 2,
  ),
),false)) {
function content_5f74b422dcdea5_08224714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1265579245f74b422dcb7b6_63054762', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10430903865f74b422dccbf4_46079231', 'booksTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12380977155f74b422dcda31_01194424', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1265579245f74b422dcb7b6_63054762 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NewBook"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Dodaj książkę do bazy</a>
</div>
    
        <p></p>

<div>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BookView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
BookView','tab_'); return false;">
	<legend>Wpisz poniżej model procesora aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="productSF" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->product;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj procesor</button>
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
class Block_10430903865f74b422dccbf4_46079231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_book">
            <?php $_smarty_tpl->_subTemplateRender("file:BookView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</div>
<?php
}
}
/* {/block 'booksTable'} */
/* {block 'footer'} */
class Block_12380977155f74b422dcda31_01194424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thank You for using my (unfortunately outdated) cellar calculator! Work on improvement is ongoing.<?php
}
}
/* {/block 'footer'} */
}
