<form class="form-horizontal" role="form" action="processpropertyform.php" method="post">
 <input type = "hidden" name="property_id" value = "{$row['property_id']}" />
    <div class="form-group">
    <label for="addr1" class="col-lg-2 control-label">Address Line 1</label>
    <div class="col-lg-10">
      <input type="text" name="property_addr1" id="addr1" class="form-control" 
              value="{$row['property_addr1']}" placeholder="addr1">
    </div>
  </div>
    <div class="form-group">
    <label for="addr2" class="col-lg-2 control-label">Address Line 2</label>
    <div class="col-lg-10">
      <input type="text" name="property_addr2" id="addr2" class="form-control" 
              value="{$row['property_addr2']}" placeholder="addr2">
    </div>
  </div>
    <div class="form-group">
    <label for="addr3" class="col-lg-2 control-label">Address Line 3</label>
    <div class="col-lg-10">
      <input type="text" name="property_addr3" id="addr3" class="form-control" 
             value="{$row['property_addr3']}" placeholder="addr3">
    </div>
  </div>
    
    
    <div class="form-group">
    <label for="county" class="col-lg-2 control-label">County</label>
    <div class="col-lg-10">
      <input type="text" name="property_county" id="county" class="form-control" 
             value="{$row['property_county']}" placeholder="county">
    </div>
  </div>
    
    
    <div class="form-group">
    <label for="contact" class="col-lg-2 control-label">Contact</label>
    <div class="col-lg-10">
      <input type="text" name="property_contact" id="contact" class="form-control" 
             value="{$row['property_contact']}" placeholder="contact">
    </div>
  </div>
    
    
    <div class="form-group">
    <label for="price" class="col-lg-2 control-label">Price</label>
    <div class="col-lg-10">
      <input type="text" name="property_price" id="price" class="form-control" 
             value="{$row['property_price']}" placeholder="price">
    </div>
  </div>
    
    
    <div class="form-group">
    <label for="floorsize" class="col-lg-2 control-label">Floor Size</label>
    <div class="col-lg-10">
      <input type="text" name="property_size" id="floorsize" class="form-control" 
             value="{$row['property_size']}" placeholder="floorsize">
    </div>
  </div>
    
    
    <div class="form-group">
    <label for="housetype" class="col-lg-2 control-label">House Type</label>
    <div class="col-lg-10">
      <input type="text" name="property_type" id="housetype" class="form-control" 
             value="{$row['property_type']}" placeholder="housetype">
    </div>
  </div>
    
    
    <div class="form-group">
    <label for="status" class="col-lg-2 control-label">Status</label>
    <div class="col-lg-10">
      <input type="text" name="property_status" id="status" class="form-control" 
             value="{$row['property_status']}" placeholder="status">
    </div>
  </div>
    
    

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Create Property</button>
    </div>
  </div>
</form>