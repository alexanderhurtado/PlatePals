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

(2, ‘Grille 26’, 4.0, ‘American(traditional)’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/3oGkpYjrpNmrIcx0HCF26A/o.jpg’, ‘https://www.grille26.com/’), 

(3, ‘Philips Avenue Diner’, 4.0, ‘Diner’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/pBJ4cbpqhsYvC1w6x6P7Zw/o.jpg’, ‘https://www.phillipsavenuediner.com’),

(4, ‘Minnervas Restaurant’, 4.0, ‘Steakhouse’, 3,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/Ex10KDzF4ZgOgKITVsnfyA/o.jpg’, ‘https://www.minervas.net/’),

(5, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(6, ‘Mackenzie River Pizza, Grill, & Pub’, 4.0, ‘Pizza and Bar’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/Jx3Cqz7J0kiYK5eipjiWQA/o.jpg’, ‘https://www.mackenzieriverpizza.com’),

(7, ‘Bread & Circus Sandwhich Kitchen’, 4.5, ‘Sanwhiches, Salad, Beer Bar’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/uPqqPvV42Ev7op8ZojJNMw/o.jpg’, ‘https://www.breadandcircussd.com/’),

(8, ‘JL Beers’, 4.0, ‘Beer Bar, Burgers, Sandwhiches’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/fx26BloB_7ImRxldMaFSbQ/o.jpg’, ‘https://jlbeers.com/323/’),

(9, ‘Granite City Food & Brewery’, 3.5, ‘Breweries, Breakfast & Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/Sl-TsGuaKhRSteoybuRNug/o.jpg’, ‘https://www.gcfb.com/location/sioux-falls-south-dakota/’),

(10, ‘Sickies Garage Burgers & Brews’, 3.5, ‘Burgers and Bars’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/0F_UIH-4lTVSPd9deF7aiA/o.jpg’, ‘https://sickiesburgers.com/’),

/**(11, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(12, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(13, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(14, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(15, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(16, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(17, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(18, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(19, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’),

(20, ‘Josiahs Coffeehouse and Cafe’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/eJ_Sj1_0K5ZogBXtcq-VYw/o.jpg’, ‘https://josiahscoffee.com/’); **/