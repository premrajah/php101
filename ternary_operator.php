<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ternary Operator</title>
</head>
<body>
    <?php
        $loggedin = false;
        $arr = ["Hello", 23, true];
    ?>
    <div>
        <?php if($loggedin): ?>
            <h1>Welcome User</h1>
<?php else: ?>
<h1>Welcome Guest</h1>
<?php endif; ?>
    </div>


    <div>
      <?php foreach ($arr as $value): ?>
        <p><?php echo $value . "<br>" ?></p>
<?php endforeach; ?>
    </div>
</body>
</html>