<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <table>
    <?php
    $a = $_POST["number"];
    $b = $_POST["end"];
    $color = "red";
    for($i=1; $i<=$b; $i++){
        $multi = $i*$a;
        $color = ($i%2 == 0) ? 'green': 'red';
        echo "
        <tr style='color: $color;'>
            <td>$a</td>
            <td>$i</td>
            <td>$multi</td>
            <td><a href='transition.php?number=$a&end=$b&line=$i' target='_blank'>Update</a>
                <a href='remove.php?number=$a&end=$b&remove=$i' target='_blank'>Remove</a>
            </td>
        </tr>
        ";

    }
    ?>
    </table>
    </body>
</html>		