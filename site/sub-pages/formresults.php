<!DOCTYPE html>
<html>
    <head>
        <title>formresults.php</title>
    </head>
    <body> 
        <p> The two founders of The Beatles are:<br>
            <?php
                if(isset($_POST['member1']))
                echo "Paul<br>";

                if(isset($_POST['member2']))
                echo "Ringo<br>";

                if(isset($_POST['member3']))
                echo "John<br>";

                if(isset($_POST['member4']))
                echo "George<br>";
            ?>
        </p>
        <p> Paul McCartney played:<br>
            <?php
                (if(isset($_POST['instrument'])) && if (defined('Drums')))
                echo "Drums<br>";

                if(isset($_POST['Guitar']))
                echo "Guitar<br>";

                if(isset($_POST['Bass']))
                echo "Bass<br>";

                if(isset($_POST['Piano']))
                echo "Piano<br>";
            ?>
        </p>
        <p>
            John Lennon died in <?= (int)$_POST['year']; ?> 
        </p>
    </body>
</html>
