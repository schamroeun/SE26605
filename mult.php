<?php
$table = "<table>"; //Empty table var
for ($row=0;$row<5;$row++) {
    $table .= "<tr>";
    for ($cols = 1; $cols <= 5; $col++)
    {$table .= "<td>" . $row * $cols . "</td>";}

    $table .= "</tr>\n";
}

$table .= "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "$table";
?>
?>
</body>
</html>