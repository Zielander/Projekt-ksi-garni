<?php
/* Smarty version 3.1.30, created on 2020-09-30 16:54:49
  from "C:\xampp3\htdocs\Pr_Ksiegarnia\app\views\BookPartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f749c3938c433_23499470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdfa0252c3fc439908047775f22f03f4f9037d19' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\Pr_Ksiegarnia\\app\\views\\BookPartView.tpl',
      1 => 1600912646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f749c3938c433_23499470 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-g">
<div class="pure-u-1-2">
   <table style="margin: auto;" id="tab_nazw" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="4">Dostępne procesory</th></tr>
                <th>Id towaru</th>
                <th>Producent</th>
                <th>Model</th>
                <th>Opcje</th>
            </tr>           
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['n']->value["idtowar"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["producent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["model"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
bookEdit/<?php echo $_smarty_tpl->tpl_vars['n']->value['idtowar'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
bookDelete/<?php echo $_smarty_tpl->tpl_vars['n']->value['idtowar'];?>
','Czy na pewno usunąć rekord ?')">Usuń</a></td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
</div>

<div class="pure-u-1-2">
    <table style="margin: auto;" id="tab_parametrow" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="4">Parametry procesorów</th></tr>
                <th>Id towaru</th>
                <th>Nazwa Parametrów</th>
                <th>Wartość Parametrów</th>
                     
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['d']->value["idtowar"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["nazwa_parametru"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["wartosc_parametrow"];?>
</td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
</div>
</div>
        
<?php }
}
