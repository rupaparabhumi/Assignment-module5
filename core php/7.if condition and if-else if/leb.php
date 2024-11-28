<?php  
if(isset($_POST["submit"]))
{
    $number=$_POST["number"];
if($number%2==0)  
{  
 echo "<h4 style='color:red; text-align:center'>number is Even </h4>";   
}  
else 
{  
 echo "<h4 style='color:blue; text-align:center'>number is Odd </h4>";  
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
        <h3>even odd number check</h3>
        <form method="post">
   Enter your number <input type="text" name="number" placeholder="number" required/>
   <br>
   <br>
   <input type="submit" name="submit" value="submit">   
        </form>
    </center>  
    
</body>
</html>