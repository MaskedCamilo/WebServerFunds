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
        <p>
            <?php
                $date = preg_replace("([^0-9/])", "", $_POST['date']);
                echo "$date"
            ?>
        </p>


        <p> Paul McCartney played:<br>
            <?php
                if(($_POST['instrument']) == "Drums") 
                echo "Drums<br>";

                if(($_POST['instrument']) == "Guitar") 
                echo "Guitar<br>";

                if(($_POST['instrument']) == "Bass") 
                echo "Bass<br>";

                if(($_POST['instrument']) == "Piano") 
                echo "Piano<br>";
            ?>
        </p>
        <p>
            John Lennon died in <?= (int)$_POST['year']; ?> 
        </p>
    </body>
</html>
