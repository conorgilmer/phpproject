 <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Agents</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
{foreach $rows as $row}
    <tr>
        <td>{$row['contact_id']}</td>
        <td>{$row['contact_name']}</td>
        <td><a class="btn btn-default" href="{$urlAction}=edit&id={$row['contact_id']}">Edit</a><td>
        <td><a class="btn btn-default" href="{$urlAction}=delete&id={$row['contact_id']}">Delete</a><td>
    </tr>
{/foreach}
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
