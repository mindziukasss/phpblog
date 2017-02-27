<?php include 'includes/header.php'; ?>
<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category">
  </div>
  <div>
    <input type="submit" type="submit" class="btn btn-default" value="Submit">
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input type="delete" type="submit" class="btn btn-danger" value="Delete">
  </div>
  <br>
</form>

<?php include 'includes/footer.php'; ?>
