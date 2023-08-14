<!--Author: Ayden Hardenberg
Date: 10 June
Page: Make a booking-->
<?php
// (A) PROCESS Booking
if (isset($_POST["date"])) {
  require "reserve.php";
  if ($_RSV->save(
    $_POST["date"], $_POST["slot"], $_POST["name"],
    $_POST["email"], $_POST["tel"], $_POST["pick_up_address"], $_POST["drop_off_address"],$_POST["town"],$_POST["trip"])) {
     echo "<div class='ok'>Booking saved. Go back to Home Page and proceed to payment.</div>";
  } else { echo "<div class='err'>".$_RSV->error."</div>"; }
}
?>

<!-- (B) Booking FORM -->

<link href = "theme.css" type = "text/css" rel = "stylesheet" />   
<form id="resForm" onsubmit="return validateForm()"method="post">
	<h1>Booking Form.</h1>
	<h1>Note: Contact to check availabilty.</h1>
	
  <label for="name">Full Name</label>
  <input type="text"  name="name" value = "" />


  <label for="res_email">Email</label>
  <input type="email"  name="email" value = "" />

  <label for="res_tel">Telephone Number</label>
  <input type="text"  name="tel" value = "" />
  
 <label>Town travelling to </label>
  <select name="town">
  <option value="">Select Town</option>
    <option value="Murraysburg">Murraysburg</option>
    <option value="Victoria West">Victoria West</option>
	<option value="Murraysburg">Beaufort West</option>
	</select>
   <label for="res_trip">Trip<br>Example. Single or Return</label>
  <input type="text"  name="trip" value = "" />
 
  
  <label for="pick_up_address">Pick up address)</label>
  <input type="text" name="pick_up_address" value = "" />
  
   <label for="drop_off_address">Drop off address)</label>
  <input type="text" name="drop_off_address" value = "" />

  <?php
  
   $mindate = date("Y-m-d", strtotime("+2 days"));
  $mindate = date("Y-m-d");
  ?>
  <label>Reservation Date</label>
  <input type="date"  id="res_date" name="date" value="<?=date("Y-m-d")?>">

  <label>Reservation Slot</label>
 <select name="slot">
  <option value="">Select Preferred Time Collection</option>
    <option value="Between 6:00am and 11:59am">Between 6:00am and 11:59am</option>
    <option value="After 12pm">After 12pm</option>
  </select>


  <input type="submit" value="Submit"/>
    
</form>
<script>
function validateForm() {
  let name = document.forms["resForm"]["name"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  let email = document.forms["resForm"]["email"].value;
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  let tel = document.forms["resForm"]["tel"].value;
  if (tel == "") {
    alert("Enter your contact details");
    return false;
  }
	let trip = document.forms["resForm"]["trip"].value;
  if (trip == "") {
    alert("Trip selection must be filled out");
    return false;
  }
	
  let pick_up_address = document.forms["resForm"]["pick_up_address"].value;
  if (pick_up_address == "") {
    alert("Enter your address to be picked up from: ");
    return false;
  }
  let drop_off_address = document.forms["resForm"]["drop_off_address"].value;
  if (drop_off_address == "") {
    alert("Enter the address to be dropped off: ");
    return false;
  }
  let slot = document.forms["resForm"]["slot"].value;
  if (slot == "") {
    alert("Select preferred collection: ");
    return false;
  }
  if(email.value.indexOf("@", 0) < 0) {
          alert("Please enter a valid e-mail address.");
          email.focus();
          return false;
        }
        if(email.value.indexOf(".", 0) < 0) {
          alert("Please enter a valid e-mail address.");
          email.focus();
          return false;
        }
}
</script>