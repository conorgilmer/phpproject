 <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Left</div>
    <div class='col-md-10'> 
        
        <select id="cinema_id" name="cinema_id">
        <option value="0">Select a Cinema</option>
        {foreach $rowsOfCinemas as $cinema}
         <option value="{$cinema['cinema_id']}">{$cinema['title']}</option>
           {/foreach}
        </select>
        <select id="movie_id" name="movie_id">
        <option value="0">Select a Movie</option>
        {foreach $rowsOfMovies as $movie}
         <option value="{$movie['movie_id']}">{$movie['title']}</option>
         {/foreach}
        
        </select>
        <input id='btnLoadMovies' type="button" value="Show Listings" />

        <div id="ajaxContent">
       
            
            
            
            
        </div>
        
        </div>
      
</div>
     
         </div><!-- /end container -->
