<?php

require 'config/config.php';
require 'config/db.php';

// check for submit and update
if( isset($_POST['title']) && isset($_POST['submit']) ){
  
  // get form data
  $update_id = mysqli_real_escape_string($connection, $_POST['update_id']);
  $title = mysqli_real_escape_string($connection, $_POST['title']);
  $author = mysqli_real_escape_string($connection, $_POST['author']);
  $body = mysqli_real_escape_string($connection, $_POST['body']);
  
  $query = "UPDATE posts SET  title='$title', author='$author', body='$body' WHERE id = {$update_id}";

  if( mysqli_query($connection, $query)) {
    header('Location: ' . ROOT_URL . '');
  } else {
    echo '<p class="alert alert-danger"> Error: ' . mysqli_error($connection) . '</p>';
  }

} 

// get id with security 
$id = mysqli_real_escape_string($connection, $_GET['id']) ;

// select everything from database
$query = 'SELECT * FROM posts WHERE id = ' . $id;

// get results from query
$result = mysqli_query($connection, $query);

// fetch data and put into variable
$posts = mysqli_fetch_assoc($result);
//var_dump($posts);

// free resukt from memory result
mysqli_free_result($result);

//close conenction
mysqli_close($connection);





?>
  <?php include('inc/header.php'); ?>
  <?php include('inc/navbar.php'); ?>

  <div class="container">
    <h1>Add Post</h1>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" value="<?php echo $posts['title']; ?>" class="form-control" id="title"  placeholder="Enter title">
      </div>

      <div class="form-group">
        <label for="author">Author</label>
        <input name="author" type="text" value="<?php echo $posts['author']; ?>" class="form-control" id="author" placeholder="Author">
      </div>

      <div class="form-group">
        <label for="body">Author</label>
        <textarea class="form-control" name="body" cols="10" rows="10"><?php echo $posts['body']; ?></textarea>
      </div>
      
      <input type="hidden" name="update_id" value="<?php echo $posts['id']; ?>">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>

    </form>

  </div>
  <!-- end container -->

  <?php include('inc/footer.php');