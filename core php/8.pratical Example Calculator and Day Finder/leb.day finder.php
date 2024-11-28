<?php
if(isset($_POST["submit"]))
{
  $day=$_POST["day"];

switch($day)
{
    case '1':
      echo "<h4 style='color:red; text-align:center'>Happy Sunday</h4>";
    break;
    case '2':
      echo  "<h4 style='color:rgb(226, 226, 3); text-align:center'>Monday</h4>";
     break;
     case '3':
        echo "<h4 style='color:blue; text-align:center'>Thursday</h4>";
     break;
     case '4':
        echo "<h4 style='color:green; text-align:center'>Wednesday</h4>";
      break;
      case '5':
         echo "<h4 style='color:purple; text-align:center'>Thursday</h4>";
         break;
       case '6':
        echo "<h4 style='color:powderblue; text-align:center'>Friday</h4>";
        break;
        case '7':
        echo "<h4 style='color:palevioletred; text-align:center'>saturday</h4>";
        break;
        
        default:
        echo "<h4 style='color:peru; text-align:center'>No day</h4>";
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
    <h3>check your day</h3>
    <form method="post">
  Enter your Day:<input type="text" name="day" placeholder="Enter your day"  required/>
  <br><br>
  <input type="submit" name="submit" value="submit"> 
    </form>
  </center> 
  
</body>
</html>





