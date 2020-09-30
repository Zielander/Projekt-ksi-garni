<?php
/* Smarty version 3.1.30, created on 2020-09-30 19:01:19
  from "C:\xampp3\htdocs\Pr_Ksiegarnia\app\views\NavigateView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f74b9df651c40_93891636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4965f5f9da0dbe44db4da3bb6947f8991240b65e' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\Pr_Ksiegarnia\\app\\views\\NavigateView.tpl',
      1 => 1601485261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f74b9df651c40_93891636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17123402745f74b9df651787_45055793', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_17123402745f74b9df651787_45055793 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  

<h2 class="content-head is-center">Księgarnia</h2>

<div class="pure-g">

<div class="l-box-lrg pure-u-1 pure-u-med-14-24">
    <div class="pure-menu-horizontal">
        <li class="pure-menu-selected"><a class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
LibraryView">Przeglądaj nasze książki</a>
    </div>
</div>
    
<div class="l-box-lrg pure-u-1 pure-u-med-10-24">
    
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
