<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Common String Functions</title>
</head>
<body>
  <h1>Common String Functions</h1>
  <?php

    $text1 = 'Hello World';
    $text2 = 'Hello World                     ';
    $val = 35;
    $values = array(true, false, null, "abc", 33, "34", 22.4, "22.5", ""," ", 0, "0", '', ' ');
    $long_str =
    "Lorem Ipsum is simply dummy text of the printing and 
    typesetting industry. Lorem Ipsum has been the industry's 
    standard dummy text ever since the 1500s, when an unknown 
    printer took a galley of type and scrambled it to make a 
    type specimen book. It has survived not only five centuries, 
    but also the leap into electronic typesetting, remaining 
    essentially unchanged. It was popularised in the 1960s 
    with the release of Letraset sheets containing Lorem Ipsum 
    passages, and more recently with desktop publishing software 
    like Aldus PageMaker including versions of Lorem Ipsum.";

    // Substring: substr()
    $output1 = substr($text1, 1, 3);
    echo "{$text1} 1,3 = {$output1} <br>";

    // Length: strlen()
    $output2 = strlen($text1);
    echo "Length = {$output2} <br>";

    // String position strpos()
    $output3 = strpos($text1, 'o');
    echo "String Pos o = {$output3} <br>";

    // strip white space: trim()
    $output4 = trim($text2);
    echo var_dump($text2) . " = Before trim() <br>";
    echo var_dump($output4) . " = After trim() <br>";

    // check string
    echo "is_string() {$text2} = " . is_string($text2) . "<br>";
    echo "is_string() {$val} = " . is_string($val) . "<br>";

    echo "Values: " . var_dump($values) . "<br>";

    // check if string
    foreach ($values as $value) {
      if(is_string($value)){
        echo "{$value} <br>";
      }
    }

    $compressed = gzcompress($long_str);
    $uncompressed = gzuncompress($compressed);
    echo "<hr> Compressed string = {$compressed} <hr>";
    echo "Uncompressed string = {$uncompressed} <hr>"


  ?>
</body>
</html>