<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Form</title>
</head>
<body>
<h2>Number Form</h2>
    <?php
       $displayForm = true;
       $number = "";
       if(isset($_POST('Submit'))){
           $number = $_POST['number'];
           if (is_numeric($number)){
               $displayForm = false
           }  else{
            echo"<p>You need to enter a mumeric value.</p>";
            }
       }  
       if($displayForm){
           ?>
           <form name="Number form" action="Numberform.php">
           <p>
               Enter a number: <input type="text" name="number" value="<?php echo $number; ?>">
           </p>
           <p>
           <input type="reset" value="Clear Form">&nbsp;&nbsp;
        <input type="submit" name="submit" value="Send Form">
           </p>
       </form>
       <?php
       } else{
           echo"<p> Thank you for entering a number</p>/n";
           echo"<p>Your number, $number , squared is . ($number * $number) . </p>/n";
           echo"<p><a href=\"Numberform.php\"> Try again?</a></p>\n";
       }
    ?>
</body>
</html>