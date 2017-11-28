<?php
  require('config/config.php');
  require('config/db.php');

  // create query
  $query = 'SELECT * FROM posts ORDER BY created_at DESC';
  // fetch query and story in var
  $result = mysqli_query($conn, $query);

  // fetch data and add to associative array
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free the result from memory
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);

?>
  <?php include('inc/header.php') ?>

  <div class="container">

    <h1 class="header">Posts (Blog)</h1>
    <?php foreach($posts as $post): ?>
    <div class="post card">
      <div class="card-header">
        <h3>Title:
          <?php echo $post['title']; ?>
        </h3>
      </div>
      <div class="card-body">
        <p class="card-text">
          <?php echo $post['body']; ?>
        </p>
      </div>
      <div>
        <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary float-right read-more-btn">Read more</a>
      </div>
      <div class="card-footer">
        <p> Created by:
          <?php echo $post['author']; ?>
          <span class="float-right">Created at:
            <?php echo $post['created_at']; ?>
          </span>
        </p>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
  <!-- end container -->

  <?php include('inc/footer.php') ?>