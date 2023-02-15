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

(11, ‘The Blarney Stone Pub’, 4.5, ‘Beer Bar’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/cUydjVMwMLg5v7HtmR-2BQ/o.jpg’, ‘https://www.blarneyirishpub.com/’),

(12, ‘Carnaval Brazilian Grill’, 4.5, ‘Brazilian’, 3,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/DbDLkY7N84N8-qhUwif60w/o.jpg’, ‘https://www.cbgsd.com/’),

(13, ‘Phnom Penh Restaurant Asian Cuisine’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/3RV7g6Vt4kPLAxUvYpmJkQ/o.jpg’, ‘https://josiahscoffee.com/’),

(14, ‘Sanaas Gourmet Resturant’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/J28bHXYazKk6sj6NvRet9Q/o.jpg’, ‘https://www.sanaacooks.com/’),

(15, ‘The Original Pancake House’, 4.5, ‘Coffee & Tea’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/ioufnYmjOG9PB8X-nEa2aA/o.jpg’, ‘https://originalpancakehousesiouxfalls.com/’),

(16, Ode to Food and Drinks’, 4.5, ‘Breakfast and Brunch’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/QPyjWTQW-g5SnYH_Ti9QDQ/o.jpg’, ‘https://www.odetofoodanddrinks.com/’),

(17, ‘ROAM Kitchen + Bar’, 4.0, ‘Breakfast and Brunch’, 3,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/WsQGxYBSUxbuNLX0aESQgg/o.jpg’, ‘https://www.roamkitchen.com/’),

(18, ‘Monks Ale House’, 4.5, ‘Breweries’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/hoMBshGLH0O1xolvbyguIw/o.jpg’, ‘https://monks-sf.com/’),

(19, ‘Morries Steakhouse’, 4.5, ‘Steakhouse’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/2yiXB819aiF5aa8PctaruA/o.jpg’, ‘https://www.morriessteakhouse.com/’),

(20, ‘Lams Vietnamese Restaurant’, 4.0, ‘Vietnamese’, 2,  
‘https://s3-media0.fl.yelpcdn.com/bphoto/CvVZEn7xFzbr0nMdiGtMsQ/o.jpg’, ‘’);