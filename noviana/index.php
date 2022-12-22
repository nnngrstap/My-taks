
/*Sintaks php dasar
echo = print
print_r
var_dump
*/

// echo "Noviana";
// echo 1234;
// print_r ('Gresita');
//

// <!-- Variabel dan Tipe Data -->
// $nama = "Noviana";
// $x = 10;
// $y = 20;
// echo $x + $y;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar phhp</title>
</head>
<body>
    <h1>Hallo, selamat datang</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for($i = 1; $i <= 3; $i++){
                echo "<tr>";
                for ($i = 1; $j <= 5; $j++){
                    echo "<td>$i, $j<td>";
            }
            echo "</tr>";
        ?>
    </table>
</body>
</html>