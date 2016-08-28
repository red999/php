<html>
    <head>
    <style>
        </style>
    </head>
    <body>
<?php
        //we can connect to the server by two methods
        $servername = 'localhost';
        $username = 'root';
        $password = 'frost10';
        $database = 'db1';
        
        /*
        //method 1. procedural 
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        } 
        */
        //method 2. object-oriented
        
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else echo "Success db is plugged";
        
        //$conn->close();
        
?>
    </body>
</html>