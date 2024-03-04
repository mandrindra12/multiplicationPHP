<html>
    <head>
       	<meta charset="UTF-8">
        <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>Multiplication Table</title>
    </head>
    <body>
        <form method="post" action="generate_tables.php">
            <div>
                <label for="number">Enter the number</label>
                <input type="number" name="number" id="number">
            </div>
            <div>
                <label for="end_table">Enter the number</label>
                <input type="number" name="end" id="end_table">
            <div class="buttons">
                <input type="submit" value="Generate" id="submit">
                <input type="reset" value="Reset" id="reset">
            </div>
        </form>
    </body>
</html>