<?php
if(isset($_POST["submit"]))
{
$category=$_POST["category"];
switch ($category)
{
    case 'starter':
           echo "<h4 style='color:green; text-align:center'>Starter is a selected</h4>";
    break;
    case 'maincourse':
         echo "<h4 style='color:blueviolet;text-align:center'>main course is a selected</h4>"; 
     break;
     case 'dessert':
         echo "<h4 style='color:aqua; text-align:center'>desert is a selected</h4>";
      break;
      default:
         echo "<h4 style='color:black; text-align:center'>no category</h4>";
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
        <h3>Restaurant Food Category</h3>
        <form method="post"> 
     <label for="Category">choose a Category</label>
     <select name="category" id="Category">
     <option value="starter">1.Starter</option>
     <option value="maincourse">2.main course</option>
     <option value="dessert">3.Dessert</option>
        </select>
        <br><br>
     <input type="submit" name="submit" value="submit">
        </form>
    </center>       
    
</body>
</html>