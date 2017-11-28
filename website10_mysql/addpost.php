<?php

require 'config/config.php';
require 'config/db.php';

// check for submit
if( isset($_POST['title']) && isset($_POST['submit']) ){
  
  // get form data
  $title = mysqli_real_escape_string($connection, $_POST['title']);
  $author = mysqli_real_escape_string($connection, $_POST['author']);
  $body = mysqli_real_escape_string($connection, $_POST['body']);
  
  $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";


  if( mysqli_query($connection, $query)) {
    header('Location: ' . ROOT_URL . '');
  } else {
    echo '<p class="alert alert-danger"> Error: ' . mysqli_error($connection) . '</p>';
  }

} 


?>
  <?php include('inc/header.php'); ?>
  <?php include('inc/navbar.php'); ?>

  <div class="container">
    <h1>Add Post</h1>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title"  placeholder="Enter title">
      </div>

      <div class="form-group">
        <label for="author">Author</label>
        <input name="author" type="text" class="form-control" id="author" placeholder="Author">
      </div>

      <div class="form-group">
        <label for="body">Author</label>
        <textarea class="form-control" name="body" id="body" cols="10" rows="10"></textarea>
      </div>
      
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>

    </form>

  </div>
  <!-- end container -->

  <?php include('inc/footer.php');