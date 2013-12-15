<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 16:45:26
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/form_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38190353252adc57f98ffb4-32031673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67eabf4918c4f6b90efd80bd8d083c21034b0b1a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/form_contact.tpl',
      1 => 1387120378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38190353252adc57f98ffb4-32031673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52adc57f99f945_69014336',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adc57f99f945_69014336')) {function content_52adc57f99f945_69014336($_smarty_tpl) {?><form class="form-horizontal" role="form" action="processcontactform.php" method="post">
 <input type = "hidden" name="contact_id" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['contact_id'];?>
" />
    <div class="form-group">
    <label for="contactname" class="col-lg-2 control-label">Contact Name</label>
    <div class="col-lg-10">
      <input type="text" name="contact_name" id="contactname" class="form-control" id="contactname" 
             value="<?php echo $_smarty_tpl->tpl_vars['row']->value['contact_name'];?>
" placeholder="movie">
    </div>
  </div>
  <div class="form-group">
    <label for="contactphone" class="col-lg-2 control-label">Contact Phone No.</label>
    <div class="col-lg-10">
      <input type="text" name="contact_phone_no" class="form-control" id="contactphone"
             placeholder="contactphone" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['contact_phone_no'];?>
">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Create Contact</button>
    </div>
  </div>
</form><?php }} ?>
