<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dates and Timestamps</title>
</head>
<body>
  <h1>Dates and Time Stamps</h1>
  <?php

    echo date('d:m:y' . ' ' . 'D/M/Y') . '<br>'; // date
    echo date('l') . '<br>';

    // set time zone
    date_default_timezone_set('GMT');
    echo date('h:i:s' . ' ' . 'a')  . '<br>';

    //make date and time (time stamp)
    $timestamp = mktime(10, 15, 56, 5, 31, 1981) . '<br>'; // hours/min/sec/month/day/year
    echo $timestamp . '<br>';
    echo date('d/m/y - h-i-s a', $timestamp) . '<br>';

    // string to time
    $timestamp2 = strtotime('7:00 pm March 24 2017');
    echo $timestamp2 . '<br>';
    echo date('d/m/y - h-i-s a', $timestamp2) . '<br>';

    $timestamp3 = strtotime('Next Sunday');
    $timestamp4 = strtotime('Tomorrow');
    $timestamp5 = strtotime('+3 days');
    $timestamp6 = strtotime('+24 days');
    echo date('d/m/y - h-i-s a', $timestamp3) . '<br>';
    echo date('d/m/y - h-i-s a', $timestamp4) . '<br>';
    echo date('d/m/y - h-i-s a', $timestamp5) . '<br>';
    echo date('d/m/y - h-i-s a', $timestamp6) . '<br>';

    

  ?>

</body>
</html>