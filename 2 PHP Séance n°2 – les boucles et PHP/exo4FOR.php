<!DOCTYPE html>
<html>
<head>

    <title>titre</title>

</head>

<body>
<?php
$p = 1;
echo "<table border =\"1\">";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p;
		   echo "<td>$p</td> \n";
            $p = $p + 1;
		   	}
	  	    echo "</tr>";
		}$p++;
		echo "</table>";
?>

</body>
</html>