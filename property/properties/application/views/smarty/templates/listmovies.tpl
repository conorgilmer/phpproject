 <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Left</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
{foreach $rows as $row}
    <tr>
        <td>{$row['movie_id']}</td>
        <td>{$row['title']}</td>
        <td><a class="btn btn-default" href="{$urlAction}=edit&id={$row['movie_id']}">Edit</a><td>
        <td><a class="btn btn-default" href="{$urlAction}=delete&id={$row['movie_id']}">Delete</a><td>
    </tr>
{/foreach}
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
