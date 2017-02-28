<?php include 'includes/header.php'; ?>
<?php

  $db = new Db();

  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($db->link, $_POST['name']);    
    if($name == ''){
      $error = 'Please fill out required field';
    } else {
      $query = "INSERT INTO categories (name) VALUES ('$name')";
      $insert_row = $db->insert($query);
    }

  }
?>
<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category">
  </div>
  <div>
    <input name="submit" type="submit" class="btn btn-default" value="Submit">
    <a href="index.php" class="btn btn-default">Cancel</a>

  </div>
  <br>
</form>

<?php include 'includes/footer.php'; ?>
