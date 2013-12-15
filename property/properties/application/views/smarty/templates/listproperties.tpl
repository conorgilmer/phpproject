 <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Properties available</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          <tr><th>Id</th><th>Addr 1</th><th>Addr 2</th><th>Addr 3</th> <th>County</th><th>Contact</th>
              <th>Price</th><th>Size</th><th>Status</th><th>Type</th><th span cols="2">Actions</th>
          </tr>
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
        <td><a class="btn btn-default" href="{$urlAction}=editproperty&id={$row['property_id']}">Edit</a><td>
        <td><a class="btn btn-default" href="{$urlAction}=delete&id={$row['property_id']}">Delete</a><td>
    </tr>
{/foreach}
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
