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
    <input type="text" name="number" placeholder="Enter your number">
    <br><br>
    <input type="submit" name="submit" value="submit">
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST["submit"]))

 $number=$_POST["number"];

// Recursive function to calculate factorial
function factorialRecursive($number) {
    if ($number <= 1) 
    {
        return 1;
    } 
    else 
    {
        return $number * factorialRecursive($number - 1);
    }
}

// Non-recursive function to calculate factorial
function factorialIterative($number)
 {
    $result = 1;
    for ($i = 2; $i <= $number; $i++) 
    {
        $result *= $i;
    }
    return $result;
}

$start_time = microtime(true);
$recursiveResult = factorialRecursive($number);
$end_time = microtime(true);
$recursiveTime = $end_time - $start_time;

$start_time = microtime(true);
$iterativeResult = factorialIterative($number);
$end_time = microtime(true);
$iterativeTime = $end_time - $start_time;

echo "Factorial of $number (Recursive): " . $recursiveResult . " (Time: " . $recursiveTime . " seconds)"."<br>";
echo "Factorial of $number (Iterative): " . $iterativeResult . " (Time: " . $iterativeTime . " seconds)"."<br>";

$start_time = microtime(true);
factorialRecursive($number);
$end_time = microtime(true);
$recursiveTime = $end_time - $start_time;

$start_time = microtime(true);
factorialIterative($number);
$end_time = microtime(true);
$iterativeTime = $end_time - $start_time;

echo "\nPerformance comparison for large numbers:"."<br>";
echo "Recursive: " . $recursiveTime . " seconds"."<br>";
echo "Iterative: " . $iterativeTime . " seconds"."<br>";
?>