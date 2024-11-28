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

    <li>
        create table employees(employee_name varchar(20));<br>
        insert into employees values("teena","Meena","geeta");</li>
        <li>
          create table deparments(deparment_name varchar(20));<br>
          insert into deparments values("jiya","sumita");</li> 
          <h3>Inner join</h3> 
    <li>
            SELECT employees.name AS employee_name, departments.department_name 
             FROM employees 
            INNER JOIN departments ON employees.department_id = departments.id;
    </li>
        
      <h3>Left join</h3>
      <li>
             SELECT employees.name AS employee_name, departments.department_name 
             FROM employees 
             LEFT JOIN departments ON employees.department_id = departments.id;
      </li>

      <h3>Right join</h3>
      <li>
             SELECT employees.name AS employee_name, departments.department_name 
              FROM employees 
              RIGHT JOIN departments ON employees.department_id = departments.id;
      </li>
</body>
</html>