<?php
/* Smarty version 3.1.30, created on 2020-09-30 18:24:29
  from "C:\xampp3\htdocs\Pr_Ksiegarnia\app\views\ProductsPartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f74b13d384fe6_27930965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f59abc0808f224a6f249aa732e78e17445046d' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\Pr_Ksiegarnia\\app\\views\\ProductsPartView.tpl',
      1 => 1601482920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f74b13d384fe6_27930965 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-g">
<div class="pure-u-1-1">
   <table style="margin: auto;" id="tab_nazw" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="5">Dostępne książki</th></tr>
                <th>Id książki</th>
                <th>Autor</th>
                <th>Tytuł</th>
                <th>Wydawnictwo</th>
                <th>Cena</th>
            </tr>           
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['n']->value["id_ksiazki"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["autor"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["tytul"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["wydawnictwo"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["cena"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
bookEdit/<?php echo $_smarty_tpl->tpl_vars['n']->value['id_ksiazki'];?>
">Dodaj do koszyka</a>&nbsp;</td></tr>
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
