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
                <option value="1,1">Vitamins</option>
                <option value="1,2">First Aid</option>
                <option value="1,3">Face Masks & Gloves</option>
                <option value="1,4">Eye & Ear Care</option>
              <optgroup label="Personal Care">
                <option value="2,1">Hand Wash & Sanitizer</option>
                <option value="2,2">Bath Care</option>
                <option value="2,3">Feminine Care</option>
                <option value="2,4">Oral Care</option>
              <optgroup label="Cosmetics">
                <option value="3,1">Cotton</option>
                <option value="3,2">Fragance</option>
                <option value="3,3">Face</option>
                <option value="3,4">Lips</option>
              <optgroup label="Baby Care">
                <option value="4,1">Baby Daipers</option>
                <option value="4,2">Baby Food</option>
                <option value="4,3">Baby Wipes</option>
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
  <?php include("include/footer.php");?>
</body>
</html>

