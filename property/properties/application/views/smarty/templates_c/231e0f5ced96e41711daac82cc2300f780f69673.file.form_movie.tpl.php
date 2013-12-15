<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 16:16:44
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/form_movie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15536252852adc7dc783da7-88838890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '231e0f5ced96e41711daac82cc2300f780f69673' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/form_movie.tpl',
      1 => 1382558164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15536252852adc7dc783da7-88838890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52adc7dc7920d8_39815881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adc7dc7920d8_39815881')) {function content_52adc7dc7920d8_39815881($_smarty_tpl) {?><form class="form-horizontal" role="form" action="processform.php" method="post">
 <input type = "hidden" name="movie_id" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>
" />
    <div class="form-group">
    <label for="movietitle" class="col-lg-2 control-label">Movie Title</label>
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
