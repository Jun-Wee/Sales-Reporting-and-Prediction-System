<?php
    include "conn.php";

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM `table_name` WHERE `id` = $id");
    $data = mysqli_fetch_array($query);

    if(isset($_POST['update'])){
    //     $fullname = $_POST['fullname'];
    //     $displayname = $_POST['displayname'];
    //     $password = $_POST['password'];
    //     $email = $_POST['email'];
        $edit = mysqli_query($conn, "UPDATE `table_name` SET `field`='value', `field`='value', `field`='value', `field`='value' WHERE `id` = $id");

        if($edit){
            mysqli_close($conn);
            header("location:edit.html");
            exit;
        }else{
            echo mysqli_error();
        }
    }
?>

<h3>Update Data</h3>

<form action="editsales.php" method="POST">
  <input type="text" name="fullname" value="<?php echo $data['user_name'] ?>" placeholder="Enter Username" Required>
  <input type="text" name="displayname" value="<?php echo $data['display_name'] ?>" placeholder="Display Name" Required>
  <input type="password" name="password" value="<?php echo $data['password'] ?>" placeholder="Display Name" Required>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Email" Required>
  <input type="submit" name="update" value="Update">
</form>