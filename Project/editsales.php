<?php
include "conn.php";

$id = $_GET['id'];

$query = "SELECT `sales`.`sales_id`, `category`.`category_name`, `product`.`product_name`,`sales_list`.`quantity`, `product`.`price`, `sales_list`.`quantity`*`product`.`price` AS `total`, `sales`.`date` 
FROM (((`sales_list`
INNER JOIN `sales` ON `sales_list`.`sales_id`=`sales`.`sales_id`)
INNER JOIN `product` ON `sales_list`.`product_id`=`product`.`product_id`)
INNER JOIN `category` on `product`.`category_id`=`category`.`category_id`) WHERE `sales`.`sales_id`='$id'";

$result = @mysqli_query($conn, $query);

$data = mysqli_fetch_array($result);

if(isset($_POST['update']))
{
    $product = $_POST['cat'];
    $qty = $_POST['quantity'];
    $date = $_POST['date'];

    $product_data = explode(",", $product);
    $category_id = $product_data[0];
    $product_id = $product_data[1];
    
    $query = "SELECT * FROM sales_list WHERE product_id = '$product_id'";
    $result1 = @mysqli_query($conn, $query);
    $data1 = @mysqli_fetch_assoc($result1);
    $previous_qty = (int)$data1['quantity'];
    echo "Previous qty: ".$previous_qty;

    $edit = mysqli_query($conn, "UPDATE `sales` SET `date`='$date' WHERE `sales_id`='$id'");
    $edit2 = mysqli_query($conn, "UPDATE `sales_list` SET `product_id`='$product_id', `quantity`='$qty' WHERE `sales_id` = $id;");

    $query = "SELECT * FROM sales_list WHERE product_id = '$product_id'";
    $result1 = @mysqli_query($conn, $query);
    $data1 = @mysqli_fetch_assoc($result1);
    $updated_qty = (int)$data1['quantity'];
    echo "<br>Updated qty: ".$updated_qty;
    
    $change = abs($updated_qty - $previous_qty);
    echo "<br>Change ".$change;

    $query = "SELECT * FROM inventory WHERE product_id = '$product_id'";
    $result1 = @mysqli_query($conn, $query);
    $inv_data = @mysqli_fetch_assoc($result1);
    $stock = $inv_data['stock'];

    if($previous_qty > $updated_qty){
        $stock = $stock + $change;
    }else{
        $stock = $stock - $change;
    }

    $query = "UPDATE inventory SET stock = '$stock' WHERE product_id = '$product_id'";
    @mysqli_query($conn, $query);

    if($edit && $edit2)
    {
        mysqli_close($conn);
        header("location:salesmodule.php");
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Update Sales</title>
</head>

<?php include("include/header.php");?>
<body>
    <section class="edit_sales_container">
        <h2>Edit Sales</h2>
        
        <form method="POST" id="edit_form">
            <fieldset>
                <legend>Edit sales</legend>
        
                <div>
                    <label for="id">Sales Id: </label>
                    <p style="display:inline;"><?php echo $data['sales_id'] ?></p>
                </div>
        
                <div>
                    <label for="cat">Product: </label>
                    <select id="cat" name="cat">
                        <optgroup label="Health">
                        <option value="1,1">Vitamins</option>
                        <option value="1,2">First Aid</option>
                        <option value="1,3">Face Masks & Gloves</option>
                        <option value="1,4">Eye & Ear Care</option>
                        <optgroup label="Personal Care">
                        <option value="2,5">Hand Wash & Sanitizer</option>
                        <option value="2,6">Bath Care</option>
                        <option value="2,7">Feminine Care</option>
                        <option value="2,8">Oral Care</option>
                        <optgroup label="Cosmetics">
                        <option value="3,9">Cotton</option>
                        <option value="3,10">Fragance</option>
                        <option value="3,11">Face</option>
                        <option value="3,12">Lips</option>
                        <optgroup label="Baby Care">
                        <option value="4,13">Baby Daipers</option>
                        <option value="4,14">Baby Food</option>
                        <option value="4,15">Baby Wipes</option>
                    </select>
                </div>
        
                <div>
                    <label for="quantity">Quantity: </label> 
                    <input type="text" id="quantity" name="quantity" value="<?php echo $data['quantity'];?>">
                </div>
        
                <div>
                    <label for="total">Total: </label> 
                    <p style="display:inline;"><?php echo $data['total'] ?></p>
                </div>
        
                <div>
                    <label for="date">Date: </label> 
                    <input type="date" name="date" id="date" value="<?php echo $data['date'];?>">
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


