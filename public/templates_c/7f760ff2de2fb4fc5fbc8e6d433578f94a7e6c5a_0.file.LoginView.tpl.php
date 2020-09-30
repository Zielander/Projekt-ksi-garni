<?php
/* Smarty version 3.1.30, created on 2020-09-26 10:30:59
  from "C:\xampp3\htdocs\Pr_Ksiegarnia\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f6efc4349f462_52170116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f760ff2de2fb4fc5fbc8e6d433578f94a7e6c5a' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\Pr_Ksiegarnia\\app\\views\\LoginView.tpl',
      1 => 1600908856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f6efc4349f462_52170116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10932904235f6efc4349eea3_44180729', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_10932904235f6efc4349eea3_44180729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NavigateShow"  class="pure-menu-heading pure-menu-link">Powrót do sklepu</a>
</div>
    
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Login" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-12-24">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-11-24">
			<label for="id_login">Hasło: </label>
			<input id="id_hasło" type="password" name="pass"/><br />
		</div>
			<input type="submit" value="Zaloguj" class="pure-button"/>
	</fieldset>
</form>
        
<div style="text-align:center">
    <a class="pure-button button-rejestracja" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Register">Nie masz jeszcze konta? Zarejestruj się!</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
