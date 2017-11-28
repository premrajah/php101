<?php

require('config/config.php');
require 'config/db.php';

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

    <div class="container">
      <a class=" backBtn btn btn-secondary btn-sm" href="<?php echo ROOT_URL; ?>">Back</a>
      <h1>Title: <?php echo $posts['title']; ?></h1>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title">
            <?php echo $posts['title']; ?>
          </h3>
          <p class="card-text">
            <?php echo $posts['body']; ?>
          </p>
        </div>
        <div class="card-footer">
          <small>Created on
            <?php echo $posts['created_at']; ?>
            <span class="float-right">by:
              <?php echo $posts['author'] ?>
            </span>
          </small>

        </div>
      </div>

    </div>
    <!-- end container -->
    
  <?php include('inc/footer.php');