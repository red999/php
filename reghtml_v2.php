<html>

<head>
    
    <style>
        body {
            background-color: #0d0d38;
            color: whitesmoke;
        }
        
        table {
            
            background: rgba(193, 255, 193, .5);
            border: whitesmoke solid 3px;
            
            color: #191970;
            font-size: 1.5em;
            text-align: right;
        
        }
        
        
        
        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
        }
        
        .stupidPassword {
            text-align: center;
        }
        
        li {
            list-style-type: none;
        }
        
        .button {
            background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
        }
        
        footer {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            background: #0d0d38;
            border-top: solid 3px white;
            text-align: center;
            height: 10%;
            color: aliceblue;
        }
    </style>
    
    <script>
        function getPasswords()
        {
            var arrWords = ['123456', 'password', '12345678', 'qwerty', '12345', '123456789', 'football', '1234', '1234567', 'baseball', 'welcome', '1234567890', 'abc123', '111111', '1qaz2wsx', 'dragon', 'master', 'monkey'];
            
            var ol = document.getElementById('list');
            for (var i = 0; i < arrWords.length; i++)
                {
            var li = document.createElement('li');
            li.appendChild(document.createTextNode(arrWords[i]));
            ol.appendChild(li);
                }
        }
        
    </script>
</head>

<body>
    
    <?php
        /*$search = 'foo';
// Read from file
$lines = file('file.txt');
foreach($lines as $line)
{
  // Check if the line contains the string we're looking for, and print if it does
  if(strpos($line, $search) !== false)
    echo $line;
}*/
 ?>   
    
    <form name = "registration" method = "post" action="reg.php" autocomplete='on'>
    
    <table border="0" width="600" height="300" align="center">
        <tr>
            <td>write here yur public name please</td>
            <td><input type = "text" name = "publicName" value = "" autofocus='autofocus' placeholder='HarryPotter'></td>
        </tr>
        <tr>
            <td>and here leave yur private name(it will see only you)</td>
            <td><input type = "text" name = "privateName" value = "" placeholder='superAuror' required='required'></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type = "text" name = "email" placeholder = 'harryMeow@u.ua' required='required'></td>
        </tr>
        <tr>
            <td>pass</td>
            <td><input type = "text" name = "pass" placeholder="not '123' please " required='required'></td>
        </tr>
        <tr>
            <td>
        <input type="submit" class = "button" name="submit" value="Register" class="btnRegister">
            </td>
        </tr>
    </table>
    </form>
    
    <div class = "stupidPassword">
        <p>if you want to know what pass you must not make click it</p>
        <button class = "button" onclick = "getPasswords()">Most popular stupid password of 2016</button>
        <ol id = "list"></ol>
        
    </div>
    
    <footer>
        <p>Posted by: Red Hood</p>
        <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
    </footer>
    
</body>
</html>