<!DOCTYPE html>
<html lang="en">
<head>
  <title> Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1>All Users </h1> With Pagination
   <a style="float:right" href="<?php echo site_url("UserController/loginpage");?>">Logout</a>
<hr>
<?php echo $this->pagination_bootstrap->render();?>
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
    
       foreach($data as $user){ ?>
      <tr>
        <td><?=$user->id?></td>
        <td><?=$user->name?></td>
        <td><?=$user->email?></td>
        <td><?=$user->mobile?></td>
        <td><a href="<?php echo site_url('UserController/edit?id='.$user->id);?>"><button class="btn btn-primary btn-sm">Edit</button></a></td>
        <td><a href="<?php echo site_url('UserController/delete?id='.$user->id);?>"><button class="btn btn-danger btn-sm">Delete</button></a></td>
       
      </tr>
<?php } ?>
    </tbody>
  </table>
  

</div>
</body>
</html>
