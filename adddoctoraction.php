
<?php
include("connect.php");

$name = $_POST['name'];
$spec = $_POST['speciality'];
$phone = $_POST['phonenumber'];

$sql = "INSERT INTO  doctors VALUES ('','$name',
    '$spec','$phone')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
      alert("Doctor is added sussessfully");
      location.href="mandoc.php";
    </script>';
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>
