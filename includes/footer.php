        </div><!-- /.blog-main -->
      
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php echo $site_description; ?></p>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>
              <?php if($categories) : ?>
            <ol class="list-unstyled">
              <?php while($row = $categories->fetch_assoc()) : ?>
                <li><a href="posts.php?category=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></li>
              <?php endwhile; ?>
            </ol>
          <?php else : ?>
            <p>There are not categories yet </p>
          <?php endif; ?>
          </div>
        </div><!-- /.blog-sidebar -->
        </div>
      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>PHP blog &copy; 2017 </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
