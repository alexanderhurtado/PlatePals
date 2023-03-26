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
(1, 'Josiah''s Coffeehouse and Cafe', 4.5, 'Cafe, Bakery, Breakfast & Brunch', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/5JyXdQXo_48rAaxU7LYE2Q/348s.jpg', 'josiahscoffee.com'), 
(2, 'Phillips Avenue Diner', 4, 'Diner, Breakfast & Brunch', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/pBJ4cbpqhsYvC1w6x6P7Zw/348s.jpg', 'phillipsavenuediner.com'),
(3, 'Taphouse 41', 4.5, 'Burger, Beer Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/5DvWkQv1LV4jxs_t3yXzvg/348s.jpg', 'taphouse41.com'),
(4, 'Minervas', 4, 'American, Steakhouse, Cocktail Bar', 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/06ymAnXcFnAeBRAimrzKkg/348s.jpg', 'minervas.net'),
(5, 'MacKenzie River Pizza, Grill & Pub', 4, 'Pizza, American, Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/TK9MhKBimNvHUdtfju3UMA/348s.jpg', 'mackenzieriverpizza.com'),
(6, 'Bread & Circus Sandwich Kitchen', 4.5, 'Sandwich, Salad, Beer Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/NvU_V6KQkA6IehqUvRxHag/348s.jpg', 'breadandcircussd.com'),
(7, 'JL Beers', 4, 'Burger, Beer Bar, Sandwich', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/-sh3-KZVVzfwW-vHt30aZw/348s.jpg', 'jlbeers.com'),
(8, 'Granite City Food & Brewery', 3.5, 'Brewery, American, Breakfast & Brunch', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/Sl-TsGuaKhRSteoybuRNug/348s.jpg', 'gcfb.com'),
(9, 'Sickies Garage Burgers & Brews', 3.5, 'Burger, Bar, American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/TaHXcgYBAyLQPzVgNYfWNg/348s.jpg', 'sickiesburgers.com'),
(10, 'Shahi Indian Grill', 4.5, 'Indian, Beer Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/PL5JzCZYIdS1DLo5Pa3Mnw/348s.jpg', 'shahiindiagrill.com'),
(11, 'Grille 26', 4, 'Bar, American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/QY-Hu_d3hHFTwJpAA-J6Vg/348s.jpg', 'grille26.com'),
(12, 'The Blarney Stone Pub', 4.5, 'Irish, Irish Pub, Burger', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/5l2XP96RaGEfbFrFQemBCA/348s.jpg', 'blarneyirishpub.com'),
(13, 'Phnom Penh Asian Cuisine', 4.5, 'Cambodian, Chinese, Asian Fusion', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/3RV7g6Vt4kPLAxUvYpmJkQ/348s.jpg', ''),
(14, 'Sanaa''s Gourmet', 4.5, 'Mediterranean, Vegetarian', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/f7AJ5m2CPMT_22q1GqzI2g/348s.jpg', 'sanaacooks.com'),
(15, 'ROAM Kitchen + Bar', 4, 'American, Steakhouse, Barbeque', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/WsQGxYBSUxbuNLX0aESQgg/348s.jpg', 'roamkitchen.com'),
(16, 'The Original Pancake House', 4.5, 'Breakfast & Brunch', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/ioufnYmjOG9PB8X-nEa2aA/348s.jpg', 'originalpancakehousesiouxfalls.com'),
(17, 'Ode to Food and Drinks', 4.5, 'American, Coffee & Tea, Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/QPyjWTQW-g5SnYH_Ti9QDQ/348s.jpg', 'odetofoodanddrinks.com'),
(18, 'Monk''s Ale House', 4, 'Brewery, American, Beer Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/NT8YUlfEcELu5ABLz4nBVQ/348s.jpg', 'monks-sf.com'),
(19, 'Morrie''s Steakhouse', 4, 'Steakhouse, Bar, Tapas/Small Plates', 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/nGWfO-_LUuO7Vdof8MJj5Q/348s.jpg', 'morriessteakhouse.com'),
(20, 'Lam''s Vietnamese', 4, 'Vietnamese', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/WEE_--p2zqV3iFQSDBBBZA/348s.jpg', ''),
(21, 'Carnaval Brazilian Grill', 4.5, 'Brazilian', 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/5zBYF2tIw5snN5Std-61Kg/348s.jpg', 'cbgsd.com'),
(22, 'All Day Cafe', 4, 'Cafe', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/2thyWyP_inxr3AvNl-fbzg/348s.jpg', 'alldaycafe.net'),
(23, 'Giliberto''s Mexican Taco Shop', 4, 'Mexican', 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/IGHwe0dkjzWuz2vpMK-i5Q/348s.jpg', 'gilibertos.com'),
(24, 'Crawford''s Bar & Grill', 3.5, 'Bar, American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/i4K-NjJIgaPvcXGtTJZHiw/348s.jpg', 'crawfordssf.com'),
(25, 'Mb Haskett Delicatessen', 4.5, 'Coffee & Tea, Deli, Breakfast & Brunch', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/tYnhi_nKwXjmqeLS8ll-KA/348s.jpg', 'mbhaskett.com'),
(26, 'Johnny Carino''s', 3.5, 'Italian', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/EWXg9FuTL6Vli2wx056-AA/348s.jpg', 'carinos.com'),
(27, 'Crave American Kitchen & Sushi Bar', 3.5, 'American, Sushi Bar, Wine Bar', 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/t1HAtkAy_ah2dUozmehukA/348s.jpg', 'craveamerica.com'),
(28, 'Hibachi Grill & Supreme Buffet', 2.5, 'Buffet, Sushi Bar, Japanese', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/bBLKdjOgQta3WwAZq-L_Fg/348s.jpg', 'hibachigrillsiouxfalls.com'),
(29, 'Mama''s Ladas', 4, 'Mexican', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/SUJqCWP6FecBgRjXcMh69g/348s.jpg', 'mamasladas.com'),
(30, 'Chevys Fresh Mex', 3, 'Mexican, Bar, Tex-Mex', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/0lcSv5egn_-1n6B9weg6iw/348s.jpg', 'chevys.com'),
(31, 'Parker''s Bistro', 4, 'American, Bar', 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/2JL2ZgqzhWjdd--Dyx7BTg/348s.jpg', 'parkersbistro.net'),
(32, 'The Barrel House', 4, 'Pizza, Whiskey Bar, Cocktail Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/qYb85fTMsXxC4upUgjSgiQ/348s.jpg', 'thebarrelhousesd.com'),
(33, 'Texas Roadhouse', 3.5, 'Steakhouse, Barbeque, American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/2uRDn4ZvEdsDerDgWDUE3A/348s.jpg', 'texasroadhouse.com'),
(34, 'Oshima', 4.5, 'Sushi Bar, Japanese', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/iLfpOtUJET-yLmeVnOIKeA/348s.jpg', 'oshimasiouxfalls.com'),
(35, 'Sushi-Masa Japanese', 4, 'Japanese, Sushi Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/R5kxVnlJCFZj8ZW8iTSOBA/348s.jpg', ''),
(36, 'kRav''N Bar & Grill', 3.5, 'Sports Bar, American, Wrap', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/DRXR5aVvslBfdpOFwkb1_g/348s.jpg', 'kravn.com'),
(37, 'Tokyo Japanese', 3.5, 'Japanese, Sushi Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/2DdSQD-Pj5eyiLafNDcegQ/348s.jpg', 'sftokyojapanese.com'),
(38, '22TEN Kitchen Cocktails', 4.5, 'Salad, Burger, American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/yxijSun71X28OC9baXZvmA/348s.jpg', '22tenkitchen.com'),
(39, 'Azteca Family Mexican', 4.5, 'Mexican', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/UwIsONyXffLlJ6XowbcIPg/348s.jpg', ''),
(40, 'Pho Quynh', 3.5, 'Vietnamese', 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/AipYopXV9AI-eHJAwQ5xBg/348s.jpg', ''),
(41, 'Outback Steakhouse', 2.5, 'Steakhouse', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/c1i1cfXsAsLSRiFzImFRXQ/348s.jpg', 'outback.com'),
(42, 'Urban Chislic', 3.5, 'American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/hmo1A25W_zO16FgPDC3q5A/348s.jpg', 'urbanchislic.com'),
(43, 'Boss'' Pizza & Chicken', 2.5, 'Pizza, Chicken Shop', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/zNXfgliLkDZ64l3QiEmzTw/348s.jpg', 'bosspizzaandchicken.com'),
(44, 'Buffalo Wild Wings', 2.5, 'American, Sports Bar, Chicken Wing', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/VU5ThlJvexjusgMsPhrOcQ/348s.jpg', 'buffalowildwings.com'),
(45, 'Rod Robin Gourmet Burgers & Brews', 2.5, 'Burger, American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/6-BBPjuM0YqyNxy9qXXVPA/348s.jpg', 'redrobin.com'),
(46, 'Cracker Barrel Old Country Store', 3.5, 'American, Breakfast & Brunch, Southern', 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/ClS9BhQ2ig-v7npeai7IsQ/348s.jpg', 'crackerbarrel.com'),
(47, 'Crooked Pint Ale House', 3, 'Bar, American, Taco', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/somBoTgq1qFhbUNEsVr60A/348s.jpg', 'crookedpint.com'),
(48, 'Tinner''s Public House', 3.5, 'American, Sports Bar, Breakfast & Brunch', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/S3TQ3mbR6ZxMV2W-a8KaOQ/348s.jpg', 'tinnerspublichouse.com'),
(49, 'Lalibela', 4.5, 'Ethiopian', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/IqIFU81m2wp_9J3Fjvms8g/348s.jpg', 'lalibela605.com'),
(50, 'Look''s Marketplace', 4.5, 'Grocery, Wine & Spirits, Deli', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/XX9Px513Wo_K-ux3Wqi3xw/348s.jpg', 'looksmarket.com');