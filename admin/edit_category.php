<?php include 'includes/header.php'; ?>
<form role="form" method="post" action="edit_category.php">
  <div class="form-group">
    <label>category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category">
  </div>
  <div>
    <input type="submit" type="submit" class="btn btn-default" value="Submit">
    <input type="delete" type="submit" class="btn btn-danger" value="Delete">
    <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
  <br>
</form>

<?php include 'includes/footer.php'; ?>