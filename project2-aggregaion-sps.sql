-- Sophia Chen and Jack Walton
-- Sophia.s.chen@vanderbilt.edu and jack.s.walton@vanderbilt.edu
-- Project 2

-- AGGREGATION PROCEDURE TO GET COUNT ON a single subdivision
DROP PROCEDURE IF EXISTS get_subdivision_count;

DELIMITER // 

CREATE PROCEDURE get_subdivision_count(IN subdivision_in VARCHAR(2))

BEGIN 
	SELECT subdivision, COUNT(*) AS count
    FROM location
    WHERE subdivision = subdivision_in
    GROUP BY subdivision;
END // 

DELIMITER ;

-- CALL get_subdivision_count("C");


-- AGGREGATION function to get counts of all subdivisions
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


-- Aggregation procedure to get count of all violation counties. 

DROP PROCEDURE IF EXISTS get_all_county_counts;

DELIMITER // 

CREATE PROCEDURE get_all_county_counts()

BEGIN 
	SELECT violation_county, COUNT(*) AS count
    FROM violation
    GROUP BY violation_county;
END // 

DELIMITER ;

CALL get_all_county_counts();

