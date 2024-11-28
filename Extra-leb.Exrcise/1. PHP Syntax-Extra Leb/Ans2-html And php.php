<?php
// Array of user data (can be from a database, but here it's hardcoded for simplicity)
$users = [
    ["id" => 1, "name" => "John Doe", "email" => "john@example.com", "age" => 28],
    ["id" => 2, "name" => "Jane Smith", "email" => "jane@example.com", "age" => 34],
    ["id" => 3, "name" => "Emily Johnson", "email" => "emily@example.com", "age" => 22],
    ["id" => 4, "name" => "Michael Brown", "email" => "michael@example.com", "age" => 45],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Table</title>
    <style>
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">User Information Table</h1>

    <!-- PHP to generate the table dynamically -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the $users array and create table rows
            foreach($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . $user['name'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>" . $user['age'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
<?php
// Array of user data (can be from a database, but here it's hardcoded for simplicity)
$users = [
    ["id" => 1, "name" => "John Doe", "email" => "john@example.com", "age" => 28],
    ["id" => 2, "name" => "Jane Smith", "email" => "jane@example.com", "age" => 34],
    ["id" => 3, "name" => "Emily Johnson", "email" => "emily@example.com", "age" => 22],
    ["id" => 4, "name" => "Michael Brown", "email" => "michael@example.com", "age" => 45],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Table</title>
    <style>
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">User Information Table</h1>

    <!-- PHP to generate the table dynamically -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the $users array and create table rows
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . $user['name'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>" . $user['age'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
