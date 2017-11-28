<?php

require 'config/config.php';
require 'config/db.php';

// select everything from database
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

// get results from query
$result = mysqli_query($connection, $query);

// fetch data and put into variable
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($posts);

// free resukt from memory result
mysqli_free_result($result);

//close conenction
mysqli_close($connection);

?>
  <?php include('inc/header.php'); ?>
  <?php include('inc/navbar.php'); ?>

    <div class="container">
      <h1>Posts</h1>

      <?php foreach ($posts as $post): ?>
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">
            <?php echo $post['title']; ?>
          </h3>
          <p class="card-text">
            <?php echo $post['body']; ?>
          </p>
          <p>
            <a class="btn btn-outline-primary btn-sm float-right" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read more</a>
          </p>
        </div>
        <div class="card-footer">
          <small>Created on
            <?php echo $post['created_at']; ?>
            <span class="float-right">by:
              <?php echo $post['author'] ?>
            </span>
          </small>
        </div>
      </div>
      <?php endforeach;?>

    </div>
    <!-- end container -->
  
    <?php include('inc/footer.php');