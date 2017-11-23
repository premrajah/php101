<?php
  // message variables
  $msg = "";
  $msgClass = "";

  // check for submit (test)
  if(filter_has_var(INPUT_POST, 'submit')){
    //echo "Submitted test";

    // Get form data and check html
    $name = htmlspecialchars( $_POST['name'] );
    $email = htmlspecialchars( $_POST['email'] );
    $message = htmlspecialchars( $_POST['message'] );

    //Validation/ check required fields
    // empty() function to check mandatory fields
    if(!empty($name) && !empty($email) && !empty($message)){
      // passed form submit
      
      // email validation
      if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        // failed email
        $msg = "Please enter a correct email address";
        $msgClass = "alert-danger";
      } else {
        // passed email

        // Recipient email setup
        $toEmail = 'scorpion_rain@hotmail.com';
        $toSubject = "Contact form Test - {$name} - Delete Me";
        $toBody = "<h2>Contact REquest Test - Delete me</h2>
                  <h4>Name</h4><p> {$name}</p>
                  <h4>Email</h4><p> {$email}</p>
                  <h4>Message</h4><p>{$message}</p>
                  ";

        // Email headers
        $toHeaders = "MIME-Version: 1.0"."\r\n";
        $toHeaders .= "Content-Type:text/html;charset=UTF-8"."\r\n";
        // additional headers
        $toHeaders .= "From: ".$name."<".$email.">"."\r\n";
        

        //Mail function
        if(mail($toEmail, $toSubject, $toBody, $toHeaders)){
          //if email sent
          $msg = "Email sent successfully.";
          $msgClass = "alert-success";

        } else {
          //if email not sent
          $msg = "Email send failed.";
          $msgClass = "alert-danger";
        }
      }

    } else {
      //failed from submit
      $msg = "Please fill-in all fields";
      $msgClass = "alert-danger";

    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Simple PHP Form</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Simple Form</a>
      </div>
    </div>
  </nav>

  <div class="container">

    <!-- test for message and alert -->
    <?php if($msg != ''): ?>
      <div class="alert <?php echo $msgClass ?>"><?php echo $msg ?></div>
    <?php endif;?>
    <!-- end test for message -->

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

      <div class="form-group">
        <label for="name">Name*</label>
        <input type="text" name="name" class="form-control" 
          value="<?php echo isset($_POST['name']) ? $name : '' ; ?>" placeholder="Name">
      </div>

      <div class="form-group">
        <label for="email">Email*</label>
        <input type="text" name="email" class="form-control" 
          value="<?php echo isset($_POST['email']) ? $email : '' ; ?>" placeholder="email">
      </div>

      <div class="form-group">
        <label for="message">Message*</label>
        <textarea name="message" class="form-control" 
          placeholder="Enter text"><?php echo isset($_POST['message']) ? $message : '' ; ?></textarea>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>
</body>

</html>