<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <?php
        // Get parameters from GET request
        $number = (int)$_GET["number"];
        $end = (int)$_GET["end"];
        $removed = (int)$_GET["remove"];

        // Remove the specified number if it exists
        if ($end === $removed) {
            $end--;
        }

        // Loop through each row
        for ($i = 1; $i <= $end; $i++) {
            if ($i === $removed) {
                continue; // Skip removed number
            }

            $color = $i % 2 === 0 ? 'green' : 'red';
            $multi = $number * $i;

            // Use string interpolation for cleaner output
            echo "
            <tr style='color: $color;'>
                <td>$number</td>
                <td>$i</td>
                <td>$multi</td>
                <td><a href='transition.php?number=$number&end=$end&line=$i' target='_blank'>Update</a>
                    <a href='remove.php?number=$number&end=$end&remove=$i' target='_blank'>Remove</a>
                </td>
            </tr>
            ";
        }
        ?>
    </table>
</body>
</html>
	