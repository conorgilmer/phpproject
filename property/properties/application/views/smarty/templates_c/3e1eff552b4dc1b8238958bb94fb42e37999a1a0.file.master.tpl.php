<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 16:06:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131748262352adc55f091aa0-37389063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e1eff552b4dc1b8238958bb94fb42e37999a1a0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/master.tpl',
      1 => 1381352022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131748262352adc55f091aa0-37389063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showJumboTron' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52adc55f17b921_40627435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adc55f17b921_40627435')) {function content_52adc55f17b921_40627435($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['showJumboTron']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
