<?php
  require('config/config.php');
  require('config/db.php');

  //check for submit and title set
  if(isset($_POST['submit']) AND isset($_POST['title'])){
    
    // get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);

    // sql query
    $query = "INSERT INTO posts(title, author, body) VALUES ('$title', '$author', '$body')";

    if(mysqli_query($conn, $query)){
      header('Location: ' . ROOT_URL);
    } else {
      echo "<p class='alert alert-danger'>Error: " . mysqli_error($conn) . "</p>";
    }
  }

?>
  <?php include('inc/header.php') ?>

  <div class="container">
    <h1 class="header">Add Post</h1>
    
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" name="author"  placeholder="Author Name">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

  <?php include('inc/footer.php') ?>