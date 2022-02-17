<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="side">
        <div class="brand">
            <h1 class="banana">BANANA Hospital</h1>
            <p>A link to the health</p>
        </div>
        <div class="row">
            <div class="col-2">
                <ul class="man-left">
                    <li> <a href="">Dashboard</a></li><br>
                    <li> <a href="mandoc.php">Manage Doctors</span></a></li><br>
                    <li> <a href="manpat.php">Manage Patients</span></a></li><br>
                    <li> <a href="manuser.php">Manage users</span></a></li><br>
                   <!-- <li> <a href="mancat.php">Manage Category</span></a></li><br> -->
                    <li> <a href="manrep.php">Report</span></a></li><br>
                </ul>
            </div>
        </div>
        <!-- <span>1</span>
             <span>2</span>
             <span>3</span> -->
        <script src="js/manage.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>