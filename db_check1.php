<?php
    include 'connectdb.php';

    //add users by "template"
    /*
    $stmt = $conn->prepare("INSERT INTO users (publicName, privateName, email, pass) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $publicName, $privateName, $email, $pass);

    $publicName = "mary";
    $privateName = "lele";
    $email = "lele@u.ua";
    $pass = "2222";
    $stmt->execute();

    $publicName = "katty";
    $privateName = "pope";
    $email = "pope@u.ua";
    $pass = "8888";
    $stmt->execute();

    echo "<br>success";
    $stmt->close();
    $conn->close();
    
    */
    
    //select rows
    echo "<br>SELECT<br>";
    $sql = "SELECT id, publicName, email, pass FROM users";
    $res = $conn->query($sql);
    writeMsg($res);
    /*
    //DELETE row by id
    echo "<br>DELETE by id<br>";
    $sql = "DELETE FROM users WHERE id = 3";
    if ($conn->query($sql) === TRUE) {
        echo "success. record deleted";
    } else "no";
    */
    
    /*
    //UPDATE row
    echo "<br>UPDATE by id 5<br>";
    $sql = "UPDATE users SET email = 'lot@u.ua' WHERE id = 5"; 
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    */
    
    /*
    echo "<br>SELECT<br>";
    $sql = "SELECT * FROM users LIMIT 5";
    $res = $conn->query($sql);
    writeMsg($res);

    echo "<br>DISTINCT by pass<br>";
    $sql = "SELECT DISTINCT pass FROM users";
    $res1 = $conn->query($sql);
    writeMsg($res1);
    */
    
    /*
    echo "<br>ORDER BY by publicName(sort)<br>";
    $sql = "SELECT publicName, email, pass FROM users ORDER BY publicName ASC";
    $res1 = $conn->query($sql);
    writeMsg($res1);
    
    //TOP and Wildcard do not work
    
    echo "<br>IN<br>";
    $sql = "SELECT * FROM users WHERE pass IN ('000', '9999') ";
    $res1 = $conn->query($sql);
    writeMsg($res1);

    echo "<br>BETWEEN<br>";
    $sql = "SELECT * FROM users WHERE id BETWEEN 5 AND 10 ";
    $res1 = $conn->query($sql);
    writeMsg($res1);


    echo "<br>BETWEEN and NOT IN<br>";
    $sql = "SELECT * FROM users WHERE (id BETWEEN 5 AND 10) AND NOT pass IN ('9999', '333')";
    $res1 = $conn->query($sql);
    writeMsg($res1);
    */
        
    echo "<br>BETWEEN<br>";
    $sql = "SELECT * FROM users WHERE publicName BETWEEN 'm' AND 'q' ";
    $res1 = $conn->query($sql);
    writeMsg($res1);

    echo "<br>AS<br>";
    $sql = "SELECT email, CONCAT(publicName, ', ',pass) AS person FROM users";
    $res1 = $conn->query($sql);
    writeMsg($res1);
    
    /*
    $stmt = $conn->prepare("INSERT INTO medicines (weight, name) VALUES ( ?, ?)");
    $stmt->bind_param("is", $weight, $name);

    $weight = 220;
    $name = "aspirin";
    $stmt->execute();

    $weight = 400;
    $name = "gluten";
    $stmt->execute();

    $weight = 60000;
    $name = "caratin";
    $stmt->execute();
    */
    
    /*
    echo "<br>INNER JOIN<br>";
    $sql = "SELECT users.id, users.email, medicines.id, medicines.name FROM users INNER JOIN medicines ON users.id = medicines.id";
    $res = $conn->query($sql);
        if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "id: " . $row["id"]. " " . " email: " . $row["email"] . " name: " . $row["name"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    */
    
    /*
    echo "<br>LEFT JOIN<br>";
    $sql = "SELECT users.id, users.email, medicines.id, medicines.name FROM users LEFT JOIN medicines ON users.id = medicines.id";
    $res = $conn->query($sql);
        if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "id: " . $row["id"]. " " . " email: " . $row["email"] . " name: " . $row["name"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    */
    
    /*
    //DO NOT WORK
    echo "<br>FULL JOIN<br>";
    $sql = "SELECT users.id, users.email, medicines.id, medicines.name FROM users FULL OUTER JOIN medicines ON users.id = medicines.id";
    $res = $conn->query($sql);
        if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "id: " . $row["id"]. " " . " email: " . $row["email"] . " name: " . $row["name"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    */

    /*
    echo "<br>UNION<br>";
    $sql = "SELECT users.id AS me FROM users UNION SELECT medicines.id AS ket FROM medicines";
    $res = $conn->query($sql);
        if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "id: " . $row["me"]. " " . " email: " . $row["ket"] . " name: " . $row["ket"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    */
    
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
    </body>
</html>