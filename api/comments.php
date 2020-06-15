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

       <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
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
               
               echo $name;
               echo "\n";
               echo $email;
               echo "\n";
               echo $comment;
            }
        ?>

    </body>
</html>