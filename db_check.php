<?php
    include 'connectdb.php';

    session_start();
    if(!isset($_SESSION['id_user'])){
        header("Location: index.html");
        exit;
    }

    printf("<br> hello <br>");    
    echo strrev("hello");
    //echo str_repeat("kit". 2);
    echo strtoupper("kookoo");

    /*
    echo "<br>";
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    
    if (!$result) die($conn->error);
    $rows = $result->num_rows;
    
    
    for ($j = 0; $j < $rows; $j++)
    {
        $result->data_seek($j);
        echo 'id: ' . $result->fetch_assoc()['id'] . '<br>';
    }
    
    
    //при fetch_array кожна строка виводиться повністю.
    //отриманий масив поміщ в масив row
    //fetch_array може вертати три типа масивів
    for ($j = 0; $j < $rows; $j++)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'id: ' . $row['id'] . '<br>';
        echo 'email: ' . $row['email'] . '<br>';
    }
    */

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<br>SELECT. INJECTION<br>";
    $id = $_POST['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $res = $conn->query($sql);
    writeMsg($res);
}
*/
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<br>SELECT. INJECTION<br>";
        $id = $_POST['id'];
        $sql = "SELECT * FROM users WHERE pass = $id";
        $res = $conn->query($sql);
        writeMsg($res);
        }
echo <<<_END
<pre>
Author 
Title 
Category 
Year 
ISBN 
</pre>
<form action="sqltest.php" method="post">
<input type="text" name="year">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="isbn" value="$row[4]">
<input type="submit" value="DELETE RECORD"></form>
_END;


    echo "<br>SELECT ALL <br>";
    $sql = "SELECT * FROM users";
    $res = $conn->query($sql);
    writeMsg($res);

    //--------------
    function writeMsg($res) {
        if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "id: " . $row["id"]. " - name: " . $row["publicName"] . " email: " . $row["email"] . " pass: " . $row["pass"] . "<br>";
        }
    } else {
        echo "0 results";
        }
    }
    //------------------

?>


<html>
    <head>
        <style>
            body {
                background-color: #191970;
                color: deeppink
            }
        
        </style>
    </head>
    <body>
         <form name = "db_check" method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete='on'>
             <input type = "text" name = "id" required='required'>
             <input type="submit" name="submit" value="Submit">  
            </form>
    </body>
</html>