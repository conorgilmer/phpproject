<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 06:25:33
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listproperties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102919500852ad3c0653bc77-48563049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cdef11382dc36ce5535cb36f3274310128743f9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listproperties.tpl',
      1 => 1387084864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102919500852ad3c0653bc77-48563049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ad3c065b78a4_33522601',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad3c065b78a4_33522601')) {function content_52ad3c065b78a4_33522601($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Properties available</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_addr1'];?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_addr2'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_addr3'];?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_county'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_contact'];?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_size'];?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_status'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_type'];?>
</td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['property_id'];?>
">Edit</a><td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['property_id'];?>
">Delete</a><td>
    </tr>
<?php } ?>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
<?php }} ?>
