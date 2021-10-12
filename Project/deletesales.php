<?php
    include "conn.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM `table_name` WHERE `id` = $id";

    if($conn->query($sql) === TRUE){
        echo "Record deleted successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>