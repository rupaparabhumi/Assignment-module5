<?php
function add($num1, $num2) 
{
    return $num1 + $num2;
}
function sub($num1, $num2)
{
    return $num1 - $num2;
}
function mul($num1, $num2) 
{
    return $num1 * $num2;
}
function div($num1, $num2) 
{
    if ($num2 == 0) {
        return "Error! Division by zero.";
    } 
    else 
    {
        return $num1 / $num2;
    }
}
if (isset($_POST["submit"]))
 {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    switch ($operator) 
    {
        case "add":
            $result = add($num1, $num2);
            break;
        case "sub":
            $result = sub($num1, $num2);
            break;
        case "mul":
            $result = mul($num1, $num2);
            break;
        case "div":
            $result = div($num1, $num2);
            break;
        default:
            $result = "Invalid operator.";
            break;
    }

    echo "<h3>Result: " . $result . "</h3>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculator</title>
</head>
<body>
    <center>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required/>
        <input type="number" name="num2" placeholder="Enter second number" required/>
        <br><br>
            <select name="operator">
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="mul">Mul</option>
            <option value="div">Div</option>
        </select>
        <br><br>
      <input type="submit" name="submit" value="submit">
    </form>
</center>

</body>
</html>
