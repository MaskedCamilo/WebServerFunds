<!DOCTYPE html>
<html>
    <head>
        <title>g00gieres.php</title>
    </head>
    <body> 
        <p>The search was:<br>
            <?php
                $sterm = $_POST['search'];
                echo $sterm;
                echo "<br>";

                $ipadr = $_SERVER['REMOTE_ADDR'];
                echo $ipadr;

                header("Location: https://www.google.ca/"); 
            ?>        
        </p>
    </body>
</hmtl>