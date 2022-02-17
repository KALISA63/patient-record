<?php
include("connect.php");

$sql = "DELETE from patients  where pid=".$_GET['pid'];

if ($conn->query($sql) === TRUE) {
    echo '<script>
      alert("Patient is deleted sussessfully");
      location.href="manpat.php";
    </script>';
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>
