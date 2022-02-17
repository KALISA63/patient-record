<?php
include("connect.php");

$uname = $_POST['name'];
$uemail = $_POST['email'];
$upass = $_POST['password'];

$sql = "INSERT INTO  users VALUES ('','$uname',
    '$uemail','$upass')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
      alert("user is added sussessfully");
      location.href="manuser.php";
    </script>';
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>
