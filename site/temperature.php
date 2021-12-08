<!DOCTYPE html>
<html>
    <head>
        <title>temperature.php</title>
    </head>
    <body>
        <p>
            <?php
                $raw = `../bme280`; //Executes bme280 and assigns results to variable
                $deserialized = json_decode($raw);  //Decoded JSON string and assigns results to variable
                echo "Temperature: {$deserialized->temperature}, Pressure: {$deserialized->pressure},
                Altitude: {$deserialized->altitude}"; //Displays the value of the variable
            ?>
        </p>
    </body>
</html>