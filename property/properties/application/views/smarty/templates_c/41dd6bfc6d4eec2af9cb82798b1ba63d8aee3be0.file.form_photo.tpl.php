<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 18:02:33
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/form_photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41922713052adda4ebe1360-49525544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41dd6bfc6d4eec2af9cb82798b1ba63d8aee3be0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/form_photo.tpl',
      1 => 1387126947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41922713052adda4ebe1360-49525544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52adda4ec7e7f8_21177975',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adda4ec7e7f8_21177975')) {function content_52adda4ec7e7f8_21177975($_smarty_tpl) {?><form class="form-horizontal" role="form" action="processphotoform.php" method="post">
 <input type = "hidden" name="photo_id" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_id'];?>
" />
    <div class="form-group">
    <label for="title" class="col-lg-2 control-label">Photo Title</label>
    <div class="col-lg-10">
      <input type="text" name="title" id="title" class="form-control"
              value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" placeholder="title">
    </div>
  </div>
    
        <!--div class="form-group">
    <label for="file_name" class="col-lg-2 control-label">File Name</label>
    <div class="col-lg-10">
      <input type="text" name="file_name" id="file_name" class="form-control"
              value="<?php echo $_smarty_tpl->tpl_vars['row']->value['file_name'];?>
" placeholder="file_name">
    </div>
  </div-->
    
    
        <div class="form-group">
    <label for="file_name" class="col-lg-2 control-label">Upload File</label>
    <div class="col-lg-10">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
<input name="file" type="file" />
		</div>
	</div>
        
    
    

     <div class="form-group">
    <label for="prop_id" class="col-lg-2 control-label">Property ID</label>
    <div class="col-lg-10">
      <input type="text" name="prop_id" id="prop_id" class="form-control"
              value="<?php echo $_smarty_tpl->tpl_vars['row']->value['prop_id'];?>
" placeholder="prop_id">
    </div>
  </div>

 

 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Insert Photo</button>
    </div>
  </div>
</form><?php }} ?>
