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
        <p> LED response is:
            <?php
                if(($_POST['ledfun']) == "Toggle") 
                echo "Toggling<br>";
                
                if(($_POST['ledfun']) == "Setled") 
                echo "Setting<br>";
            ?>

        </p>Album information:<br>
        <?php
            //Establishes connection to database
            $server = "localhost";
            $username = "camilo";
            $password = "camilo01";
            $database = "albums";
            $conn = mysqli_connect($server, $username, $password, $database);

            //Defines the album selected by user
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
            
            //Displays album selected by user
            $sql = "select * from albums where id = $sel;";
            $result = mysqli_query($conn, $sql);
            foreach($result as $row) {echo "Album Number: {$row['id']} | Album Name: 
                {$row['album_name']} | Release Year: {$row['release_year']} | Length: 
                {$row['length']} | First Single: {$row['first_single']} <br/><br/>";}  

            $album = $_POST['album'];
            $ryear = $_POST['ryear'];
            $alength = $_POST['alength'];
            $asingle = $_POST['asingle'];
                
            //Checks if the form fields are empty
            if((!isset($album) || trim($album) =='') || (!isset($ryear) || trim($ryear) =='')
                || (!isset($alength) || trim($alength) =='') || (!isset($asingle) || trim($asingle) ==''))
                echo "You did not enter information about another album.";
            else 
                {
                    // Input Sanitazion
                    $san_album = filter_var($album, FILTER_SANITIZE_STRING);
                    $san_ryear = (int)$ryear;
                    $san_length = preg_replace("([^0-9:])", "", $alength);
                    $san_asingle = filter_var($asingle, FILTER_SANITIZE_STRING);

                    //Inserts data into the database
                    $sql = "INSERT INTO albums (album_name, release_year, length, first_single) 
                    VALUES ('$san_album', '$san_ryear', '$san_length', '$san_asingle')";
                    $result = mysqli_query($conn, $sql);
                    echo $result ? "The album was sucessfully submitted!" 
                        : "Could not submit album, try again.: " . mysqli_error($conn);
                }
        ?> 
    </body>
</html>
