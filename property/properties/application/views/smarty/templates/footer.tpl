  <hr>

      <footer>
        <p>&copy; {$name}</p>
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
