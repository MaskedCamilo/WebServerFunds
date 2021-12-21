<!DOCTYPE html>
<html>
    <head>
        <title>g00gieres.php</title>
    </head>
    <body> 
        <p>
            <?php
                $sterm = $_POST['search'];
                echo $sterm;

                $ipadr = $_SERVER['REMOTE_ADDR'];
                echo $ipadr;

                //header("Location: https://www.google.ca/search?q=$sterm"); 

              //Establishes connection to database
              $server = "localhost";
              $username = "camilo";
              $password = "camilo01";
              $database = "search";
              $conn = mysqli_connect($server, $username, $password, $database);

              $sql = "INSERT INTO search (search_term, ip_address)
              VALUES ('$sterm', '$ipadr')";
              $result = mysqli_query($conn, $sql);
              echo $result ? "The album was sucessfully submitted!" 
              : "Could not submit album, try again.: " . mysqli_error($conn);

              mysqli_close($conn);

            ?>        
        </p>
    </body>
</hmtl>