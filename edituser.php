<?php
include("connect.php");
$sql = "SELECT * FROM users where usid=" . $_GET['usid'];
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <html>

    <head>
        <title>patients page</title>
    </head>

    <body>
        <h1>Manage users</h1>
        <a class="btn btn-primary" id="jaq" href="manuser.php"></i> Add user&nbsp;<i class="fas fa-plus"></i></a>
        <hr>
        <div class="row">
            <div class="col-3">
                <ul class="man-left">
                    <ul class="list-container">
                        <li class="list-item"><a href="mandoc.php"><i class="fas fa-list-ul"></i> Manage Doctors</a></li>
                        <li class="list-item"><a href="manpat.php"><i class="fas fa-users"></i> Manage Patients</a></li>
                        <li class="list-item"><a href="manuser.php"><i class="fas fa-file-signature"></i> Manage users</a></li>
                        <li class="list-item"><a href="mancat.php"><i class="fas fa-file-signature"></i> Manage categolies</a></li>
                        <li class="list-item"><a href="manpat.php"><i class="fas fa-file-signature"></i> Report</a></li>
                    </ul>
            </div>
     <div class="col-9">
                <div class="card">
        <div class="card-header">
        <h3>Edit patient</h3>
    </div>
    <div class="card-body">
    <form action="edituseraction.php?usid=<?php echo  $_GET['usid'] ?>" method="POST">
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full name</label>  
        <input type="text" class="form-control" id="uname" name="name" value="<?php echo  $row['uname'] ?>">
        </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="text" class="form-control" id="uemail" name="email" value="<?php echo $row['uemail'] ?>">
    </div>

        <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="pass" name="password" value="<?php echo $row['upass'] ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </form>
    </div>
    </div>
    </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>