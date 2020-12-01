<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Template</title>
</head>
<body>
    <?php
    include("inc_header.html")
    ?>
    <div style="width:20%; text-align:center; float:left;">
        <?php include("inc_buttonNav.html") ?>
    </div>
    <!-- Start of dynamic content section-->
    <?php
    if(isset($_GET('content'))){
        switch($_GET('content')){
            case'About Me':
                include("inc_about.html");
            break;
            case'Contact Me':
                include("inc_contact.html");
            break;
            case'Home':
               // A value of home means to display the deafault page
            break;
            default:
                include("inc_home.html");
        }
    }
    ?>
     <!-- End of dynamic content section-->
     <?php
    include("inc_footer.html")
    ?>
</body>
</html>