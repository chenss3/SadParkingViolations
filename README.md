# SadParkingViolations

## Setup

1. Setup and run the Mysql server.  
2. Download the SadParkingViolations repo to the "www" directory
3. Modify the file path on line 59 of project2-create-populate to point to the downloaded Parking_Violations_Issued_-_Fiscal_Year_2017.csv file
4. Run the db setup files in this order:
    - project2-create-populate.sql, 
    - project2-validation-triggers.sql, 
    - project2-views.sql, 
    - project2-insert-all-sp.sql, 
    - project2-aggregation-sps.sql, 
    - project2-audit-triggers.sql
5. Modify conn.php for the proper credentials to connect to the database. Provided are the default MAC and Windows credentials. 
6. open localhost/*\<project-dir\>*/index2.html
7. Navigate the site. 
