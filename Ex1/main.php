<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table border =\"1\" style='border-collapse: collapse'>";

    echo "<tr> \n";
    for($head=0;$head<=100;$head++){
        $t = $head;
        if ($head==0){
            echo "<td> </td> \n ";
        }else{
            echo "<td>$t</td> \n";
        }
    }
    for ($row=1; $row <= 100; $row++) { 
		echo "<tr> \n";
        echo "<td>$row</td> \n";
		for ($col=1; $col <= 100; $col++) { 
		   $p = $col * $row;

            echo "<td>$p</td> \n";
           
		
		   	}
	  	    echo "</tr>";
		}
    echo "<tr> \n";
echo "</table>";
?>

