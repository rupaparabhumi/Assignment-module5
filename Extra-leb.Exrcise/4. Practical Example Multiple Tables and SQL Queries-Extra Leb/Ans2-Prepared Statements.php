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
            create table employees(employee_name varchar(20));<br></li>
          <li>insert into employees values("teena","Meena","geeta");</li>
            <li>
              create table deparments(deparment_name varchar(20));<br></li>
              <li>insert into deparments values("jiya","sumita");</li> 
              <h4>Select</h4> 
          <li> Select employee_name from employees; </li> 
          <li>select *from employees;</li>     
          <h4>insert</h4>
          <li>insert into employees(employee_name varchar(20))values("teena","Meena","geeta");</li> 
          <li>insert into employees("teena","Meena","geeta");</li>
          <h4>update</h4>
          <li>update employees set employee_name='krina';</li>
          <h4>Delete</h4>
          <li>Delete from employees;</li>
          <li>Delete from employees where employee_name='Meena';</li>
</body>
</html>