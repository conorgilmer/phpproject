 <div class="navbar navbar-inverse navbar-fixed-top">
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
            <li><a href="{$urlAction}=listproperties">List Properties</a></li>
           
             {if $loggedIn==true} 
            <!--li><a href="logout.php">Logout</a></li-->
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{$urlAction}=createproperty">Create Property</a></li>
                <li><a href="{$urlAction}=listphotos">List Photos</a></li>
                <li><a href="{$urlAction}=listcontacts">List Agents</a></li>
                <li><a href="{$urlAction}=listcounties">List Counties</a></li>
                <li><a href="{$urlAction}=listhousetype">List House Type</a></li>
               
                <li class="divider"></li>
                <li class="dropdown-header">Account Admin</li>
               <li><a href="logout.php">Logout</a></li>
          </ul>
            </li>
          </ul>
          {/if}
          {if $loggedIn==false}   
          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" name="username" placeholder="username" class="form-control" value="admin">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control" value="letmein">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          {/if}
        </div><!--/.navbar-collapse -->
      </div>
    </div>