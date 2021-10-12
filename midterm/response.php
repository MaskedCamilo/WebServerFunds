<!DOCTYPE html>
<html>
    <head>
        <title>response.php</title>
    </head>
    <body> 
        <p> You have requested:<br>
            <?php
                if(($_POST['product']) == "Masks") 
                echo "Masks<br>";
                    
                if(($_POST['product']) == "Visors") 
                echo "Visors<br>";
                    
                if(($_POST['product']) == "Gowns") 
                echo "Gowns<br>";
            ?>
        </p>
        <p>
            Quantity = <?= (int)$_POST['quantity']; ?> 
        </p>
    </body>
</html>