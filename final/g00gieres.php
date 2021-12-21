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

                $ipadr = $_SERVER['REMOTE_ADDR'];
                echo $ipadr;
            ?>        
        </p>
    </body>
</hmtl>