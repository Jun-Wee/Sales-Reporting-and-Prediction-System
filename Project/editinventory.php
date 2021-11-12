<?php
// include "conn.php";

// $id = $_GET['id'];

// $query = mysqli_query($conn, "SELECT `sales`.`sales_id`, `category`.`category_name`, `product`.`product_name`,`sales_list`.`quantity`, `product`.`price`, `sales_list`.`quantity`*`product`.`price` AS `total`, `sales`.`date` 
// FROM (((`sales_list`
// INNER JOIN `sales` ON `sales_list`.`sales_id`=`sales`.`sales_id`)
// INNER JOIN `product` ON `sales_list`.`product_id`=`product`.`product_id`)
// INNER JOIN `category` on `product`.`category_id`=`category`.`category_id`) WHERE `sales`.`sales_id`='$id'");

// $data = mysqli_fetch_array($query);

// if(isset($_POST['update']))
// {
//     $sid = $_POST['sid'];
//     $product = $_POST['cat'];
//     $qty = $_POST['quantity'];
//     $total = $_POST['total'];
//     $date = $_POST['date'];

//     $product_data = explode(",", $product);
//     $category_id = $product_data[0];
//     $product_id = $product_data[1];

//     $edit = mysqli_query($conn, "UPDATE `sales` SET `date`='$date' WHERE `sales_id`='$id'");
//     $edit2 = mysqli_query($conn, "UPDATE `sales_list` SET `product_id`='$product_id', `quantity`='$qty' WHERE `sales_id` = $id;");
//     if($edit && $edit2)
//     {
//         mysqli_close($conn);
//         header("location:salesmodule.php");
//         exit;
//     }
//     else
//     {
//         echo mysqli_error();
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Update inventory</title>
</head>

<?php include("include/header.php");?>
<body>
    <section>
        <h2>Edit Sales</h2>
        
        <form method="POST" id="xxx">
            <fieldset>
                <legend>Edit inventory</legend>
        
                <div>
                    <!-- echo data from database -->
                    <label for="cat">Category: </label>  
                </div>

                <div>
                    <!-- echo data from database -->
                    <label for="product">Product: </label>  
                </div>

                <div>
                     <!-- echo data from database -->
                    <label for="quantity">Quantity: </label> 
                    <input type="text" id="quantity" name="quantity" value="">
                </div>

                <div>
                     <!-- echo data from database -->
                    <label for="quantity">Per Unit Price: </label> 
                    <input type="text" id="price" name="price" value="">
                </div>
        
                <div>
                    <input type="submit" name="update" value="Update">
                </div>
        
            </fieldset>
        </form>
    </section>
</body>
<?php include("include/footer.php");?>
</html>


