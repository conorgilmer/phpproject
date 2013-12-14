<?php /* Smarty version Smarty-3.1.15, created on 2013-12-14 22:38:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listcontacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189343730252accf8b8dab24-19093984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b266f75d28953a1651e81fbee34ecdbad6558f6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listcontacts.tpl',
      1 => 1387057098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189343730252accf8b8dab24-19093984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52accf8b93c471_45564195',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52accf8b93c471_45564195')) {function content_52accf8b93c471_45564195($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Agents</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['contact_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['contact_name'];?>
</td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['contact_id'];?>
">Edit</a><td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['contact_id'];?>
">Delete</a><td>
    </tr>
<?php } ?>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
<?php }} ?>
