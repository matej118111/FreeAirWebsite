<?php
// login check
require "check.php";
 ?>
 

 <?php
 // check for fail
if (isset($failed)) { ?>
<div style="color:lightgoldenrodyellow;" id="bad-login">Wrong user or password, or try again, nobody actually cares...</div>
<?php } ?>
 
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stlesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index.css">
</head>
<html> 
<body style="background-color:black;">

<form id="login-form" method="post" target="_self">
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="div-login-form">
  <h1 class="text-index-one">Login</h1>
  <label class="index-button1" for="user">User</label>
  <br>
  <input type="text" name="username" required/>
  <br>
  <label class="index-button2" for="password">Password</label>
  <br>
  <input type="password" name="password" required/>
  <br>
  <br>
  <br>
  <input class="index-submit-button-1" type="submit" value="Sign In"/>
</form>
</div>

</body>
</html>
