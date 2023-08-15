<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
    //  issset(): isset is a variable handeling function in php i.e used to set any variables on server.
    if(isset($_POST["sub"]))
    {
        $name=$_POST["nm"];
        echo "<h3>My name is :".$name."</h3>";

    }
    ?>
    <form method="post">
        Enter your name :<input type="text" name="nm" placeholder="Name *">
        <br><br>
        <input type="submit" name="sub" value="submit">

    </form>
</body>
</html>