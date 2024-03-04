<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <?php
        $x = $_GET["number"];
        $y = $_GET["end"];
        $line_number = $_GET["line"];
        echo "
            <form action='update.php' method='post'>
                <label for='no'>Enter the New number</label>
                <input type='number' name='new_number' id='no'>
                <input type='hidden' name='old_number' value='$x'>
                <input type='hidden' name='end' value='$y'>
                <input type='hidden' name='line' value='$line_number'>
                <input type='submit'>
            </form>
        ";
    ?>
	
    </body>
</html>		