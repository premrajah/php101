<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>System Info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Server and File Info</h1>
    <!-- shorthand php loop/conditional syntax -->
    <?php if($server): ?>
      <ul class="list-group">
        
        <?php foreach ($server as $key => $value): ?>
          <li class="list-group-item"><?php echo $key . ' : ' . $value ?></li>    
        <?php endforeach ?>

      </ul>
    <?php endif; ?>
    <!-- end shorthand php syntax -->

    <h1>Client Info</h1>
    <!-- shorthand php loop/conditional syntax -->
    <?php if($client): ?>
      <ul class="list-group">
        
        <?php foreach ($client as $key => $value): ?>
          <li class="list-group-item"><?php echo $key . ' : ' . $value ?></li>    
        <?php endforeach ?>

      </ul>
    <?php endif; ?>
    <!-- end shorthand php syntax -->
  </div>
</body>
</html>