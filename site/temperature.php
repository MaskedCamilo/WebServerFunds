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
        </p>Click the following button to display the value of GPIO Pin 1:
        <button id="gpio" type="button" onclick= "dis_gpio()">GPIO Value</button>

        <script>
            //AJAX application that asynchronously retrieves and displays contents of the pm_firstsongs.txt file
            function dis_gpio() {
                var xhttp = new XMLHttpRequest();   //Creates a XMLHttpRequest object
                xhttp.onload = function() {         //Define a callback function
                    document.getElementById("gpio_value").innerHTML =
                    this.responseText;
                }
            xhttp.open("GET", "gpio.php"); //Sends a request
            xhttp.send();
            }
        </script> 
        <p id="gpio_value"></p>
    </body>
</html>