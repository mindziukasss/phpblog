<?php include 'includes/header.php'; ?>
<form>
  <div class="form-group" method="post" action="add_post.php">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
    <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" type="text" class="form-control" placeholder="Enter Post Body"></textarea>
  </div>
    <div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
      <option>News</option>
      <option>Events</option>
    </select>
      <div class="form-group">
      <label>Author</label>
      <input name="body" type="text" class="form-control" placeholder="Enter Author Name">
    </div>
      <div class="form-group">
      <label>Tags</label>
      <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
    </div>
  </div>
  <div>
    <input type="submit" type="submit" class="btn btn-default" value="Submit">
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input type="delete" type="submit" class="btn btn-danger" value="Delete">  </div>
  <br>
</form>

<?php include 'includes/footer.php'; ?>
