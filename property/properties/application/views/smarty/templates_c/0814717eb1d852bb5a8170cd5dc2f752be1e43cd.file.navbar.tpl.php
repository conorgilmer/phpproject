<?php /* Smarty version Smarty-3.1.15, created on 2013-12-15 16:06:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15922833452adc55f195010-19220923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0814717eb1d852bb5a8170cd5dc2f752be1e43cd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/navbar.tpl',
      1 => 1387107693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15922833452adc55f195010-19220923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlAction' => 0,
    'loggedIn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52adc55f1d7e20_65867261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adc55f1d7e20_65867261')) {function content_52adc55f1d7e20_65867261($_smarty_tpl) {?> <div class="navbar navbar-inverse navbar-fixed-top">
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
=createproperty">Create Property</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listproperties">List Properties</a></li>
                <li class="divider"></li>
        
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=createphoto">Insert Photo</a></li>
                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listphotos">List Photos</a></li>
                <li class="divider"></li>
        
                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=createcontact">Create Agent</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listcontacts">List Agents</a></li>
                <li class="divider"></li>
                
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
