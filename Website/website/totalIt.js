//Author: Ayden Hardenberg
//Date: 10 June
//Page: Javascript for payment.php
function totalIt() {
  var input = document.getElementsByName("product");
  var total = 0 ;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementById("total").value = "R" + total.toFixed(2);
}