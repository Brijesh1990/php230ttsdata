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
    //  isset(): isset is a variable handeling function in php i.e used to set any variables on server.
    if(isset($_POST["sub"]))
    {
        $p=$_POST["pname"];
        $n=$_POST["yname"];
        $r=$_POST["rname"];
        $ci=$p*pow((1+$r/100),$n);
        echo "<h3>Your interest is  :".$ci."</h3>";

    }
    ?>
    <form method="post">
        Enter Principle amount :<input type="text" name="pname" placeholder="Principle amount *">
        <br><br>
        Enter Number of Years:<input type="text" name="yname" placeholder="Enter years*">
        <br><br>
        Enter Rate of Interest:<input type="text" name="rname" placeholder="Enter ROI *">
        <br><br>
        <input type="submit" name="sub" value="submit">

    </form>
</body>
</html>