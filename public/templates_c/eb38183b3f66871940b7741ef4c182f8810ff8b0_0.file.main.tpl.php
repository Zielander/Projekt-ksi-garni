<?php
/* Smarty version 3.1.30, created on 2020-09-30 17:24:53
  from "C:\xampp3\htdocs\Pr_Ksiegarnia\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f74a34555a7c7_11227391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb38183b3f66871940b7741ef4c182f8810ff8b0' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\Pr_Ksiegarnia\\app\\views\\templates\\main.tpl',
      1 => 1601478162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f74a34555a7c7_11227391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Default description" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Default title" : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-grid.css">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/grids-responsive-min.css" />
    
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_hide_intro.css">
<?php }?>
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/softscroll.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/scrollbooster.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<div>
    <style scoped="">

        .button-light_blue {
            color: #fff;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-logowanie{
            background: rgb(0, 128, 128);
        }

        .button-rejestracja{
            background: rgb(49, 100, 49);
        }
        
        .button-koszyk{
            background: rgb(128, 0, 0);
        }
    </style>
</div>    
    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17895886105f74a3455550d2_84669931', 'header');
?>

        
<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Default page title" : $tmp);?>
</h1>
        <t1 class="splash-subhead">
             <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Default description" : $tmp);?>

        </t1>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Do sklepu</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div id="app_content" class="content">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1625989425f74a3455582d2_22741030', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19586583475f74a345559131_31054887', 'booksTable');
?>


    </div>

    <div class="footer l-box is-center">
		<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5176269115f74a345559f26_91126104', 'footer');
?>

		</p>
        <p>Widok oraz szablon zaczerpnięty z: <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (Autor strony: Maciej Zieliński)</p>
    </div>

</div>


</body>
</html><?php }
/* {block 'header'} */
class Block_17895886105f74a3455550d2_84669931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
    
<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Default page title" : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Do góry strony</a></li>
            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
            <li class="pure-menu-selected"><a class="button-logowanie pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Logout">Wyloguj się</a></li>
            <li></li>
            <?php } else { ?>
            <li class="pure-menu-selected"><a class="button-logowanie pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Login">Zaloguj się</a></li>
            <li></li>
            <?php }?>
            <li class="pure-menu-selected"><a class="button-rejestracja pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Register">Zarejestruj się</a></li>
            <li></li>
            <li class="pure-menu-selected"><a class="button-koszyk pure-button" >Koszyk</a></li>
        </ul>
    </div>
</div>
        
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1625989425f74a3455582d2_22741030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślny stuff <?php
}
}
/* {/block 'content'} */
/* {block 'booksTable'} */
class Block_19586583475f74a345559131_31054887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'booksTable'} */
/* {block 'footer'} */
class Block_5176269115f74a345559f26_91126104 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Dziękujemy za skorzystanie z naszego sklepu! <?php
}
}
/* {/block 'footer'} */
}
