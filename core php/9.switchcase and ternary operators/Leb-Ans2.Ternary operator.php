<?php
if(isset($_POST["submit"]))
{
  $age=$_POST["age"];
  if($age>=18)
  {
   echo "<h4 style='color:blueviolet;  text-align:center'>Adult</h4>";
  }
  else
  {
    echo "<h4 style='color:blue; text-align:center'>not Adult</h4>";
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
 Enter your age: <input type="text" name="age" placeholder="Enter your age" required/>
  <br><br>
  <input type="submit" name="submit" value="submit">
    </form>
  </center>    
  
</body>
</html>


