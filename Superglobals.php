<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals</title>
</head>
<body>
    <h2>Superglobals</h2>
    <?php
        echo"<h3>Superglobal array \$_SERVER[]</h3>"
        echo"<p>The name of the current script is:", $_SERVER["SCRIPT_NAME"], "<br>";
        echo"This script was executed with the following server software:", $_SERVER["SERVER_SOFTWARE"], "<br>";
        echo"This script was requeasted with the following server protocal:", $_SERVER["SEVRER_PROTOCAL"], "<br>";
        echo"This script is running with the following server name:", $_SERVER["SEVRER_NAME"], "<br>";
        echo"This script is running with the following server addr:", $_SERVER["SEVRER_ADDR"], "<br>";
        echo"This script is running with the following gateway:", $_SERVER["GATEWAY_INTERFACE"], "<br>";
        echo"This script is running with the following request method:", $_SERVER["REQUEST_METHOD"], "<br>";


        ?>
</body>
</html>