<?php
include("connect.php");

$sql = "DELETE from users  where usid=".$_GET['usid'];

if ($conn->query($sql) === TRUE) {
    echo '<script>
      alert("user is deleted sussessfully");
      location.href="manuser.php";
    </script>';
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>
