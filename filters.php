<?php 
  // check for posted data
  // if( filter_has_var(INPUT_POST, 'data') ){
  //   echo "Data found";
  // } else {
  //   echo "No data";
  // }
  

  // email validation
  if( filter_has_var(INPUT_POST, 'data') ){

    // take post date and place it in email
    $email = $_POST['data'];

    echo $email . '<br>';

    // remove illeagle characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    echo $email . '<br>';

    // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
    //   echo 'Email is valid';
    // } else {
    //   echo 'Email not valid';
    // }

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo 'Email is valid';
    } else {
      echo 'Email not valid';
    }

    /*
      FILTER_VALIDATE_BOOLEAN
      FILTER_VALIDATE_EMAIL
      FILTER_VALIDATE_FLOAT
      FILTER_VALIDATE_INT
      FILTER_VALIDATE_IP
      FILTER_VALIDATE_REGEXP
      FILTER_VALIDATE_URL

      FILTER_SANITIZE_EMAIL
      FILTER_SANITIZE_ENCODED
      FILTER_SANITIZE_NUMBER_FLOAT
      FILTER_SANITIZE_NUMBER_INT
      FILTER_SANITIZE_SPECIAL_CHARS
      FILTER_SANITIZE_STRING
      FILTER_SANITIZE_URL
    */
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Filters form</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="data">
    <button type="submit">Submit</button>
  </form>
<hr>
  <div>
  <?php
    $var = "apple";
    
        if(filter_var($var, FILTER_VALIDATE_INT)){
          echo $var . ' is a number';
        } else {
          echo $var . ' is not a number';
        }
  ?>
  </div>
</body>
</html>