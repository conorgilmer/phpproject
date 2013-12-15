<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 17:35:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listphotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35399822652add4704d9e91-31918394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7319e159b8e2f7993bfd8b0cb70703667b665cae' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listphotos.tpl',
      1 => 1387125204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35399822652add4704d9e91-31918394',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52add470545309_00568586',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52add470545309_00568586')) {function content_52add470545309_00568586($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Photos</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
          <tr><th>ID</th> <th>Photo Title</th><th>File Name</th> <th>Prop Id.</th> <th>File Type</th> <th>Timestamp</th> <th span cols="2">Actions</th></tr>
          
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['photo_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['file_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['prop_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['file_type'];?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['file_ts'];?>
</td>
     
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=editphoto&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_id'];?>
">Edit</a><td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_id'];?>
">Delete</a><td>
    </tr>
<?php } ?>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
<?php }} ?>
