<?php
// check for posted data
// if( filter_has_var(INPUT_POST, 'data') ){
//   echo "Data found";
// } else {
//   echo "No data";
// }

// email validation
if (filter_has_var(INPUT_POST, 'data')) {

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

    // email validation
    /*
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Email is valid';
    } else {
    echo 'Email not valid';
    }
     */

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
    <input type="text" name="data2">
    <button type="submit">Submit</button>
  </form>
  <!-- end form -->

<hr>

  <div class="one">
  <?php
/*
$var = "23";

if(filter_var($var, FILTER_VALIDATE_INT)){
echo $var . ' is a number';
} else {
echo $var . ' is not a number';
}
 */
?>

  </div>
  <!-- end one -->

  <div class="two" >
    <?php
    /*
$filters = array(
    'data' => FILTER_VALIDATE_EMAIL,
    'data2' => array(
        'filter' => FILTER_VALIDATE_INT,
        'options' => array(
            'min_range' => 1,
            'max_range' => 100,
        )),
);

print_r(filter_input_array(INPUT_POST, $filters));
*/
?>
  </div>
<!-- end two -->

<div class="three">
  <?php
    $arr2 = array(
      'name' => 'prem rajah',
      'age' => '35',
      'email' => 'prem@rajah.com'
    );

    $filters2 = array(
      "name" => array(
        'filter' => FILTER_CALLBACK,
        'options' => "ucwords"
      ),
      "age" => array(
        'filter' => FILTER_VALIDATE_INT,
        'options' => array(
          'min_range' => 1,
          'max_range' => 100
        )
      ),
      'email' => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr2, $filters2));
  ?>
</div>
<!-- end three -->



</body>
</html>