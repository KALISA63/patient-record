<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css\style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<html>
  <head>
    <title>patient page</title>
  </head>
  <body>
<h1>Manage User</h1>
<a class="btn btn-primary" id="jaq" href="adduser.php"></i> Add user&nbsp;<i class="fas fa-plus"></i></a>
<hr>
<div class="row">
  <div class="col-3">
      <ul class="man-left">
     <ul class="list-container">
       <li class="list-item"><a href="mandoc.php"><i class="fas fa-list-ul"></i> Manage Doctors</a></li>
       <li class="list-item"><a href="manpat.php"><i class="fas fa-users"></i> Manage Patients</a></li>
       <li class="list-item"><a href="manuser.php"><i class="fas fa-file-signature"></i> Manage users</a></li>
       <li class="list-item"><a href="mancat.php"><i class="fas fa-file-signature"></i> Manage categolies</a></li>
       <li class="list-item"><a href="manrep.php"><i class="fas fa-file-signature"></i> Report</a></li>
     </ul>       
   </div>
   <div class="col-9">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Number</th>
            <th scope="col">Amazina</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        <tbody>
          <!-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td> <button class="btn btn-primary"><i class="far fa-edit"></i> Edit item</button>
              <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete item</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td> <button class="btn btn-primary"><i class="far fa-edit"></i> Edit item</button>
              <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete item</button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td> <button class="btn btn-primary"><i class="far fa-edit"></i> Edit item</button>
              <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete item</button></td>
          </tr> -->

          <?php 
          $sql = "SELECT * FROM users";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo ' <tr>
              <th scope="row">'.$row['usid'].'</th>
              <td>'.$row['uname'].'</td>
              <td>'.$row['uemail'].'</td>
              <td>'.$row['upass'].'</td>
              <td>
             <a class="btn btn-primary" href="edituser.php?usid='.$row['usid'].'"><i class="far fa-edit"></i> Edit item</a>
              <a class="btn btn-danger" href="deleteuser.php?usid='.$row['usid'].'"><i class="fas fa-trash-alt"></i> Delete item</a></td>
            </tr>';
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          
          ?>
        </tbody>
      
      </table>
      </div>
</div>
</div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table table-hover table-dark">
  <h1>Manage users</h1>
  <button class="btn btn-primary" id="jaq"></i> Add users&nbsp;<i class="fas fa-plus"></i></button>
  <hr>
  <div class="row">
    <div class="col-2">
       <ul class="list-container">
         <li class="list-item"><a href="mandoc.html"><i class="fas fa-list-ul"></i> Manage Doctors</a></li>
         <li class="list-item"><a href="manpat.html"><i class="fas fa-users"></i> Manage Patients</a></li>
         <li class="list-item"><a href="manuser.html"><i class="fas fa-file-signature"></i> Manage users</a></li>
         <li class="list-item"><a href="mancat.html"><i class="fas fa-file-signature"></i> Manage categolies</a></li>
         <li class="list-item"><a href="manpat.html"><i class="fas fa-file-signature"></i> Report</a></li>
       </ul>       
     </div>
  </div>
  <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Number</th>
          <th scope="col">Izina ry' umuryango</th>
          <th scope="col">Izina ry'idini</th>
          <th scope="col">Department</th>
        </tr>
      </thead>
      <tbody>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td> <button class="btn btn-primary"><i class="far fa-edit"></i> Edit item</button>
        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete item</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td> <button class="btn btn-primary"><i class="far fa-edit"></i> Edit item</button>
        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete item</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td> <button class="btn btn-primary"><i class="far fa-edit"></i> Edit item</button>
        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete item</button></td>
    </tr>
  </tbody>
</table>
</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html> -->