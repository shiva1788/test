
#CREATE TABLE windo(
#emp_id INT ,
#emp_name VARCHAR(20),
#dept_name VARCHAR(20),
#salary INT
#);



#SELECT * FROM windo;
#SELECT * FROM (
#SELECT * ,
#ROW_NUMBER()OVER(PARTITION BY dept_name order by salary desc ) AS "rn"
#FROM windo ) x WHERE x.rn<2;


#SELECT * FROM (
#SELECT * ,
#RANK()OVER(PARTITION BY dept_name ORDER BY salary DESC) AS "rnk"
#FROM windo ) x WHERE x.rnk<2;
#SELECT * FROM yell;
#WITH ctte AS (
#SELECT MODE,
#MAX(amount) AS "height_a",
#sum(amount)  AS "avg_a"
#FROM yell GROUP BY mode
#)
#SELECT yell.* , height_a , avg_a FROM yell INNER JOIN ctte ON yell.mode = ctte.mode ;
#SELECT * FROM yell;





CREATE TABLE product(
pro_du VARCHAR(20),
sales INT
);


3CREATE TABLE team(
#team_name VARCHAR(50)
#)
SELECT * FROM team;
TRUNCATE TABLE team;
INSERT INTO team VALUES("India"),("Pakistan"),("Australia"),("Afganistan")

#WITH ctee AS (
#SELECT *,
#ROW_NUMBER() OVER( ORDER BY team_name) AS rn
#FROM team
#)
#SELECT t1.team_name AS TEAM,t2.team_name AS OPP_TEAM FROM ctee t1
 INNER JOIN ctee
 t2 ON t1.rn< t2.rn
 
 
 
 CREATE TABLE student(
 id INT,
 NAME VARCHAR(20),
 dept VARCHAR(20),
 mark int
 );
 SELECT * FROM student;
 INSERT INTO student VALUE(1,"shivam","CSE",74),(2,"velly","EE",54),(3,"hash","CSE",74),(4,"oppo","CSE",45)
 ,(5,"vivo","EE",54)
 
# SELECT *,
## dense_RANK() OVER( partition by dept ORDER BY mark desc) AS RANK
# FROM student;
SELECT *,
Lag(mark)OVER(PARTITION BY dept ORDER BY mark) AS m
FROM student;


CREATE TABLE task(
dept VARCHAR(20),
salary INT
);



INSERT INTO task VALUES("it",10000),("hr",50000),("it",9000),("teacher",8000),("hr",60000)

SELECT * FROM task;
SELECT *,
AVG(salary) OVER(PARTITION BY dept ORDER BY salary) AS Av,
MAX(salary) OVER(PARTITION BY dept) AS m
FROM task;
 
 
WITH cto AS (
SELECT *,
AVG (salary) AS "avg sa",
MAX(salary) AS "maximum"
FROM task GROUP BY dept
)
SELECT * FROM task

SELECT * FROM(
SELECT *,
MAX(salary) OVER() high
FROM task) c WHERE salary = high;
 
 
WITH cttii AS (
SELECT salary,
ROW_NUMBER()OVER(ORDER BY salary) higher FROM task)
SELECT salary FROM cttii WHERE higher = 2
 