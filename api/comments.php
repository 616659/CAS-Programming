<!DOCTYPE html>
<html>
    <head>
        <title> Comments </title>
    </head>
    <body>
        <a href="/index.html">
           <img src="/picture/logo.png" width="200" height="200">
       </a>
        <h1> Please leave a comment below </h1>

       <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
           Name <input type="text" name="name"><br/>
           Email <input type="email" name="email"><br/>
           Comment <input type="text"  name="comment"><br/>
         <input type="submit" value="Post Comment">
        </form>

       <h1> Comments </h1>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_REQUEST['name'];
                $email = $_REQUEST['email'];
                $comment = $_REQUEST['comment'];
               
                $serverName = "125.182.209.94";
                $username = "Vercel";
                $password = "CASProj2020!";
                $dBName = "ESISBDB";

                //connect to SQL using PDO
                $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);

                 // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //commentified for debugging
                /*$sql = "INSERT INTO commentSection (name, email, comment)
                VALUES ($name, $email, $comment)";
                */

                //testing if SQL works or not, will be removed once it is confirmed to work
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                }

                //select data from table
                $sql = "SELECT name, email, comment FROM commentSection";
                
                $result = $conn->query($sql);

                //output data selected
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo $row["name"]. " (" . $row["email"]. ")<br>" . $row["comment"] . "<br><br>";
                    }
                } else {
                //no data in database
                    echo "No results";
                }
                $conn->close();
            }
        ?>

    </body>
</html>