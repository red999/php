<html>
    <head>
        <!--<meta http-equiv="Refresh" content="5; url=http://google.com/">--->
        <style>
            body {
                background-color: #191970;
            }
                
        </style>
    </head>
    
    <body>
<?php
    
    include 'connectdb.php';
    
    session_start();
    
  if($_POST['submit']){      
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    //echo $email;
    $sql = "SELECT * FROM users WHERE email='$email' AND pass = '$pass' ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["publicName"]. " " . $row["pass"]. "<br>";
            
            $_SESSION['id_user'] = $row['id'];
                
            echo "<br>yur loged in<br>";
            
            echo "<a href = 'db_check.php'>db work</a>";
        }
    } else {
        echo "Wrong user data. 0 results";
    }
    
   //  session_start();    
   // $_SESSION['email'] = $email;

    //echo $_SESSION['email'];
  }
    
?>
        
    </body>
</html>