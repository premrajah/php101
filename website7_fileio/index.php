<?php
  // file name with file extension
  $path1 = '/dir1/myfile.php';
  $file1 = 'file1.txt';

  
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP File IO</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
  </head>

  <body>
    <div class="container">
      <ul class="list-group">
        <li class="list-group-item">
          1.
          <?php
        // return file name
        echo 'basename(): ' . basename($path1);
        ?>
        </li>
        <li class="list-group-item">
          2.
          <?php
        // return file name without extension
        echo 'basename($var, extension):  ' . basename($path1, '.php');
        ?>
        </li>
        <li class="list-group-item">
          3.
          <?php
          // directory name
          echo 'dirname($var): ' . dirname($path1);
        ?>
        </li>
        <li class="list-group-item">
          4.
          <?php
        // check file exists
        echo "Does file exist <br>";
        if(file_exists($file1)){
           echo "Yes: " . basename($file1);
        } else {
           echo "No such file";
        }
        ?>
        </li>
        <li class="list-group-item">
          5.
          <?php
          // absolute path
          echo "realpath(): " .  realpath($file1);
        ?>
        </li>
        <li class="list-group-item">
          6.
          <?php 
          // check to see if file
          echo "is_file(): " . is_file($file1);
        ?>
        </li>
        <li class="list-group-item">
          7.
          <?php 
          // check if writable
          echo "is_writable(): " . is_writable($file1);
        ?>
        </li>
        <li class="list-group-item">
          8.
          <?php 
          // check if readable
          echo "is_readable(): " . is_readable($file1);
        ?>
        </li>
        <li class="list-group-item">
          9.
          <?php 
          echo "filesize(): " . filesize($file1) . " bytes";
        ?>
        </li>
        <li class="list-group-item">
          10.
          <?php 
            echo "makedir() - make directory <br>";
            //mkdir("testing");
          ?>
        </li>
        <li class="list-group-item">
          11.
          <?php
            echo "rmdir() - remove directory (if empty) <br>";
            //rmdir("testing");
          ?>
        </li>
        <li class="list-group-item">
          12.
          <?php 
          //copy files
          //echo "copy() " . copy('file1.txt', 'file2.txt');
          ?>
        </li>
        <li class="list-group-item">
          13.
          <?php 
            //rename file
            //echo "rename() " . rename('file2.txt', 'changed.txt');
          ?>
        </li>
        <li class="list-group-item">
          14.
          <?php 
            // delete file
            //echo "delete: unlink() " .  unlink('changed.txt');
          ?>
        </li>
        <li class="list-group-item">
          15.
          <?php 
            // write from file to string
            echo "from ". basename($file1) . " to browser: " . file_get_contents($file1);
          ?>
        </li>
        <li class="list-group-item">
          16.
          <?php
            // write string to the file
            // echo "write to file (replace) " . file_put_contents($file1, "Goodbye world.");
          ?>
        </li>
        <li class="list-group-item">
          17.
          <?php 
            // get file
            $current = file_get_contents($file1);
            // append to file
            $current .= " Goodbye world.";

            // write to file
            // echo file_put_contents($file1, $current);            
          ?>
        </li>
        <li class="list-group-item">
          18.
          <?php 
            // open file for reading
            $handle1 = fopen($file1, 'r');
            $data1 = fread($handle1, filesize($file1)); 
            fclose($handle1); // close file
            
            echo 'fopen() and fread(): ' . $data1;
          ?>
        </li>
        <li class="list-group-item">
          19.
          <?php
            //open file for writing
            $handle2 = fopen('file2.txt', 'w'); // create file
            $text1 = " Welcome to the party"; // write to file
            fwrite($handle2, $text1); // close file

            $text1 = "\n Lets have some fun"; // write to file
            fwrite($handle2, $text1); // close file
            fclose($handle2);
          ?>
        </li>

      </ul>
    </div>
  </body>

  </html>