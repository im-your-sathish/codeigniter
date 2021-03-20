<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div style="padding:30px;" align=center>Login your account</div>
  
    <div align=center >
  
  <form style="padding:10px" action="<?php echo base_url("UserController/logincheck");?>" method="post">
  <table>
  <tr><td> Email :</td><td><input type="email" id="email" name="email" placeholder="Your email " required></td></tr>
  <tr><td> Password  :</td><td> <input type="password" id="password" name="password" placeholder="Your Password.." required></td></tr>
  <tr><td> <input type="submit" value="Login"></td><td> <?php echo anchor("","Register"); ?></td><td> 
</table>
</table>
  </form>

</body>
</html>