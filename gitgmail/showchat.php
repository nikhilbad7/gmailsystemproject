<?php
include 'db.php';
$query = "SELECT * FROM chat ORDER BY (id)";
	$run = $con->query($query);

	while($row = $run->fetch_array()) :
?>
<div class="chat_data">
						<span style="color:green;"><?php echo $row['Name']; ?> : </span>
						<span style="color:brown;"><?php echo $row['Message']; ?></span>
						<span style="float:right;"><?php echo $row['Date']; ?></span>
				</div> <?php endwhile; ?>