<?php
    
    //session_start();
        include 'connectdb.php';

/*$sql = "INSERT INTO users (publicName, privateName, email, pass)
        VALUES ('John', 'Doe', 'john@example.com', '123')";
*/
  //-- чи %20 - це коментар в sql. коли його написала в одному полі, то в інших видало "--". але занесло в бд як ім'я, а не використало як sql код
if($_POST['submit']){
        //clear query. Part 2
        $publicName = $_POST['publicName'];
        $privateName = $_POST['privateName'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        if (($publicName == NULL) || ($privateName==NULL) || ($email==NULL) || ($pass == NULL)) {
            echo "<br>All values are free and empty of ur stupidity"; 
        } else {
            $publicName = $conn->real_escape_string($publicName);
            $publicName = clearQuery($publicName);
            //$privateName = $conn->real_escape_string($privateName);

            $sql = "INSERT INTO users (publicName, privateName, email, pass) VALUES ('$publicName', '$privateName', '$email', '$pass')";

            if ($conn->query($sql) === TRUE) {
                echo ". New record created successfully. To mail sended your data to remind your pass. remember it, don`t be Neville";
                //header( "refresh:5;url=log_in.html" );
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

}
        function clearQuery($data) {
            
            echo "<br>1. " . $data;
            $data = stripslashes($data);
            echo "<br>2. clear excessive slashes " . $data;
            $data = htmlentities($data);
            echo "<br>3. cast html to simple text " . $data;
            $data = strip_tags($data);
            echo "<br>4. clear html tags " . $data . "<br>";
            
            return $data;
        }

        
      
?>