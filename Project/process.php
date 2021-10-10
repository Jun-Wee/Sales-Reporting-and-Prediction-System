<?php
    if(!empty($_POST['sid']) && !empty($_POST['cat']) && !empty($_POST['quantity']) && !empty($_POST['total']) && !empty($_POST['date'])){
        echo "<p>All fields are filled</p>";
    }else{
        echo "<p>Please fill in <b>ALL</b> the details</p>";
    }
?>