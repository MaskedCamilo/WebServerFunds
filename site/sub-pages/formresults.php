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
        </p> Album information:<br>
        <?php
            $server = "localhost";
            $username = "camilo";
            $password = "camilo01";
            $database = "albums";
            $conn = mysqli_connect($server, $username, $password, $database);

            switch ($_POST['selection']) {
                case "ppm": 
                    $sel = 1;
                    break;
                case "hdn":
                    $sel = 2;
                    break;    
                case "rev":
                    $sel = 3;
                    break;
                case "sgt":
                    $sel = 4;
                    break;
                case "mmt":
                    $sel = 5;
                    break;
                case "twa":
                    $sel = 6;
                    break;
            }

            $sql = "select * from albums where id = $sel;";
            $result = mysqli_query($conn, $sql);
            foreach($result as $row) {echo "Album Number: {$row['id']} | Album Name: 
                {$row['album_name']} | Release Year: {$row['release_year']} | Length: 
                {$row['length']} | First Single: {$row['first_single']} <br/><br/>";}  

            $album = $_POST['album'];
            $ryear = $_POST['ryear'];
            $alength = $_POST['alength'];
            $asingle = $_POST['asingle'];

            if((!isset($album) || trim($album) =='') || (!isset($ryear) || trim($ryear) =='')
                || (!isset($alength) || trim($alength) =='') || (!isset($asingle) || trim($asingle) ==''))
            
                echo "You did not enter information about another album.";
            else 
                {
                    $san_album = filter_var($album, FILTER_SANITIZE_STRING);
                    echo $san_album;
                    echo "<br/>";

                    $san_ryear = (int)$ryear;
                    echo $san_ryear;
                    echo "<br/>";

                    $san_length = preg_replace("([^0-9-])", "", $alength);
                    echo $san_length;



                }
        ?> 
    </body>
</html>
