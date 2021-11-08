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
<div>
<form action="xx">
    <fieldset>
     <legend>Filter Panel:</legend>
     <label for="pname">Product Name:</label>
     <input type="text" id="pname" name="pname"><br><br>

     <label for="order">Order:</label>
     <select id="cars" name="cars">
        <option value="" disabled selected>Select Order</option>
        <option value="asc">Ascending</option>
        <option value="des">Descending</option>
      </select><br><br>

     <label for="cat">Categories:</label>
     <select id="cat" name="cat">
        <option value="" disabled selected>Select Categories</option>
        <option value="health">Health</option>
        <option value="personalcare">Personal Care</option>
        <option value="cosmetics">Cosmetics</option>
        <option value="babycare">Baby Care</option>
      </select><br><br>
     <!-- <select id="criteria" name="criteria">
        <option value="" disabled selected>Select type</option>
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
      </select><br><br> -->
     <input type="submit" value="Submit">
    </fieldset>
   </form>
</div>
    <table>
        <tr>
            <th>Product</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Per unit price</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>$ 33</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
            <td>$ 33</td>
        </tr>
        <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
            <td>$ 33</td>
        </tr>
        <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
            <td>$ 33</td>
        </tr>
        <tr>
            <td>Laughing Bacchus Winecellars</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
            <td>$ 33</td>
        </tr>
        <tr>
            <td>Magazzini Alimentari Riuniti</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
            <td>$ 33</td>
        </tr>
    </table>
<div>

</div>
<?php include("include/footer.php");?>

</body>
</html>