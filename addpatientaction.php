<?php
include("connect.php");

$name = $_POST['name'];
$spec = $_POST['Address'];
$phone = $_POST['phonenumber'];

$sql = "INSERT INTO  patients VALUES ('','$name',
    '$address','$phone')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
      alert("Patient is added sussessfully");
      location.href="manpat.php";
    </script>';
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>
