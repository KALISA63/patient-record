<?php
include("connect.php");

$sql = "DELETE from doctors  where did=".$_GET['did'];

if ($conn->query($sql) === TRUE) {
    echo '<script>
      alert("Doctor is deleted sussessfully");
      location.href="mandoc.php";
    </script>';
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>
