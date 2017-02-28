<?php include 'includes/header.php'; ?>


<?php

  $db = new Db();

  $query = "SELECT * FROM categories";
  $categories = $db->select($query);
?>
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
      <?php while($row = $categories->fetch_assoc()) :
        if($row['id'] == $post['category']){
          $selected = 'selected';
        }else {
          $selected = '';
        } ?>
        <option <?php echo $selected; ?>><?php echo $row['name']; ?></option>
      <?php endwhile; ?>
    </select>
  </div>
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
    <input name="submit" type="submit" class="btn btn-default" value="Submit">
    <a href="index.php" class="btn btn-default">Cancel</a>
  <br>
</form>

<?php include 'includes/footer.php'; ?>
