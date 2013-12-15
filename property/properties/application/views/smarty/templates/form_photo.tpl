<form class="form-horizontal" role="form" action="processphotoform.php" method="post">
 <input type = "hidden" name="movie_id" value = "{$row['movie_id']}" />
    <div class="form-group">
    <label for="movietitle" class="col-lg-2 control-label">Photo</label>
    <div class="col-lg-10">
      <input type="text" name="movietitle" id="movietitle" class="form-control" id="inputEmail1" value="{$row['title']}" placeholder="movie">
    </div>
  </div>
  <div class="form-group">
    <label for="cinema" class="col-lg-2 control-label">Cinema</label>
    <div class="col-lg-10">
      <input type="text" name="cinema" class="form-control" id="cinema" placeholder="cinema">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Create Movie</button>
    </div>
  </div>
</form>