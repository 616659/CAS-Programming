<!DOCTYPE html>
<html>
<head>
<title>
    Comments
</title>

</head>
<body>
    <a href="/index.html">
        <img src="/picture/logo.png" width="200" height="200">
    </a>
<h1>
    Pleas leave a comments
</h1>

    <form action="#" method="post">
        Name <input type="text" name="name"><br/>
        Email <input type="email" name="email"><br/>
        Comment <input type="text"  name="comment"><br/>
        <input type="submit" value="Post Comment">
    </form>

    <?php
        $myfile = fopen("pcomments.html","a") or die("there is an error");
        $writeinfile = "<br> Name:</br>".$_POST['name']."<br/>";
        $writeinfile = "<br> Email:</br>".$_POST['email']."<br/>";
        $writeinfile = "<br> Comment:</br>".$_POST['comment']."<br/>I<hr>";
        fwrite($myfile, $writeinfile);
        fwrite($myfile, $writeinfile2);
        fwrite($myfile, $writeinfile3);
        fclose($myfile);
        
        require ("comments.html");

    ?>

</body>
</html>
