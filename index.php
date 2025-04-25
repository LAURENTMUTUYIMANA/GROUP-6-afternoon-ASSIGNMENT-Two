<?php
$hash = hash('sha256', 'Laurent group6');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laurent group6 PHP</title>
</head>
<body>
    <h1>Laurent group6 PHP</h1>

    <p>The SHA256 hash of "Laurent group6" is:</p>
    <pre><?php echo $hash; ?></pre>

    <p>ASCII Art:</p>
    <pre>
    <?php

    ####
    #   
    #   
    #   
    ####

    ?>
    </pre>

    <p>
        <a href="check.php">Click here to check the error setting</a>
        
    </p>
    <p>
        <a href="fail.php">Click here to cause a traceback</a>
    </p>
</body>
</html>
