<?php
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $password=$_POST["password"];
    if($name=="bhumi" && $password=="123456")
    {
        echo "<h3 style='color:green; text-align:center'> you are successfully logged IN</h3>";
        header('location:dashboard.php');
    }
    else
    {
       echo "<h3 style='color:red; text-align:center'>your name & password incorrect try again</h3>";
       header('refresh:3,login.php');
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
        <input type="text" name="name" placeholder="Enter your name" required/>
        <br>
        <input type="text" name="password" placeholder="Enter your password" required/>
        <br>
        <input type="submit" name="submit" value="submit">
     </form>
    </center>   
    </body>
</html>