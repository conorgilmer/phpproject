<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 06:20:03
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listhousetype.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150940319252ad39e14a5538-20476144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3f3ae94acc487c8f52403bae219c29b9a22f9e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listhousetype.tpl',
      1 => 1387084271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150940319252ad39e14a5538-20476144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ad39e1501e32_99494709',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad39e1501e32_99494709')) {function content_52ad39e1501e32_99494709($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
    <div class='col-md-2'>House Types</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['housetype_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['housetype_name'];?>
</td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['housetype_id'];?>
">Edit</a><td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['housetype_id'];?>
">Delete</a><td>
    </tr>
<?php } ?>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
<?php }} ?>
