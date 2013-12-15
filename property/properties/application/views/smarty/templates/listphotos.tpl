 <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Photos</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
{foreach $rows as $row}
    <tr>
        <td>{$row['photo_id']}</td>
        <td>{$row['title']}</td>
        
        <td>{$row['file_name']}</td>
        <td>{$row['prop_id']}</td>
        <td>{$row['file_type']}</td>
        
        <td>{$row['file_ts']}</td>
     
        <td><a class="btn btn-default" href="{$urlAction}=edit&id={$row['photo_id']}">Edit</a><td>
        <td><a class="btn btn-default" href="{$urlAction}=delete&id={$row['photo_id']}">Delete</a><td>
    </tr>
{/foreach}
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
