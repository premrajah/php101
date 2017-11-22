<?php
  if(isset($_GET['name'])){
    $name_get =  htmlentities($_GET['name']);
    echo  $name_get;
    echo '<br> Query String : ' . $_SERVER['QUERY_STRING'];
  }

  if(isset($_POST['name'])){
    $name_post =  htmlentities($_POST['name']);
    echo $name_post;
    echo '<br> Query String : ' . $_SERVER['QUERY_STRING'];
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Website</title>
</head>
<body>
  <h1>GET FORM</h1>
  <form action="get_post.php" method="GET">
    <div>
      <label for="name">Name</label><br>
      <input type="text" name="name" >
    </div>
    <div>
      <label for="email">Email</label><br>
      <input type="text" name="email" >
    </div>
    <br>
    <input type="submit" value="Submit">
  </form>
<hr>
  <h1>POST FORM</h1>
  <form action="get_post.php" method="POST">
    <div>
      <label for="name">Name</label><br>
      <input type="text" name="name" >
    </div>
    <div>
      <label for="email">Email</label><br>
      <input type="text" name="email" >
    </div>
    <br>
    <input type="submit" value="Submit">
  </form>
<hr>

<ul>
  <li><a href="get_post.php?name=Prem">Prem</a></li>
  <li><a href="get_post.php?name=Steve">Steve</a></li>
</ul>

<h1><?php echo "{$name_get}'s Profile" ?></h1>

</body>
</html>
