<?php
include "config.php";

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

        $sql = "DELETE * FROM form WHERE form 'ID' = '$id'";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo '<script type="text/javascript"> alert("Your Data Have Been Deleted Successfuly"); </script>';
        }else{
            echo '<script type="text/javascript"> alert("An Error Occurred while trying to Delete your data"); </script>';
        }

}


?>