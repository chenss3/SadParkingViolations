-- Sophia Chen and Jack Walton
-- Sophia.s.chen@vanderbilt.edu and jack.s.walton@vanderbilt.edu
-- Project 2



-- validate that vehicle's expiration date is after the current date. 
DROP TRIGGER IF EXISTS validate_vehicle;

DELIMITER // 

CREATE TRIGGER validate_vehicle
BEFORE INSERT ON vehicle
FOR EACH ROW 
BEGIN 
	IF NEW.vehicle_expiration_date < CURDATE() THEN 
		SET NEW.vehicle_expiration_date = CURDATE();
    END IF;
END // 

DELIMITER ;


-- MAKE SURE TO INSERT INTO VIOLATION BEFORE TRYING TO INSERT INTO issuer, location, registration, vehicle
-- issuer
DROP TRIGGER IF EXISTS before_insert_issuer;

DELIMITER // 

CREATE TRIGGER before_insert_issuer
BEFORE INSERT ON issuer
FOR EACH ROW 
BEGIN 
	INSERT IGNORE INTO violation(summons_number)
    VALUES(NEW.summons_number);
END // 

DELIMITER ;

-- location
DROP TRIGGER IF EXISTS before_insert_location;

DELIMITER // 

CREATE TRIGGER before_insert_location
BEFORE INSERT ON location
FOR EACH ROW 
BEGIN 
	INSERT IGNORE INTO violation(summons_number)
    VALUES(NEW.summons_number);
END // 

DELIMITER ;

-- registration
DROP TRIGGER IF EXISTS before_insert_registration;

DELIMITER // 

CREATE TRIGGER before_insert_registration
BEFORE INSERT ON registration
FOR EACH ROW 
BEGIN 
	INSERT IGNORE INTO violation(summons_number)
    VALUES(NEW.summons_number);
END // 

DELIMITER ;

-- registration
DROP TRIGGER IF EXISTS before_insert_vehicle;

DELIMITER // 

CREATE TRIGGER before_insert_vehicle
BEFORE INSERT ON vehicle
FOR EACH ROW 
BEGIN 
	INSERT IGNORE INTO violation(summons_number)
    VALUES(NEW.summons_number);
END // 

DELIMITER ;

-- test that insert causes violation to be populated
INSERT INTO issuer(summons_number)
VALUES (1);
INSERT INTO location(summons_number)
VALUES(2);
INSERT INTO registration(summons_number)
values(3);
INSERT INTO vehicle(summons_number)
values(4);

