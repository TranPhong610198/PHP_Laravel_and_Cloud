<!-- Lam 1 bang tinh cheo -->
<!-- Make a table of multiple -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3</title>
</head>
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>
<body>
<table>
    <?php
    for ($i = 1; $i < 10; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) {
            if ($i * $j == 0) {
                echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
            }
            else echo "<td>". $i * $j ."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>