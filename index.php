<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Page</title>
</head>
<body>
    <h1>Welcome to My Simple PHP Page</h1>
    <p>
        <?php
            echo "Hello, today is " . date("l, F j, Y") . ".";
        ?>
    </p>
</body>
</html>