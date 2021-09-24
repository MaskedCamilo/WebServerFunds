<!DOCTYPE html>
<html>
    <head>
        <title>formresults.php</title>
    </head>
    <body> 
        <p> The two founders of The Beatles are:
            <?php
                if(isset($_POST['member1']))
                echo "Paul"<br>;

                if(isset($_POST['member2']))
                echo "Ringo"<br>;

                if(isset($_POST['member3']))
                echo "John"<br>;

                if(isset($_POST['member4']))
                echo "George"<br>;
            ?>
        </p>
        <p>
            John Lennon died in <?= (int)$_POST['year']; ?> 
        </p>
    </body>
</html>
