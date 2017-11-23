<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AJAX and PHP</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>Search Users</h1>

  <form action="" method="get">
    <div class="form-group">
    <label for="search">Search Users</label><br>
    <input type="text" name="search" class="form-control" 
      placeholder="Enter name to serach" onkeyup="showSuggestion(this.value)">
    
    </div>
    <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
  </form>
</div>

<script>
  function showSuggestion(input){
    if(input.length == 0) {
      document.getElementById('output').innerHTML = '';
    } else {
      
      // AJAX REQUEST to suggest.php page
      var  xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          document.getElementById('output').innerHTML = this.responseText;
        }
      }
      xhttp.open("GET", "suggest.php?q="+input, true);
      xhttp.send();

    }
  }
  // end function
</script>
</body>
</html>