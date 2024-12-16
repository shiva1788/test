#delimiter //
#CREATE TRIGGER task_too
#AFTER INSERT
#ON proo FOR EACH ROW
#BEGIN 
#UPDATE prood SET quant = quant - NEW.quantity WHERE product_id1 = new.product_id;
#END //
#delimiter;

#delimiter //
#CREATE TRIGGER task_dele
#AFTER delete
#ON proo FOR EACH ROW
#BEGIN 
#UPDATE prood SET quant = quant + old.quantity WHERE product_id1 = old.product_id;
#END //
#delimiter;
#DROP TRIGGER task_too;


#delimiter //
#CREATE TRIGGER t_nam
#before INSERT
#ON huge FOR EACH row
#BEGIN
#DECLARE p_rate DECIMAL(10,2);
#SELECT rate INTO p_rate FROM huge1 WHERE product_id = NEW.product_id;
#SET new.amount = p_rate * NEW.quantity;
#END //
#delimiter; 

#delimiter //
#CREATE TRIGGER ad_on 
#AFTER delete
#ON ad FOR EACH ROW
#BEGIN
#INSERT INTO adon VALUES(OLD.id,OLD.quantity);
#END //
#delimiter;

#delimiter //
#CREATE TRIGGER del_on
#AFTER delete
#ON adon FOR EACH ROW
#BEGIN
#INSERT INTO ad VALUES(OLD.id,OLD.quantity);
#END //
#delimiter;

# all are trigger based questions






#CREATE TABLE prood(
#product_id1 INT,
#quant INT
#);
#INSERT INTO proo VALUES(3,5)
#DELETE FROM proo WHERE product_id=2;
#SELECT * FROM prood;
#SELECT * FROM proo;


#CREATE TABLE proo(
#product_id INT,
#quantity INT
#);



#CREATE TABLE ad(
#id INT ,
#quantity INT 
#);
#INSERT INTO ad VALUES(1,5),(2,10);

#CREATE TABLE adon(
#id INT ,
#quantity INT
#);
SELECT * FROM ad;
SELECT * FROM adon;
#DELETE FROM adon WHERE id = 1;

#delimiter //
#CREATE TRIGGER ad_on 
#AFTER delete
#ON ad FOR EACH ROW
#BEGIN
#INSERT INTO adon VALUES(OLD.id,OLD.quantity);
#END //
#delimiter;

#delimiter //
#CREATE TRIGGER del_on
#AFTER delete
#ON adon FOR EACH ROW
#BEGIN
#INSERT INTO ad VALUES(OLD.id,OLD.quantity);
#END //
#delimiter;



