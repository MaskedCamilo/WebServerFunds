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
        <p> Date Geroge Harrison was born on:<br>
            <?php
                $date = preg_replace("([^0-9-])", "", $_POST['birthday']);
                echo $date;
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
        <?php
            $servername = "localhost";
            $username = "camilo";
            $password = "camilo01";
            $database = "albums";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";

            $sql = "select * from albums;";
            $result = mysqli_query($conn, $sql);
            foreach($result as $row) {echo "id: {$row["id"]} | Album Name: {$row["album_name"]} | Length: {$row["length"]} 
                | First Single: {$row["first_single"]} </br>";}
        ?> 
    </body>
</html>
