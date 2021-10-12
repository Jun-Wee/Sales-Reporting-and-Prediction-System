
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="keywords" content="HTML5, tags"/>
<title>Manage module</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<?php include("header.php");?>
</head>

<script>
function myFunction() {
  var table = document.getElementById("edit_table");
  var row = table.insertRow(2);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  cell1.innerHTML = "NEW CELL1";
  cell2.innerHTML = "NEW CELL2";
}
</script>

<body>
<section>
<div>
<h2>Sales table</h2>
<table id="edit_table">
<tr>
  <th>No</th>
  <th>Category</th>
  <th>Product</th>
	<th>Price</th>
	<th>Date</th>
</tr>
<tr>
  <td>1</td>
  <td>Device</td>
  <td>Mouse</td>
	<td>55.99</td>
	<td>22/9/2021</td>
	<td><button onclick="myFunction()">Edit</button><button onclick="myFunction()">Delete</button></td>
</tr>
</table>
</div>
</section>

<aside>
<div>
<h2>Add sales</h2>
<form action = "">
<fieldset>
<legend>Add sales</legend>
<label for="id">Sales Id: </label>
<input type="text" id="sid" name="sid" value="e.g. 1234"><br>
<label for="cat">Category: </label>
<select id="cat" name="cat">
  <optgroup label="Health">
    <option value="vitamins">Vitamins</option>
    <option value="firstaid">First Aid</option>
    <option value="facemask">Face Masks & Gloves</option>
    <option value="eye&earcare">Eye & Ear Care</option>
  <optgroup label="Personal Care">
    <option value="handwash">Hand Wash & Sanitizer</option>
    <option value="bathcare">Bath Care</option>
    <option value="femininecare">Feminine Care</option>
    <option value="oralcare">Oral Care</option>
  <optgroup label="Cosmetics">
    <option value="cotton">Cotton</option>
    <option value="fragance">Fragance</option>
    <option value="face">Face</option>
    <option value="lips">Lips</option>
  <optgroup label="Baby Care">
    <option value="babydaipers">Baby Daipers</option>
    <option value="babyfood">Baby Food</option>
    <option value="babywipes">Baby Wipes</option>
</select><br>

  <label for="quantity">Quantity: </label> 
  <input type="text" id="quantity" name="quantity" value="e.g. 99"><br>
  <label for="total">Total: </label> 
  <input type="text" id="total" name="total" value="e.g. 88.88"><br>
  <label for="date">Date: </label> 
  <input type="date" id="date" name="date" value="<?php echo date("Y-m-d")?>"><br>
  <?php 
  // echo date("Y-m-d")
  ?>
  <input type="button" onclick="myFunction()" value="Add">
</fieldset>
</form>
</div>
</aside>
</body>
</html>

