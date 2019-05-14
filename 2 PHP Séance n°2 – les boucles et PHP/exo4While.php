<!DOCTYPE html>
<html>
<head>

    <title>titre</title>

</head>

<body>
<?php
$p = 1;
echo "<table border =\"1\" style='border-collapse: collapse'>";
while ($p<=100) {
    echo "<tr> \n";
    for ($col=1; $col <= 10; $col++) {

        echo "<td>$p</td> \n";
        $p++;

    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>