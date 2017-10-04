<?php
// Function to get the random nums
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}
//Function to concatenate
function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}




$table = "<table>";
$table .= "<tbody>";
//loop to create table
for($i=0;$i<10;$i++){
    $value = random_color();
    $table .= "<tr><td style='background-color:#".$value.";'>$value<br /><span style ='color:#ffffff;'>$value</span></td>";
    for($col=0;$col<9;$col++)
    {
        $value = random_color();
        $table .= "<td style='background-color:#".$value.";'>$value<br /><span style ='color:#ffffff;'>$value</span></td>";
    }
    $table .= "</tr>";

}
$table .="</tbody>";
$table .= "</table>";


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Grid</title>
</head>
<body>

<?php
echo ($table);
?>

</body>
</html>