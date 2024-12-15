CREATE TABLE proce(
id INT,
F_Name VARCHAR(20),
L_Name VARCHAR(20),
age INT ,
salary INT
);

SELECT * FROM proce;
INSERT INTO proce VALUES(1,"Shivam","Gupta",17,5000),(2,"arsh","verma",18,4000),(3,"jacku","tito",20,3000),(4,"kushal","Gupta",16,500),(5,"Shi","pta",21,50000

SELECT * FROM proce;
SELECT salary,
Lag(salary) OVER(ORDER BY salary desc) AS updated_sa
FROM proce;