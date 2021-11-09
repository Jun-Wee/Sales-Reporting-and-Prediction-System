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

<aside>
<div>
<form action="xx">
    <fieldset>
        <legend>Filter Panel:</legend>
        
        <label for="cat" >Search by:</label>
        <select id="cat" name="cat">
            <option value="" disabled selected>Search by</option>
            <option value="name">Product Name</option>
            <option value="category">Categories</option>
        </select><br><br>

        <!-- option 1 -->
        <div id="nameDiv" class="hide">
            <label for="pname">Product Name:</label><br>
            <input type="text" id="pname" name="pname"><br>
        </div>
        
        <!-- option 2 -->
        <div id="catDiv" class="hide">
            <label for="pname">Product Categories:</label><br>
            <select name="name" id="name">
                <option value="" disabled selected>Select Categories</option>
                <option value="health">Health</option>
                <option value="personalcare">Personal Care</option>
                <option value="cosmetics">Cosmetics</option>
            </select>
        </div>

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
<script src="main.js"></script>
</body>
</html>