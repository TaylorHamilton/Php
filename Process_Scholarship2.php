<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Scholarship2</title>
</head>
<body>
    <?php
    $errorCount = 0;
    function displayRequired($fieldName){
        echo"The field \"$fieldName\" is required. <br>\n";
    }
    function validateInput($data, $fieldName){
        global $errorCount;
        if(empty($data)){
            displayRequired($fieldName);
            ++$errorCount
            $retval = "";
        }  else{
            $retval = trim($data);
            $retval = stripslashes($retval);
        }
        return $retval;
        echo"The field \"$fieldName\" is required. <br>\n";
    }
    function redisplayForm($firstName, $lastName){
        ?>
        <h2 style="text-align:center">Scholarship Form 2</h2>
        <form name="scholarship"
        action = "Process_Scholarship2.php" method="post"></form>
        <p>First Name: <input type="text" name="fname" value="<?php echo $firstName; ?>"></p>
        <p>Last Name: <input type="text" name="lname"value="<?php echo $lastName; ?>"></p>
        <p>
        <input type="reset" value="Clear Form">&nbsp;&nbsp;
        <input type="submit" name="submit" value="Send Form">
        </p>

        <?php
    }
    $firstName= validateInput($_POST['fName'], "First name");
    $lastName= validateInput($_POST['lName'], "Last name");
    if ($errorCount > 0){
        echo"$errorCount errors: Please re-enter the information below. <br>\n";
        redisplayForm($firstName, $lastName);
    }
        else{
    echo "Thank you for filling out the scholarship form," . $firstName . " " . $lastName;
        }
    ?>
</body>
</html>