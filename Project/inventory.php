<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="keywords" content="HTML5, tags"/>
    <title>inventory module</title>
    <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>


<body>
<?php include("include/header.php");?>

<!-- javascript for control filter panel -->
<!-- <script>
    $("#sb").change(function() {
        if ($(this).val() == "product"){
            alert("test");
            $('#otherFieldDiv').show();
            $('#otherFieldDiv1').hide();
        }
        else if ($(this).val() == "categories"){
            $('#otherFieldDiv1').show();
            $('#otherFieldDiv').hide();
        }
        else{
            $('#otherFieldDiv1').hide();
            $('#otherFieldDiv').hide();
        }
    });
    $("#sb").trigger("change");
</script> -->

<aside>
<div>
<form action="xx">
    <fieldset>
        <legend>Filter Panel:</legend>

        <label for="sb">Search by:</label>
        <select id="sb" name="sb">
        <option value="product">Product</option>
        <option value="categories">Categories</option>
        </select><br><br>

        <!-- option 1 -->
        <!-- <label for="pname" id="pname">Product Name:</label>
        <input type="text" id="pname" name="pname"><br><br> -->
        
        <!-- option 2 -->
        <label for="cat" id="cat">Categories:</label>
        <select id="cat" name="cat">
        <option value="" disabled selected>Select Categories</option>
        <option value="health">Health</option>
        <option value="personalcare">Personal Care</option>
        <option value="cosmetics">Cosmetics</option>
        <option value="babycare">Baby Care</option>
        </select><br><br>

        <label for="order">Order:</label>
        <select id="cars" name="cars">
        <option value="" disabled selected>Select Order</option>
        <option value="asc">Ascending</option>
        <option value="des">Descending</option>
        </select><br><br>

     <input type="submit" value="Submit">
    </fieldset>
   </form>
</div>
</aside>

<div>
    <table style="border: 2;">
        <tr>
            <th>Category</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Per unit price</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <td>Health</td>
            <td>Vitamins</td>
            <td>100</td>
            <td>$ 33</td>
            <td><a href = "" name="">Edit</a></td>
            <td><a href = "" name="">Delete</a></td>
        </tr>
        <tr>
            <td>Health</td>
            <td>Vitamins</td>
            <td>100</td>
            <td>$ 33</td>
            <td><a href = "" name="">Edit</a></td>
            <td><a href = "" name="">Delete</a></td>
        </tr>
        <tr>
            <td>Health</td>
            <td>Vitamins</td>
            <td>100</td>
            <td>$ 33</td>
            <td><a href = "" name="">Edit</a></td>
            <td><a href = "" name="">Delete</a></td>
        </tr>
        <tr>
           <td>Health</td>
            <td>Vitamins</td>
            <td>100</td>
            <td>$ 33</td>
            <td><a href = "" name="">Edit</a></td>
            <td><a href = "" name="">Delete</a></td>
        </tr>
        <tr>
           <td>Health</td>
            <td>Vitamins</td>
            <td>100</td>
            <td>$ 33</td>
            <td><a href = "" name="">Edit</a></td>
            <td><a href = "" name="">Delete</a></td>
        </tr>
        <tr>
            <td>Health</td>
            <td>Vitamins</td>
            <td>100</td>
            <td>$ 33</td>
            <td><a href = "" name="">Edit</a></td>
            <td><a href = "" name="">Delete</a></td>
        </tr>
    </table>
</div>
<?php include("include/footer.php");?>

</body>
</html>