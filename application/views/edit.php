<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Edit User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div style="padding:30px;" align=center>Register your account</div>
  
    <div align=center >
  <?php foreach($data as $user) {?>
  <form style="padding:10px" action="<?php echo base_url("UserController/updateUser");?>" method="post">
    <table>
<input type="text"  name="id" value="<?=$user->id?>" hidden>
  <tr><td> Name :</td><td><input type="text"  name="name" value="<?=$user->name?>" required></td></tr>
  <tr><td> Email :</td><td><input type="email"  name="email" value="<?=$user->email?>" required></td></tr>
  <tr><td> Mobile :</td><td><input type="number"  name="mobile" value="<?=$user->mobile?>" required></td></tr>
  <tr><td> </td><td><input type="submit"   value="Update"></td></tr>
  

    </table>
  </form> 
<?php } ?>
</div>


</body>
</html>