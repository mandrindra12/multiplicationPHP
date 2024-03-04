<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <?php
        $a = $_POST["number"];
        $b = $_POST["end"];
        for($i=1; $i<=$b; $i++){
            $multi = $i*$a;
            echo "$multi <br>";
        }

    ?>
	
    </body>
</html>		