create database XYZ_Corp;
create table employees (
    `id` UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(500) NOT NULL,
    `age` varchar(500) NOT NULL,
    `salary` varchar(500) NOT NULL,
    `department_id` varchar(500) NOT NULL
);

create table departments (
    `id` UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(500) NOT NULL,
    `manager` varchar(500) NOT NULL
);

a. SELECT * FROM employees;
    // show all recored of employees table;
B. SELECT name, salary FROM employees WHERE salary > 50000;
    // show only name, salary where salary up 50000;
c. SELECT AVG(salary) AS Average Salary FROM employees;
    // show recored avarage salary;
d. SELECT COUNT(*) AS Marketing Employees FROM employees, department WHERE department.name = 'Marketing';
    //  show recored Marketing department all employees;
e. UPDATE employees SET salary = 60000 WHERE id BETWEEN 1001 TO 60000;
    // update salary where id 1001 to 60000;
f. DELETE FROM employees WHERE salary < 30000;
    // delete all recored where salary 30000 under;


a. SELECT * FROM department;
    // show all recored of department table;
b. SELECT name FROM department WHERE manager = 'Finance';
    //  show recored department only Finance;
c. SELECT count(*) AS total_employees_department FROM employees GROUP BY department;
    //  count recored department only employees;
d. INSERT INTO department ('name', `manager`) values ('John Doe', 'Research');
    //  add recored of table;