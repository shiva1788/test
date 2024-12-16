# procedure
#delimiter //
#CREATE PROCEDURE pro_na (IN s1 INT , IN s2 INT , OUT total INT )
#BEGIN
#set total = s1 + s2;
#END//
#delimiter;
#CALL pro_na(10,10,@total);
#SELECT @total;

#delimiter //
#CREATE PROCEDURE po_t(IN i INT , OUT ee VARCHAR(20))
#BEGIN
#SELECT NAME INTO ee FROM ta_b WHERE id = i;
#END //
#delimiter;

#CALL po_t(1,@ee);
#SELECT @ee;
#SELECT * FROM ta_b;


#SELECT * FROM ta_b;



#delimiter //
#CREATE PROCEDURE fin_d(IN a INT , IN b INT )
#BEGIN
#SELECT age FROM ta_b WHERE age BETWEEN a AND b;
#END //
#delimiter;
#CALL fin_d(10,20);


#delimiter //
#CREATE PROCEDURE uo_u(IN s1 INT , IN s2 INT)
#BEGIN
#if(s1 IS NULL || s2 IS NULL )
#then SELECT * FROM ta_b;
#ELSE 
#SELECT age FROM ta_b WHERE age BETWEEN s1 AND s2;
#END if ;
#END //
#delimiter;


#CALL uo_u(10,20);

#delimiter //
#CREATE PROCEDURE p_ooin(IN s2 INT )
#BEGIN
#SELECT * FROM (
#SELECT salary,
#ROW_NUMBER() OVER (ORDER BY salary DESC) as ti FROM ta_b ) t WHERE ti = s2;
#END //
#delimiter;

#CALL p_ooin(2);


#delimiter //
#CREATE PROCEDURE de_rr(IN poo int)
#BEGIN
#SELECT  salary , case 
#when salary > poo then "Your salary has ben good "
#when salary < poo then "your salary has been avg"
#ELSE "you salary poor"
#END 
#FROM ta_b;
#END //
#delimiter ;

CALL de_rr(5000);
#SELECT * FROM ta_b;