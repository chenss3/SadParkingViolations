-- Sophia Chen and Jack Walton
-- Sophia.s.chen@vanderbilt.edu and jack.s.walton@vanderbilt.edu
-- Project 2

DROP PROCEDURE IF EXISTS get_subdivision_count;

DELIMITER // 

CREATE PROCEDURE get_subdivision_count(IN subdivision_in VARCHAR(2))

BEGIN 
	SELECT subdivision, COUNT(*) AS count
    FROM location
    GROUP BY subdivision
    HAVING subdivision = subdivision_in;
END // 

DELIMITER ;

-- CALL get_subdivision_count("C");

DROP PROCEDURE IF EXISTS get_all_subdivision_counts;

DELIMITER // 

CREATE PROCEDURE get_all_subdivision_counts()

BEGIN 
	SELECT subdivision, COUNT(*) AS count
    FROM location
    GROUP BY subdivision;
END // 

DELIMITER ;

-- CALL get_all_subdivision_counts();
