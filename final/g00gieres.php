<!DOCTYPE html>
<html>
    <head>
        <title>g00gieres.php</title>
    </head>
    <body> 
        <p>
            <?php
                $sterm = $_POST['search'];
                $ipadr = $_SERVER['REMOTE_ADDR'];

                header("Location: https://www.google.ca/search?q=$sterm"); 

              //Establishes connection to database
              $server = "localhost";
              $username = "camilo";
              $password = "camilo01";
              $database = "albums";
              $conn = mysqli_connect($server, $username, $password, $database);

              //Inserts data into the database
              $sql = "INSERT INTO search (search_term, ip_address)
              VALUES ('$sterm', '$ipadr')";
              $result = mysqli_query($conn, $sql);
              mysqli_close($conn);

            ?>        
        </p>
    </body>
</hmtl>