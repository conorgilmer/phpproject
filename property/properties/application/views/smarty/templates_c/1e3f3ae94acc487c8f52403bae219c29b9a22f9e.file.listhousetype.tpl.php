<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 17:26:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listhousetype.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84753919452add7c2441672-35475222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3f3ae94acc487c8f52403bae219c29b9a22f9e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listhousetype.tpl',
      1 => 1387124780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84753919452add7c2441672-35475222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52add7c24b7738_24641413',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52add7c24b7738_24641413')) {function content_52add7c24b7738_24641413($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
    <div class='col-md-2'>House Types</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
          <tr><th>ID</th> <th>Porperty Type</th> </tr><!--<th span cols="2">Actions</th></tr>-->
          
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
       <!-- <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['housetype_id'];?>
">Edit</a><td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['housetype_id'];?>
">Delete</a><td>
   --> </tr>
<?php } ?>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
<?php }} ?>
