
<?php
include("connect.php");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$sql = "UPDATE users set uname='$name',uemail='$email',upass='$password' where usid=".$_GET['usid'];
if ($conn->query($sql) === TRUE) {
    echo '<script>
      alert("User is edited sussessfully");
      location.href="mandoc.php";
    </script>';
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>
