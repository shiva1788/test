DELIMITER $$
create PROCEDURE po_sum2(out eid INT  )
BEGIN
SELECT sum(salary) INTO eid FROM proce;
#SELECT * FROM(
#SELECT *, MAX(salary) OVER(ORDER BY salary DESC) AS ma FROM proce ) c WHERE salary = ma;
#SELECT * FROM proce WHERE id = eid;
END $$
DELIMITER;


CALL po_sum2(223 , 2373);
SELECT @gggg;

#DROP PROCEDURE por_name;
#call por_name();

delimiter //
create PROCEDURE po_sum3( num1 INT , num2 INT )
BEGIN

if(num1 is NULL AND num2 IS NULL )
then SELECT * FROM table
ELSE 
	SELECT  * FROM TABLE 
	WHERE DATE BETWEEN num1 AND num2;
	
END //
	
delimiter ;

CREATE TABLE shedule (

id INT AUTO_INCREMENT,
DOB DATE ,
NAME VARCHAR(30),
PRIMARY KEY(id)

)

INSERT INTO shedule VALUES
(NULL , "2004-04-03" , "karan"),
(NULL , "2005-01-06" , "shivam"),
(NULL , "2024-07-24" , "riya"),
(NULL , "2015-09-21" , "priya"),
(NULL , "1978-02-16" , "gaurav"),
(NULL , "2021-12-19" , "joker");


delimiter //

CREATE PROCEDURE pr_date( startDate DATE , endDate DATE )
BEGIN

if(startDate IS NULL || endDate IS NULL )
then SELECT * FROM shedule;
ELSE
SELECT * FROM shedule
WHERE DOB BETWEEN startDate AND endDate;
END IF;
END //

delimiter ;


CALL pr_date("2004-04-03" , "2015-09-21")









