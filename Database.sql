-- create and select the database 

DROP DATABASE IF EXISTS dining_app; 

CREATE DATABASE dining_app; 

USE dining_app;  -- MySQL command 

  

-- create the tables 

CREATE TABLE restaurants ( 

  restaurantID  INT(11)  NOT NULL AUTO_INCREMENT, 

  name	VARCHAR(50)   NOT NULL, 

  rating DECIMAL(3, 2) NULL, 

  category VARCHAR(50)   NOT NULL, 

  price_tier INT(5) NULL, 

  photo_url  VARCHAR(255) NULL, 

  site_url  VARCHAR(255) NULL, 

PRIMARY KEY (restaurantID) 

); 

  

-- insert data into the database 

INSERT INTO restaurants VALUES 

(1, ‘Taphouse 41’, 4.5, ‘Burgers’, 2,  
https://s3-media0.fl.yelpcdn.com/bphoto/5DvWkQv1LV4jxs_t3yXzvg/348s.jpg’, ‘https://www.taphouse41.com’), 

(1, ‘Taphouse 41’, 4.5, ‘Burgers’, 2,  
https://s3-media0.fl.yelpcdn.com/bphoto/5DvWkQv1LV4jxs_t3yXzvg/348s.jpg’, ‘https://www.taphouse41.com’), 

; 