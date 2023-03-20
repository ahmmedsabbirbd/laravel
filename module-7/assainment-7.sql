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
B. SELECT name, salary FROM employees WHERE salary > 50000;
c. SELECT AVG(salary) AS Average Salary FROM employees;
d. SELECT COUNT(*) AS Marketing Employees FROM employees, department WHERE department.name = 'Marketing';
e. UPDATE employees SET salary = 60000 WHERE id BETWEEN 1001 TO 60000;
f. DELETE FROM employees WHERE salary < 30000;


a. SELECT * FROM department;
b. SELECT name FROM department WHERE manager = 'Finance';
c. SELECT count(*) AS total_employees_department FROM employees GROUP BY department;
d. INSERT INTO department ('name', `manager`) values ('John Doe', 'Research');