<?php
if(isset($_POST["submit"]))
{
    $month=$_POST["month"];

switch($month)
{
    case '1':
        echo "january";
        break;
    case '2':
        echo "February";
        break;
    case '3':
        echo "March";
        break;
    case '4':
        echo "April";
        break;
    case '5':
        echo "May";
        break;
    case '6':
        echo "June";
        break;
    case '7':
        echo "july";
        break;
    case '8':
        echo "August";
        break;
    case '9':
        echo "september";
        break;
    case '10':
        echo "October";
        break;
    case '11':
        echo "November";
        break;
    case '12':
        echo "December";
        break;
        
        default:
        echo "No month";
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
    
    <form method="post">
        <br>
        <input type="text" name="month" placeholder="Enter your month">
        <br>
        <input type="submit"  name="submit" value="submit">
    </form>
    
</body>
</html>



