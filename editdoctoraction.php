<?php
include("connect.php");

$name = $_POST['name'];
$spec = $_POST['speciality'];
$phone = $_POST['phonenumber'];

$sql = "UPDATE doctors set dname='$name',dspeciality='$spec',dphone='$phone' where did=".$_GET['did'];

if ($conn->query($sql) === TRUE) {
    echo '<script>
      alert("Doctor is edited sussessfully");
      location.href="mandoc.php";
    </script>';
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>
