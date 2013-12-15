<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 17:24:04
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listproperties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158597578652adc81a6f56c4-19688023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cdef11382dc36ce5535cb36f3274310128743f9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listproperties.tpl',
      1 => 1387124636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158597578652adc81a6f56c4-19688023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52adc81a76e541_83130944',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adc81a76e541_83130944')) {function content_52adc81a76e541_83130944($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Properties available</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          <tr><th>Id</th><th>Addr 1</th><th>Addr 2</th><th>Addr 3</th> <th>County</th><th>Contact</th>
              <th>Price</th><th>Size</th><th>Status</th><th>Type</th><th span cols="2">Actions</th>
          </tr>
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
=editproperty&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['property_id'];?>
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
