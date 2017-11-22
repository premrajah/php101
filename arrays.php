<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays</title>
</head>
<body>
  <h1><?php echo "Arrays" ?></h1>

  <?php
    /* 
      Three types of arrays
      - indexed
      - associative
      - multi-domensional
      
    */

    $people = array("Mike", 24, true, 4.5, "Sally");
    $ids = array(3, 4.6, 77);
    $cars = ["Honda", "Toyota", "Ford"];
    $cars[3] = "BMW";
    $cars[] = "Tesla";

    echo "<br> Cars: " . print_r($cars); 
    echo "<br> Id's" . print_r($ids); 
    echo "<br>" . count($cars); 
    echo "<br>" . var_dump($people);

    
    // Associative arays
    $animals = array('Cow' => 33, "Dogs" =>55, "Cats" => 22, 11 => "No Eleven" );
    $animals["Pigs"] = 66;
    $animals["t"] = true;
    echo '<br> Dogs: ' .  $animals['Dogs'];
    echo '<br> 11 => : ' . $animals[11] . '<br>';
    echo '<br> print_r ' . print_r($animals) . '<br>';
    echo '<br> var_dump: ' . var_dump($animals) . '<br>';

    
    // multi-dimensional arrays
    $names = array(
      array("Prem", 35, "Developer"),
      array("Michael", 50, "Singer"),
      array("Sally", 24, "Actor"),

    );

    echo '<br>' .$names[0][0] . $names[0][1] . '<br>';
    echo var_dump($names);

    ?>



    
</body>
</html>