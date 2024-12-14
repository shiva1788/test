SELECT * FROM hack;
CREATE TABLE TRIGG(
id INT AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR (20) ,
per_h_s INT,
wor_h_s INT,
tot_s int
);

INSERT INTO trigg(id,NAME,per_h_s,wor_h_s) VALUES(3,"pri",500,7)
SELECT * FROM trigg;

#TRUNCATE TABLE trigg;
# we can insert the data before using 2 column that can insert in another column
delimiter //
CREATE TRIGGER shi_vam
BEFORE INSERT 
ON trigg for EACH ROW
begin
set NEW.tot_s = NEW.per_h_s * NEW.wor_h_s;
END; //
delimiter ;
SELECT * FROM trigg;


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
    SET NEW.amount = product_rate * NEW.quantity;
END $$

DELIMITER ;

