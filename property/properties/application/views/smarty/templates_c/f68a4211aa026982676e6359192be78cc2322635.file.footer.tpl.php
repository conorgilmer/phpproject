<?php /* Smarty version Smarty-3.1.15, created on 2013-12-22 05:09:29
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16783753752adc55f1e7f35-75319976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f68a4211aa026982676e6359192be78cc2322635' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpproject/property/properties/application/views/smarty/templates/footer.tpl',
      1 => 1387685362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16783753752adc55f1e7f35-75319976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52adc55f1f3cf7_20506308',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adc55f1f3cf7_20506308')) {function content_52adc55f1f3cf7_20506308($_smarty_tpl) {?>  <hr>

      <footer>
        <p>&copy; <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 we 2.1</p>
      </footer>
    </div> <!-- /container -->  

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/bootstrap/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
  <script>        
          $(document).ready(function () {
              console.log('jquery loaded');
            $('#btnLoadMovies').click(loadJsonMoviesApi);

          });//close on ready
          
          function loadJsonMoviesApi() {
          
          var url = "?action=filter";
          
          if ($('#cinema_id').val() > 0) {
          
          url += '&cinema_id=' + $('#cinema_id').val();
          
          }
          
            if ($('#movie_id').val() > 0) {
          
          url += '&movie_id=' + $('#movie_id').val();
          
          }
          $('#ajaxContent').empty();
          $.getJSON('api.php'+url, function(data) {

            //    console.log('loaded');
                
              var items=''; //Create a variable so you can build up a html string  
                        $.each(data, function(i,jsonItem){  
                            items += "<h1>" + jsonItem['title'] + "</h1>";  
                            items += "<p>" + jsonItem['movie_id'] + "</p>";  
                            items += "<p>" + jsonItem['cinemaTitle'] + "</p>";  
                            
  
                        });       
                    
                        
               $('#ajaxContent').append(items);  
    
            });  
          
          
          
          }
          
   </script>
  
  
  </body>
</html>
<?php }} ?>
