<?php
require('db.php');
include("auth.php");
?>

<html>
<head>

<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 

| <a href="logout.php">Logout</a></p>
<h2>Bookings recorded</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Id </strong></th>
<th><strong>Reservation Date</strong></th>
<th><strong>Reservation Slot</strong></th>
<th><strong>Full Name </strong></th>
<th><strong>Email </strong></th>
<th><strong>Town travelling to </strong></th>
<th><strong>Trip </strong></th>
<th><strong>Telephone Number</strong></th>
<th><strong>Pick up address </strong></th>
<th><strong>Drop off address </strong></th>

<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from reservations ORDER BY res_id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["res_date"]; ?></td>
<td align="center"><?php echo $row["res_slot"]; ?></td>
<td align="center"><?php echo $row["res_name"]; ?></td>
<td align="center"><?php echo $row["res_email"]; ?></td>
<td align="center"><?php echo $row["res_town"]; ?></td>
<td align="center"><?php echo $row["res_trip"]; ?></td>
<td align="center"><?php echo $row["res_tel"]; ?></td>
<td align="center"><?php echo $row["pick_up_address"]; ?></td>
<td align="center"><?php echo $row["drop_off_address"]; ?></td>

<td align="center">
<a href="delete.php?id=<?php echo $row["res_id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>

</tbody>
</table>
</div>
</body>
</html>