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
Enter a Number: <input type="text" name="num"/>
<br><br>
<input type="submit" name="check" value="submit">  
  </form>  
</center> 
</body>
</html>
<?php   
    if(isset($_POST["check"]))  
    {    
        $num = $_POST["num"];   
        $reverse = strrev($num);  
          
        if($num == $reverse)
        {  
            echo "The number $num is Palindrome";     
        }
        else
        {  
            echo "The number $num is not a Palindrome";   
        }  
}     
?>