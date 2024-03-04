<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <table>
    <?php
        $a = $_POST["old_number"];
        $end = $_POST["end"];
        $line_number = $_POST["line"];
        $new_number = $_POST["new_number"];
        $color = 'red';
        for($i=1; $i<=$end; $i++) {
            $color = ($i%2 == 0) ? 'green' : 'red';
            if($line_number == $i) {
                $multi = $i * $new_number;
                echo "
                    <tr style='color: $color;'>
                    <td>$new_number</td>
                    <td>$i</td>
                    <td>$multi</td>
                    <td><a href='transition.php?number=$a&end=$end&line=$i' target='_blank'>Update</a>
                        <a href='remove.php?number=$a&end=$end&remove=$i' target='_blank'>Remove</a>
                    </td>
                    </tr>
                ";

            } else {
                $multi = $i * $a;
                echo "
                    <tr style='color: $color;'>
                    <td>$a</td>
                    <td>$i</td>
                    <td>$multi</td>
                    <td><a href='transition.php?number=$a&end=$end&line=$i' target='_blank'>Update</a>
                        <a href='remove.php?number=$a&end=$end&remove=$i' target='_blank'>Remove</a>
                    </td>
                    </tr>
                ";  
            }
        }       
    ?>
	</table>
    </body>
</html>		