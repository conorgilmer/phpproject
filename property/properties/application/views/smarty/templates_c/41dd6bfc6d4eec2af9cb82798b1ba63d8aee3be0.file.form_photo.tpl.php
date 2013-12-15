<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 17:45:01
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/form_photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41922713052adda4ebe1360-49525544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41dd6bfc6d4eec2af9cb82798b1ba63d8aee3be0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/form_photo.tpl',
      1 => 1387125897,
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
 <input type = "hidden" name="movie_id" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>
" />
    <div class="form-group">
    <label for="movietitle" class="col-lg-2 control-label">Photo</label>
    <div class="col-lg-10">
      <input type="text" name="movietitle" id="movietitle" class="form-control" id="inputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" placeholder="movie">
    </div>
  </div>
  <div class="form-group">
    <label for="cinema" class="col-lg-2 control-label">Cinema</label>
    <div class="col-lg-10">
      <input type="text" name="cinema" class="form-control" id="cinema" placeholder="cinema">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Create Movie</button>
    </div>
  </div>
</form><?php }} ?>
