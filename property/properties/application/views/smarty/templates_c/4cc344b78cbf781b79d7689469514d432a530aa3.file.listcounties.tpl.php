<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 17:25:42
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listcounties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197335821852add7d0892e73-18862831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cc344b78cbf781b79d7689469514d432a530aa3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/listcounties.tpl',
      1 => 1387124740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197335821852add7d0892e73-18862831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52add7d08ed311_29356113',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52add7d08ed311_29356113')) {function content_52add7d08ed311_29356113($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Areas</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
          <tr><th>ID</th> <th>County Name</th></tr><!--th span cols="2">Actions</th></tr-->
          
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['county_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['county_name'];?>
</td>
        <!--td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['county_id'];?>
">Edit</a><td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['county_id'];?>
">Delete</a><td>
 -->   </tr>
<?php } ?>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
<?php }} ?>
