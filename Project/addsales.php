<?php
    include "conn.php";
    
    if(!empty($_POST['cat']) && !empty($_POST['quantity']) && !empty($_POST['total']) && !empty($_POST['date'])){
        $product = $_POST['cat'];
        $product_data = explode(",", $product);
        $category_id = $product_data[0];
        $product_id = $product_data[1];
        $qty = $_POST['quantity'];
        $total = $_POST['total'];
        $date = $_POST['date'];

        $sql = "INSERT INTO `sales` (`date`) VALUES ('$date');";
        $last_id = $conn->insert_id; 
        $sql .= "INSERT INTO `sales_list`(`sales_id`, `product_id`, `quantity`) VALUES ($last_id, $product_id, $qty);";

        if (mysqli_multi_query($conn, $sql)) { 
                header("location:salesmodule.php");       
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else{
        if(empty($_POST['cat'])){
            echo "<p>Please select a product to add. Thank you.</p>";
        }else{
            echo "<p>Please fill in <b>ALL</b> the details. Thank you.</p>";
        }
    }
?>