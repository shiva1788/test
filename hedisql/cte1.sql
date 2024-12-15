#INSERT INTO windo VALUES(1,"shivam","It",3000),(2,"vikas","It",2000),(3,"helly","account",10000),(4,"hini","account",15000),(5,"viki","hr",90000),(6,"heri","hr",60000);
#TRUNCATE table windo

SELECT *,
last_value(dept_name) OVER() AS "expensive"
FROM windo;



#SELECT * FROM windo;
#SELECT * FROM wind;
#SELECT * FROM windoo;
#ALTER TABLE windoo add COLUMN E_id INT;
#TRUNCATE TABLE windoo

#INSERT INTO wind VALUES(1,"shivam","It",3000),(2,"vikas","It",2000),(3,"hini","account",10000);
#CREATE TABLE windoo(
#E_id INT ,
#E_NAME VARCHAR (20)
	
#);
#INSERT INTO windoo VALUES("shivam",1),("harry",2),("vlla",3)
#WITH cte_P AS (
#SELECT *,
# AVG(salary) OVER(ORDER BY emp_id) AS "AVG",
# COUNT(salary) OVER (ORDER BY emp_id) AS "count"
#FROM windo INNER JOIN wind ON 
# windo.emp_id=wind.id
# ),
# cte_PP AS (
# SELECT * 
# FROM wind INNER JOIN windoo ON wind.id=windoo.E_id
# )
#SELECT P.age,PP.E_NAME  FROM cte_P AS P,cte_PP AS PP;




#CREATE TABLE yell(
#cus_id INT,
#amount INT ,
#MODE VARCHAR(20),
#payment DATE 
#)

#SELECT * FROM yell;
#WITH cte1 AS (SELECT MODE,amount FROM yell)
#SELECT * from cte1;

#SELECT *,
#AVG(amount) OVER(GROUP BY MODE)AS "avg"
##FROM yell;
# INSERT INTO yell VALUES(8,20100,"checq","2024-12-16")
# DELETE FROM yell WHERE payment="2024-12-10"
 
 
WITH my_ct AS (
 SELECT MODE,
  MAX(amount) AS height_p ,
   SUM(amount) AS total_p
    FROM yell GROUP BY mode

)
 SELECT yell.* , height_p,total_p FROM yell 
INNER JOIN my_ct ON yell.mode = my_ct.mode
 ORDER BY yell.mode
 
 
 
# CREATE TABLE ammy (
# new_id INT ,
# new_name VARCHAR(20)
# );
# SELECT * FROM ammy;
#INSERT INTO ammy VALUES(100,"A"),(200,"B"),(100,"A"),(300,"C");

#SELECT new_id,new_name,
#lead(new_id) OVER(order BY new_id) FROM ammy;


#with ctt AS (
#SELECT new_id,
#ROW_number(new_ id) OVER(ORDER BY new_id desc) AS rown  FROM ammy)
#SELECT new_id FROM ctt WHERE rown = 2;



SELECT * FROM hack;
WITH cttr AS (
SELECT salary, 
SELECT * FROM(
SELECT salary,
Min(salary) OVER()AS sal FROM hack) t WHERE salary = sal;
