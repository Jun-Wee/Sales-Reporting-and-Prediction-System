function Calculate() {
    var f1 = document.getElementById("productselection");
    var field1 = parseInt(f1.options[f1.selectedIndex].value);
    var f2 = document.getElementById("quantityselection");
    var field2 = parseInt(f2.options[f2.selectedIndex].value);
  
    var alertMessage = 'Thanks for the order ' + field1 + ' x ' + field2 + '. Your total is $' + (field1 * field2).toFixed(2);
    alert(alertMessage);
  }

// selects the select input 
var select = document.getElementById("select");

var nameDiv = document.getElementById("nameDiv");
var catDiv = document.getElementById("catDiv");

// add event listener 
select.addEventListener("change", function(){
  if(select.value == "category"){
      catDiv.classList.add("show");
      nameDiv.classList.remove("show");
  }
  if(select.value == "name"){
      catDiv.classList.remove("show");
      nameDiv.classList.add("show");  
  }
})