<?php
    include "conn.php";
    
    if(!empty($_POST['sid']) && !empty($_POST['cat']) && !empty($_POST['quantity']) && !empty($_POST['total']) && !empty($_POST['date'])){
        $sid = $_POST['sid'];
        $product = $_POST['cat'];
        $qty = $_POST['quantity'];
        $total = $_POST['total'];
        $date = $_POST['date'];

        $product_data = explode(",", $product);
        $category_id = $product_data[0];
        $product_id = $product_data[1];

        echo "Sales ID: $sid <br>";
        echo "Product Id: $product_id <br>";
        echo "Category ID: $category_id <br>";
        echo "Total: $total <br>";
        echo "Date: $date <br>";

        $sql = "INSERT INTO `sales` (`date`) VALUES ('$date');";
        $last_id = $conn->insert_id; 
        $sql .= "INSERT INTO `sales_list`(`sales_id`, `product_id`, `quantity`) VALUES ($last_id, $product_id, $qty);";

        if (mysqli_multi_query($conn, $sql)) { 
                header("location:salesmodule.php");       
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else{
        echo "<p>Please fill in <b>ALL</b> the details. Thank you.</p>";
    }
?>