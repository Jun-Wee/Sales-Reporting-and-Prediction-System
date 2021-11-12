<?php include("include/header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

    if(!empty($_POST['cat']) && !empty($_POST['quantity']) && !empty($_POST['date'])){
        $product = $_POST['cat'];
        $product_data = explode(",", $product);
        $category_id = $product_data[0];
        $product_id = $product_data[1];
        $qty = $_POST['quantity'];
        $date = $_POST['date'];

        $conn = @mysqli_connect("localhost", "root", "", "phpsreps");
        $sql = "SELECT stock FROM inventory WHERE product_id = '$product_id'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        $quantity =  $data['stock'];
        mysqli_close($conn);
        
        if($qty <= $quantity){
            $conn = @mysqli_connect("localhost", "root", "", "phpsreps");
            $last_id = $conn->insert_id; 
            $sql = "INSERT INTO `sales` (`date`) VALUES ('$date'); INSERT INTO `sales_list`(`sales_id`, `product_id`, `quantity`) VALUES ($last_id, $product_id, $qty);";
            $result = @mysqli_multi_query($conn, $sql);
            mysqli_close($conn);

            if ($result) { 
                $conn = @mysqli_connect("localhost", "root", "", "phpsreps");
                $sql = "UPDATE inventory SET stock = stock - $qty WHERE product_id = $product_id";
                @mysqli_query($conn, $sql); 
                mysqli_close($conn);
                header("location:salesmodule.php");       
            } else {
                echo "Failed to update inventory";
            }
        }else{
            echo "<script>alert('Insufficient stock: $quantity remaining.')</script>";
        }
    }else{
        if(empty($_POST['cat'])){
            echo "<p>Please select a product to add. Thank you.</p>";
        }else{
            echo "<p>Please fill in <b>ALL</b> the details. Thank you.</p>";
        }
    }
?>