/*
* More practical example
* when the user login  in the web page and we want to tell him welcome
*/
<html>
    <head>

    </head>
    <body>
    <?php
    function is_logged_in() {
        if ($_GET['username']){
            return true;
        }else
            return false;
    }



    ?>
    <h1>Welcome <?php echo is_logged_in() ? $_SESSION['username'] : ' Guest';?></h1>
    </body>
</html>