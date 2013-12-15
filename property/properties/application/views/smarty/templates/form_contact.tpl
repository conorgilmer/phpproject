<form class="form-horizontal" role="form" action="processcontactform.php" method="post">
 <input type = "hidden" name="contact_id" value = "{$row['contact_id']}" />
    <div class="form-group">
    <label for="contactname" class="col-lg-2 control-label">Contact Name</label>
    <div class="col-lg-10">
      <input type="text" name="contact_name" id="contactname" class="form-control" id="contactname" 
             value="{$row['contact_name']}" placeholder="movie">
    </div>
  </div>
  <div class="form-group">
    <label for="contactphone" class="col-lg-2 control-label">Contact Phone No.</label>
    <div class="col-lg-10">
      <input type="text" name="contact_phone_no" class="form-control" id="contactphone"
             placeholder="contactphone" value="{$row['contact_phone_no']}">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Create Contact</button>
    </div>
  </div>
</form>