<?php

create table employees
(employee_name varchar(20));

insert into employees 
values("teena","Meena","geeta");
            
               
// select query
Select employee_name from employees; 

select *from employees;

//update query

update employees set employee_name='krina';</li>
          
//Delete query
Delete from employees;
Delete from employees where employee_name='Meena';

//insert query
        
insert into employees
(employee_name varchar(20))
values("teena","Meena","geeta");

insert into employees("teena","Meena","geeta");

//where query

SELECT * from employee_name
WHERE employee_name='jeet';

//like query

SELECT * FROM employee_name
WHERE employee_name LIKE 'a%';

//Group by query

SELECT COUNT(employee_ID), employee_name
FROM employees
GROUP BY employee_name;

//Having

SELECT COUNT(employee_ID), employee_name
FROM employees
GROUP BY employee_name
HAVING COUNT(employee_ID) > 5;

//Limit

SELECT * FROM employee_name
LIMIT 3;

//And 

SELECT * FROM employees
WHERE id = '2' AND employee_name = 'Meena';

//or

SELECT * FROM employees
WHERE employee_name = 'geeta' or employee_name = 'Meena';

//Not

SELECT * FROM employees
WHERE NOT id = '4';
?>