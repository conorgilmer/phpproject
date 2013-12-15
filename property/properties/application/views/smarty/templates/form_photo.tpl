<form class="form-horizontal" role="form" action="processphotoform.php" method="post">
 <input type = "hidden" name="photo_id" value = "{$row['photo_id']}" />
    <div class="form-group">
    <label for="title" class="col-lg-2 control-label">Photo Title</label>
    <div class="col-lg-10">
      <input type="text" name="title" id="title" class="form-control"
              value="{$row['title']}" placeholder="title">
    </div>
  </div>
    
        <!--div class="form-group">
    <label for="file_name" class="col-lg-2 control-label">File Name</label>
    <div class="col-lg-10">
      <input type="text" name="file_name" id="file_name" class="form-control"
              value="{$row['file_name']}" placeholder="file_name">
    </div>
  </div-->
    
    
        <div class="form-group">
    <label for="file_name" class="col-lg-2 control-label">Upload File</label>
    <div class="col-lg-10">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
<input name="file" type="file" />
		</div>
	</div>
        
    
    

     <div class="form-group">
    <label for="prop_id" class="col-lg-2 control-label">Property ID</label>
    <div class="col-lg-10">
      <input type="text" name="prop_id" id="prop_id" class="form-control"
              value="{$row['prop_id']}" placeholder="prop_id">
    </div>
  </div>

 

 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Insert Photo</button>
    </div>
  </div>
</form>