SELECT * FROM hack;
CREATE TABLE TRIGG(
id INT AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR (20) ,
per_h_s INT,
wor_h_s INT,
tot_s int
);

#INSERT INTO trigg(id,NAME,per_h_s,wor_h_s) VALUES(3,"pri",500,7)
#SELECT * FROM trigg;

#TRUNCATE TABLE trigg;
# we can insert the data before using 2 column that can insert in another column
#delimiter //
#CREATE TRIGGER shi_vam
#BEFORE INSERT 
#ON trigg for EACH ROW
#BEGIN
#set NEW.tot_s = NEW.per_h_s * NEW.wor_h_s;
#END; //
#delimiter ;
#SELECT * FROM trigg;


#update trigger
delimiter //
CREATE TRIGGER shi_
BEFORE UPDATE 
ON trigg for EACH ROW 
BEGIN
SET NEW.tot_s = NEW.per_h_s * NEW.wor_h_s;
END; //
delimiter;
SELECT * FROM trigg;
UPDATE trigg SET per_h_s = 600 WHERE id = 1;


#how we can use two table in triggers
DELIMITER $$

CREATE TRIGGER calculate_amount_before_insert
BEFORE INSERT ON order_details
FOR EACH ROW
BEGIN
    DECLARE product_rate DECIMAL(10, 2);

    -- Get the rate from the products table based on the product_id from order_details
    SELECT rate INTO product_rate
    FROM products
    WHERE product_id = NEW.product_id;  -- assuming the product_id is the linking field

    -- Calculate and set the amount
    SET NEW.amount = product_rate * NEW.quantity WHERE product_id = NEW.product_idl;
END $$

DELIMITER ;



CREATE TABLE ash(
product_id INT,
quantity INT ,
amount INT 
);
INSERT INTO ash(product_id,quantity) VALUES(1,2);
TRUNCATE TABLE ash;
SELECT * FROM ash;
SELECT * FROM ashh;

SELECT * FROM ash;
CREATE TABLE ashh(
product_id1 INT,
rate INT  
);
INSERT INTO ash(product_id , quantity ) VALUES(4,2 );

DROP TABLE ashh;
INSERT INTO ashh(product_id1,rate) VALUES(4,100)
SELECT * FROM ashh;
SELECT * FROM ash;


delimiter //
CREATE TRIGGER tr_add
after INSERT
ON ash FOR EACH ROW
BEGIN

UPDATE ash SET 
amount =  ashh.rate * NEW.quantity WHERE ash.product_id=ashh.product_id1;

END // 
delimiter;
#DROP TRIGGER hash


CREATE TABLE 



#CREATE DATABASE fellow;
#SHOW databases
#USE fellow;


#CREATE TABLE ash(
#product_id INT,
#quantity INT,
#amount int
#);

#INSERT INTO ashh VALUES(1,100),(2,200),(3,300)


#INSERT INTO ash(product_id,quantity) VALUES(1,2)

#SELECT * FROM ash;
#SELECT * FROM ashh;

#delimiter //
#cREATE TRIGGER t_up 
#BEFORE INSERT 
#ON ash FOR EACH ROW
#BEGIN
#DECLARE p_rate DECIMAL(10,2); 
# select rate INTO p_rate FROM ashh 
#WHERE product_id1 = NEW.product_id;
#SET new.amount = p_rate * NEW.quantity;
#END //
#delimiter;

#DELIMITER //
