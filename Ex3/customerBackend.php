<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	

	echo "<style>";
	echo "#welcome{text-align: center;}";
	echo "table{ margin-left: auto; margin-right: auto; text-align: center; font-size: 21pt;}";
	echo "th{background-color: lightgreen; text-align: center}";
	echo "td{background-color: lightblue;}";
	echo "</style>";


	$username = $_POST["username"];
    $password = $_POST["password"];
  	$Banana = $_POST["Banana"];
  	$Apple = $_POST["Apple"];
 	$Watermelon = $_POST["Watermelon"];
	$shipping = $_POST["shipping"];

    if ($shipping == "Free 7 Day")
	{
		$shipAmount = 0;
	}
	else if ($shipping == "$50 Over Night")
	{
		$shipAmount = 50;
	}
		else if ($shipping == "$5 Three Day")
	{
		$shipAmount = 5;
	}

    $bananaAmount = 5*$Banana;
    $appleAmount = 10*$Apple;
    $watermelonAmount = 15*$Watermelon;
    $total = $bananaAmount + $appleAmount + $watermelonAmount + $shipAmount;

	echo "<div id='welcome'>";
		echo "<h3>Welcome $username!</h3>";
		echo "<h4>Your password is: $password</h4>";
	echo "</div>";

	echo "<div>";
		echo "<table>";
			echo "<tr>";
				echo "<th></th>";
				echo "<th>Quantity</th>";
				echo "<th>Cost Per Item</th>";
				echo "<th>Sub Total</th>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Banana</th>";
				echo "<td>$Banana</td>";
				echo "<td>$5</td>";
				echo "<td>$$bananaAmount</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Apple</th>";
				echo "<td>$Apple</td>";
				echo "<td>$10</td>";
				echo "<td>$$appleAmount</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Watermelon</th>";
				echo "<td>$Watermelon</td>";
				echo "<td>$15</td>";
				echo "<td>$$watermelonAmount</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Shipping</th>";
				echo "<td colspan='2'>$shipping</td>";
				echo "<td>$$shipAmount</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th colspan='3'>Total Cost</th>";
				echo "<th>$$total</th>";
			echo "</tr>";
		echo "</table>";
	echo "</div>";
?>