 <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Properties available</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
{foreach $rows as $row}
    <tr>
        <td>{$row['property_id']}</td>
        <td>{$row['property_addr1']}</td>
        
        <td>{$row['property_addr2']}</td>
        <td>{$row['property_addr3']}</td>
        
        <td>{$row['property_county']}</td>
        <td>{$row['property_contact']}</td>
        
        <td>{$row['property_price']}</td>
        <td>{$row['property_size']}</td>
        
        <td>{$row['property_status']}</td>
        <td>{$row['property_type']}</td>
        <td><a class="btn btn-default" href="{$urlAction}=edit&id={$row['property_id']}">Edit</a><td>
        <td><a class="btn btn-default" href="{$urlAction}=delete&id={$row['property_id']}">Delete</a><td>
    </tr>
{/foreach}
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
