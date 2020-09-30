<?php
/* Smarty version 3.1.30, created on 2020-09-26 10:31:05
  from "C:\xampp3\htdocs\Pr_Ksiegarnia\app\views\RegisterView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f6efc49929681_79744198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00326fb75e55c24c6e58bce727d13653c779eb3f' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\Pr_Ksiegarnia\\app\\views\\RegisterView.tpl',
      1 => 1600152594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f6efc49929681_79744198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1333416195f6efc49928ef9_77144813', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1333416195f6efc49928ef9_77144813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NavigateShow"  class="pure-menu-heading pure-menu-link">Powrót do sklepu</a>
</div>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Register" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="id_email">E-mail: </label>
		<input id="id_email" type="text" placeholder="Email" name="email"/>
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-7-24">
		<label for="id_login">Login: </label>
		<input id="id_login" type="text" placeholder="Login" name="login"/>
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="id_pass">Hasło: </label>
		<input id="id_pass" type="password" placeholder="Hasło" name="pass"/><br />
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-1">
		<input type="submit" value="Zarejestruj" class="pure-button"/>
        </div>
	</fieldset>
</form>
</div>
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>             
                
<?php
}
}
/* {/block 'content'} */
}
