<?php include 'config/config.php'; ?>
<?php include 'libraries/db.php'; ?>
<?php include 'helpers/format_helper.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome To PHP blog</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="posts.php">All posts</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <div class="logo"><img src="images/logo.png"></div>
        <h1 class="blog-title">PHP Blog</h1>
        <p class="lead blog-description">PHP news, tutorials, video & more</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">