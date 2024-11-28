<?php
if(isset($_POST["submit"]))
{
$grade=$_POST["grade"];
switch($grade)
{
    case 'A':
        echo "<h3 style='color:red; text-align:center'>Grade A is Excellent</h3>";
        break;
    case 'B':
         echo "<h3 style='color:palevioletred; text-align:center'>Grade B is Excellent </h3>";
         break;
    case 'C':
         echo "<h3 style='color:blue; text-align:center' > Grade C is Good </h3>";
         break;
    case 'D':
        echo "<h3 style='color:black; text-align:center'> Grade D is Good</h3>";
         break;
    case 'E':
        echo "<h3 style='color:lawngreen; text-align:center'> Grade E  is Average</h3>";
        break;
    case 'F':
        echo "<h3 style='color:crimson; text-align:center'> Grade F is Average</h3>";
        break;

        default:
        echo "<h3 style='color:darkmagenta; text-align:center'> No Grade </h3>";
        break;
}
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
        <input type="text" name="grade" placeholder="Enter your grade">
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    </center>

</body>
</html>