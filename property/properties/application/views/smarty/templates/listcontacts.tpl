 <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Agents</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          <tr><th>ID</th> <th>Name</th><th>Phone Number</th> <th span cols="2">Actions</th></tr>
          
{foreach $rows as $row}
    <tr>
        <td>{$row['contact_id']}</td>
        <td>{$row['contact_name']}</td>
        <td>{$row['contact_phone_no']}</td>
        
        <td><a class="btn btn-default" href="{$urlAction}=editcontact&id={$row['contact_id']}">Edit</a><td>
        <td><a class="btn btn-default" href="{$urlAction}=delete&id={$row['contact_id']}">Delete</a><td>
    </tr>
{/foreach}
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
