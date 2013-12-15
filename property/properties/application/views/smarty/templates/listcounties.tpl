 <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Areas</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
{foreach $rows as $row}
    <tr>
        <td>{$row['county_id']}</td>
        <td>{$row['county_name']}</td>
        <td><a class="btn btn-default" href="{$urlAction}=edit&id={$row['county_id']}">Edit</a><td>
        <td><a class="btn btn-default" href="{$urlAction}=delete&id={$row['county_id']}">Delete</a><td>
    </tr>
{/foreach}
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
