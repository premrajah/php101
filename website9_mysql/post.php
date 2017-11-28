<?php

  require('config/config.php');
  require('config/db.php');

  //Get webpage query id
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // create query
  $query = 'SELECT * FROM posts WHERE id =' . $id;
  // fetch query and story in var
  $result = mysqli_query($conn, $query);

  // fetch data and add to associative array
  $posts = mysqli_fetch_assoc($result);

  // free the result from memory
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);

?>

  <?php include('inc/header.php') ?>

  <div class="container">

    <h1 class="header"><?php echo $posts['title']; ?></h1>
    <div class="">
      <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary back-btn">Back</a>
    </div>
    <div class="post card">
      <div class="card-header">
        <h3>Title:
          <?php echo $posts['title']; ?>
        </h3>
      </div>
      <div class="card-body">
        <p class="card-text">
          <?php echo $posts['body']; ?>
        </p>
      </div>
      <div class="card-footer">Created by:
          <?php echo $posts['author']; ?> 
          <span class="float-right">
            Created at: <?php echo $posts['created_at']; ?>
          </span>
      </div>
    </div>
    <div class="editing">
    <a href="<?php echo ROOT_URL; ?>editpost.php?=<?php echo $_POST['id']; ?>" class="btn btn-primary edit-btn float-right">Edit</a>
    </div>
  </div>
  <!-- end container -->

  <?php include('inc/footer.php') ?>