<?php
if(isset($_POST["submit"]))
{
    $marks=$_POST["marks"];
if($marks>=95)
{
    echo "<h4 style='color:red; text-align:center'>grade A</h4>";
}
else if($marks>=80)
{
    echo "<h4 style='color:red; text-align:center'>grade B</h4>";
}
else if($marks>=65)
{
   echo "<h4 style='color:red; text-align:center'>grade C</h4>";
}
else if($marks>=40)
{
   echo "<h4 style='color:red; text-align:center'>grade D</h4>";
}
else
{
    echo "<h4 style='color:red; text-align:center'>Fail</h4>";
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
            <input type="text" name="marks" placeholder="enter your marks"/>
            <br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </center>
    
</body>
</html>