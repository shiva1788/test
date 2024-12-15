#CREATE TABLE h3(
#id INT AUTO_INCREMENT PRIMARY key,
#NAME VARCHAR(20),
#age TINYINT,
#city VARCHAR(20),
#dob DATE,
#salary INT
#);


#INSERT INTO h3 VALUES(1,"shivam",18,"delhi","2024-12-09",10000),(2,"prem",19,"delhi","2024-11-12",10500),(3,"veer",20,"panipat","2024-10-13",9000),(4,"geek",22,"karnal","2024-08-14",11000),(5,"hier",23,"karnal","2024-07-16",11500)


SELECT * FROM h3;

#delimiter //
#CREATE PROCEDURE P_find()
#BEGIN
#SELECT * FROM (
#SELECT salary, MAX(salary) OVER(ORDER BY salary DESC) AS m FROM h3)  t WHERE salary = m;
#WITH ct_n AS(
#SELECT salary,
#ROW_NUMBER() OVER(ORDER BY  salary DESC) AS m FROM h3)
#SELECT salary FROM  ct_n WHERE m = 3;



#delimiter //
#CREATE PROCEDURE P_find(IN s1 INT , IN s2 int)
#BEGIN
#if(s1 IS NULL || s2 IS NULL)
#then SELECT * FROM h3;
#ELSE 
#SELECT * FROM h3  WHERE age BETWEEN s1 AND s2;
#END if;
#END //
#delimiter ;

#CALL P_find(null,22);







#delimiter //
#CREATE PROCEDURE P_ot(OUT edo VARCHAR(20))
#BEGIN
#SELECT  NAME FROM h3 WHERE id = 1;
#SELECT * FROM (
#SELECT salary, MAX(salary)AS ma   FROM h3) t WHERE salary=ma;
#END //
#delimiter;
#CALL P_ot(@edo);
#SELECT @edo;

#
#delimiter //
#CREATE procedure P_nn(IN emp_o VARCHAR(20))
#BEGIN
#if EXISTS(SELECT 1 FROM h3 WHERE NAME = emp_o) then
#SELECT id,NAME FROM h3 WHERE NAME = emp_o;
#ELSE 
#SELECT "ur name cant found" AS message;
#END if;
#END //
#delimiter;
#

#SELECT * FROM h3;





#CREATE TABLE employees (
   # id INT AUTO_INCREMENT PRIMARY KEY,
  #  name VARCHAR(100),
 #   department VARCHAR(100)
#);



#INSERT INTO employees(NAME,department) VALUES("shivam","hr"),("hash","telecom"),("shivam","it");
SELECT * FROM employees;
#TRUNCATE TABLE employees;

#delimiter //
#CREATE PROCEDURE p_u(IN na VARCHAR(20),OUT tot INT)
#BEGIN
#SELECT COUNT(*) INTO tot FROM employees WHERE NAME = na;
#END //
#delimiter;
CALL p_u("shivam",@tot);
SELECT @tot AS er;
