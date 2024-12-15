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






#INSERT INTO ash(product_id,quantity) VALUES(2,3)

#CREATE TABLE hello(
#product_id INT,
#stock INT
#);

INSERT INTO hello values (3,3)



DELIMITER //

CREATE TRIGGER after_insert_table1
AFTER INSERT
ON hell
FOR EACH ROW
BEGIN
    -- Reduce stock in table2 when a record is inserted into table1
   UPDATE hello
    SET stock = stock - NEW.quantity
    WHERE product_id = NEW.product_id;
    
    -- Delete the record from table2 if stock becomes zero or negative
    DELETE FROM hello
    WHERE product_id = NEW.product_id AND stock <= 0;
END;
//

DELIMITER ;





#CREATE TABLE hell(
#id INT,
#product_id INT,
#quantity INT
#);

#INSERT INTO hell VALUES(1,2,5)
SELECT * FROM hell;
#SELECT * FROM hello;









