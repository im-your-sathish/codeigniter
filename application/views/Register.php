<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div style="padding:30px;" align=center>Register your account</div>
  
    <div align=center >
  
  <form style="padding:10px" action="<?php echo base_url("UserController/add_user");?>" method="post">
  <table>
  <tr><td> Name :</td><td><input type="text" id="name" name="name" placeholder="Your name " required></td></tr>
  <tr><td> Email :</td><td><input type="email" id="email" name="email" placeholder="Your email " required></td></tr>
  <tr><td> New Password  :</td><td> <input type="password" id="password" name="password" placeholder="Your Password.." required></td></tr>
  <tr><td>  Mobile  :</td><td> <input type="number" id="number" name="mobile" placeholder="you mobile number.." required></td></tr>
  <tr><td> <input type="submit" value="Register"></td><td> <?php echo anchor("UserController/loginpage","Login"); ?>
</tr>
</table>
  </form> 
  <hr>
</div>


</body>
</html>