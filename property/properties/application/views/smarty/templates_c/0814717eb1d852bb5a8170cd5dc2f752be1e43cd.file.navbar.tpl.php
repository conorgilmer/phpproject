<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 06:29:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142733320352acca0eae7550-07329226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0814717eb1d852bb5a8170cd5dc2f752be1e43cd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/navbar.tpl',
      1 => 1387085358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142733320352acca0eae7550-07329226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52acca0eafae00_46604683',
  'variables' => 
  array (
    'urlAction' => 0,
    'loggedIn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52acca0eafae00_46604683')) {function content_52acca0eafae00_46604683($_smarty_tpl) {?> <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Property Website</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listproperties">List Properties</a></li>
           
             <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==true) {?> 
            <!--li><a href="logout.php">Logout</a></li-->
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=createmovies">Create Property</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listphotos">List Photos</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listcontacts">List Agents</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listcounties">List Counties</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listhousetype">List House Type</a></li>
               
                <li class="divider"></li>
                <li class="dropdown-header">Account Admin</li>
               <li><a href="logout.php">Logout</a></li>
          </ul>
            </li>
          </ul>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==false) {?>   
          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" name="username" placeholder="username" class="form-control" value="admin">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control" value="letmein">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          <?php }?>
        </div><!--/.navbar-collapse -->
      </div>
    </div><?php }} ?>
