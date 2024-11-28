<?php
if(isset($_POST["submit"]))
{
  $num1=$_POST["num1"];
  $num2=$_POST["num2"];
  $operator=$_POST["operator"];
  $result=0;

  if($operator=="+")
  {
     $result=$num1+$num2;
  }
  else if($operator=="-")
  {
     $result=$num1-$num2;
  }
  else if($operator=="*")
  {
     $result=$num1*$num2;
  }
   else if($operator=="/")
  {
     if ($num2!=0)
     {
        $result=$num1/$num2;
     }
  }
   else
     {
        $result="Error! Division by Zero";
     }

     echo "<h3>Result: " . $result . "</h3>";
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
      <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="text" name="num1" placeholder="Enter your number" required/>
      <br>
      <input type="text" name="num2" placeholder="Enter your number" required/>
      <br><br>
      <input type="submit" name="submit" value="submit">
    </form>
  </center>
  
</body>
</html>