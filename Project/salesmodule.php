<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="keywords" content="HTML5, tags"/>
<title>Manage module</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<?php include("include/header.php");?>
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

          <div>
            <label for="id">Sales Id: </label>
            <input type="text" id="sid" name="sid" value="e.g. 1234">
          </div>

          <div>
            <label for="cat">Product: </label>
            <select id="cat" name="cat">
              <optgroup label="Health">
                <option value="Health,vitamins">Vitamins</option>
                <option value="Health,firstaid">First Aid</option>
                <option value="Health,facemask">Face Masks & Gloves</option>
                <option value="Health,eye&earcare">Eye & Ear Care</option>
              <optgroup label="Personal Care">
                <option value="Personal Care,handwash">Hand Wash & Sanitizer</option>
                <option value="Personal Care,bathcare">Bath Care</option>
                <option value="Personal Care,femininecare">Feminine Care</option>
                <option value="Personal Care,oralcare">Oral Care</option>
              <optgroup label="Cosmetics">
                <option value="Cosmetics,cotton">Cotton</option>
                <option value="Cosmetics,fragance">Fragance</option>
                <option value="Cosmetics,face">Face</option>
                <option value="Cosmetics,lips">Lips</option>
              <optgroup label="Baby Care">
                <option value="Baby Care,babydaipers">Baby Daipers</option>
                <option value="Baby Care,babyfood">Baby Food</option>
                <option value="Baby Care,babywipes">Baby Wipes</option>
            </select>
          </div>

          <div>
            <label for="quantity">Quantity: </label> 
            <input type="text" id="quantity" name="quantity" value="e.g. 99">
          </div>

          <div>
            <label for="total">Total: </label> 
            <input type="text" id="total" name="total" value="e.g. 88.88">
          </div>

          <div>
            <label for="date">Date: </label> 
            <input type="date" name="date" id="date" value="<?php echo date('Y-m-d');?>">
            <?php 
              // echo date("d-M-Y")
            ?>
          </div>

          <div>
            <input type="button" onclick="myFunction()" value="Add">
          </div>

        </fieldset>
      </form>
    </div>
  </aside>
</body>
</html>

