<?php
if(isset($_POST["submit"]))
{
    $price=$_POST["price"];
  $discount = ($price > 500) ? 0.10 * $price : 0; 
  $finalPrice = $price - $discount;

  echo "Original Price:" . number_format($price, 2) . "<br>";

if ($discount > 0) 
{
    echo "Discount: " . number_format($discount, 2) . "<br>";
}
echo "Final Price: " . number_format($finalPrice, 2) . "<br>";

}
?>

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
    <center>
    <form method="post">
        <input type="text" name="price" placeholder="Enter your price" required/>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</center>
</body>
</html>



