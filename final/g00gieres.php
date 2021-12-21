<!DOCTYPE html>
<html>
    <head>
        <title>g00gieres.php</title>
    </head>
    <body> 
        <p>The search was:<br>
            <?php
                $_POST('search');
            ?>
        </p>
        <p>
            <input type="submit" value="Search">
        </p>
    </body>
</hmtl>