-- Sophia Chen and Jack Walton
-- Sophia.s.chen@vanderbilt.edu and jack.s.walton@vanderbilt.edu
-- Project 2

-- Audit table for violations
DROP TABLE IF EXISTS violations_audit;

CREATE TABLE violations_audit (
	audit_id INT AUTO_INCREMENT,
    summons_number BIGINT,
    violation_code INT, 
    violation_legal_code CHAR(1), 
    date_first_observed VARCHAR(10), 
    violation_description MEDIUMTEXT,
    date_updated DATETIME,
    PRIMARY KEY (audit_id)
) ENGINE=INNODB;

-- AFTER UPDATE store the important old data
DROP TRIGGER IF EXISTS violations_after_update;

DELIMITER // 

CREATE TRIGGER violations_after_update
AFTER UPDATE
ON violation
FOR EACH ROW
BEGIN
	INSERT INTO violations_audit (summons_number,
		violation_code, 
		violation_legal_code, 
		date_first_observed, 
		violation_description,
		date_updated)
    VALUES (OLD.summons_number,
		OLD.violation_code, 
		OLD.violation_legal_code, 
		OLD.date_first_observed, 
		OLD.violation_description,
		NOW());
END // 

DELIMITER ;

-- AFTER DELETE store the important old data
DROP TRIGGER IF EXISTS violations_after_delete;

DELIMITER // 

CREATE TRIGGER violations_after_delete
AFTER DELETE
ON violation
FOR EACH ROW
BEGIN
	INSERT INTO violations_audit (summons_number,
		violation_code, 
		violation_legal_code, 
		date_first_observed, 
		violation_description,
		date_updated)
    VALUES (OLD.summons_number,
		OLD.violation_code, 
		OLD.violation_legal_code, 
		OLD.date_first_observed, 
		OLD.violation_description,
		NOW());
END // 

DELIMITER ;

-- TEST THE AUDIT TRIGGERS

-- UPDATE violation
-- SET summons_number = '1010012'
-- WHERE summons_number = '1010011';

-- DELETE FROM violation
-- WHERE summons_number = '1010012';

-- SELECT * FROM violations_audit;