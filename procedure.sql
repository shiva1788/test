CREATE PROCEDURE GetCustomersByCountry
     	@id int
AS
BEGIN
SELECT * FROM proce WHERE id =@id
END;


delimiter //
CREATE PROCEDURE p_nnnnn(OUT eidd int)
BEGIN
SELECT * FROM (
SELECT salary, MAX(salary)AS ma   FROM proce) t WHERE salary=ma;
END //
delimiter;
CALL p_nnnn(@totafl);
SELECT @totafl;

SELECT * FROM hack;


delimiter //
# s1 default in
CREATE PROCEDURE o_oo (s1 INT , s2 INT)
BEGIN 
if(s1 IS NULL || s2 IS NULL)
then SELECT * FROM hack;
ELSE 
SELECT * FROM hack
 WHERE salary BETWEEN s1 AND s2;
END IF;
END //
delimiter;

CALL o_oo(null,"2000")


delimiter //
CREATE PROCEDURE ob(IN eid INT ,OUT aa int)
BEGIN
SELECT salary INTO aa FROM hack WHERE emp_id = eid;
END //
delimiter;
SET @emp = 0;
CALL ob(100,@emp);
SELECT @emp;


delimiter //
CREATE PROCEDURE op(IN o1  INT , IN o2 INT,OUT amou int)
BEGIN
SET amou = o1 + o2;
END //
delimiter;
CALL op(10,20,@amou)
SELECT @amou;


delimiter //
CREATE PROCEDURE kl(IN salary INT,OUT result VARCHAR(50))
BEGIN
SET result = case
when salary > 2000 then "Your salary is updated"
when salary < 1000 then "your salary is not updated"
ELSE "your salary cant find"
END;
END//
delimiter;
CALL kl(500,@result);
SELECT @result
