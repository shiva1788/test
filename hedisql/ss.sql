#delimiter //
#CREATE TRIGGER ha_shiiii
#BEFORE DELETE
#ON HASH1 FOR EACH ROW
#BEGIN
#INSERT INTO hash2 VALUES(old.id ,old.NAME);
#END //
#delimiter;

#USE fellow
#SHOW databases
#SELECT * FROM hello;

#SELECT * FROM hello;


#INSERT INTO hell VALUES(2,3,6);



#USE fellow;



#delimiter //
#CREATE TRIGGER ha_sh
#BEFORE DELETE
#ON h1 FOR EACH ROW
#BEGIN
#INSERT INTO h2 VALUES(OLD.id,OLD.name);
#END //
#delimiter;


#CREATE TABLE h1(
#id INT ,
#NAME VARCHAR(20)
#);

#INSERT INTO h1 VALUES(1,"shivam");
SELECT * FROM h2;
SELECT * FROM h1;
#CREATE TABLE h2(
#id INT,
#NAME VARCHAR(20)
#);
DELETE FROM h1 WHERE id = 1;