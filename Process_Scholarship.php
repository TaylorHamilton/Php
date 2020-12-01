<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Scholarship</title>
</head>
<body>
    <?php
    $firstName= stripslashes($_POST['fName']);
    $lastName= stripslashes($_POST['lName']);
    echo "Thank you for filling out the scholarship form," . $firstName . " " . $lastName;
    ?>
</body>
</html>