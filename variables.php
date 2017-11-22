<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Variables</title>
</head>
<body>
  <h1>
    <?php 
      $output = "php";
      $num1 = 24; // integers
      $num2 = 4.4; //floats
      $yesno = true;
      
      // constants 
      define('PI', 3.14, true);
    

      echo "Hello $output, $num1 " . $num2 . $yesno ;

      echo ' Escape: They\'re' . "\r\n";

      echo PI;
      echo pi;
    ?>
    </h1>
</body>
</html>