<?php
  class Person {
    //fields
    private $name;
    private $email;
    public static $ageLimit = 40 . '<br>';

    //constructor
    public function __construct($name, $email){
      $this->name = $name;
      $this->email = $email;
      echo __class__ . " class created <br>";
    }

    //de-constructor
    public function __destruct(){
      echo __class__ . " class destroyed <br>";
    }

    //getter and setter
    public function getName(){
      return $this->name . '<br>';
    }
    public function setName($name){
      $this->name = $name;
    }

    public function getEmail(){
      return $this->email . '<br>';
    }

    public function setEmail($email){
      $this->email = $email;
    }

    public static function getAgeLimit(){
      return self::$ageLimit;
    }
    
  }
  // end Person class

  //inheretance 
  class Customer extends Person{
    //fields
    private $balance;

    // constructor
    public function __construct($name, $email, $balance){
      // call parent
      parent::__construct($name, $email, $balance);
      $this->balance = $balance;

      echo "new " . __CLASS__ . " class has been created.<br>";
    }

    //de-constructor
    public function __destruct(){
      echo __class__ . " class destroyed. <br>";
    }

    //gettters and setters
    public function getBalance(){
      return $this->balance . '<br>';
    }

    public function setBalance($balance){
      $this->balance = $balance;
    }
  }
  // end Customer class
?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
  </head>

  <body>
    <?php 
    $person1 = new Person("John Doe", "John@doe.com");
    $customer1 = new Customer("Prem", "Rajah@gmail.com", 300);
  ?>

    <div class="container">
      <ul class="list-group">
        <li class="list-group-item">
          <?php echo 'Person Name: ' . $person1->getName(); ?>
        </li>
        <li class="list-group-item">
          <?php echo 'Person Email: ' . $person1->getEmail(); ?>
        </li>
        <li class="list-group-item">
          <?php echo 'Person Email: ' . $person1->getEmail(); ?>
        </li>
        <li class="list-group-item">
          <?php echo 'Person Email: ' . $person1->getEmail(); ?>
        </li>
        <li class="list-group-item">
          <?php echo 'Customer Name: ' . $customer1->getName(); ?>
        </li>
        <li class="list-group-item">
          <?php echo 'Customer Email: ' . $customer1->getEmail(); ?>
        </li>
        <li class="list-group-item">
          <?php echo 'Customer Balance: ' .  $customer1->getBalance(); ?>
        </li>
        <li class="list-group-item">
          <?php echo 'Customer $ageLimit (static field): ' .  Person::$ageLimit; ?>
        </li>
        <li class="list-group-item">
          <?php echo 'Customer getAgeLimit() (static method): ' . Person::getAgeLimit(); ?>
        </li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>

  </body>

  </html>