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

        $price=$_POST["price"];
        $checkin=strtotime($_POST["checking"]);
        $checkout=strtotime($_POST["checkout"]);
        //echo $checkout;
        $diff=($checkout-$checkin)/86400;
        $total=$price*$diff;
        echo "<h3>Total pay bill is :".$total."</h3>";

    }
    ?>
    <form method="post">
        Price of Hotel :<input type="text" readonly name="price" value="2500" style="border:none">
        <br><br>
        select ckeckin date :<input type="date" name="checking" placeholder="Checkin date *">
        <br><br>
        select ckeckin date :<input type="date" name="checkout" placeholder="Checkout date *">
        <br><br>

        <!-- <h3>subtotals of Price : Rs. 2500</h3>
        -->
        <input type="submit" name="sub" value="submit">

    </form>
</body>
</html>