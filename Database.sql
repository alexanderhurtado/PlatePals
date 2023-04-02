-- create and select the database 

DROP DATABASE IF EXISTS dining_app; 

CREATE DATABASE dining_app; 

USE dining_app;  -- MySQL command 

  

-- create the tables 

CREATE TABLE restaurants ( 

  restaurantID  INT(11)  NOT NULL AUTO_INCREMENT, 

  name	VARCHAR(50)   NOT NULL, 

  rating DECIMAL(3, 2) NULL, 

  cat1 VARCHAR(50)   NOT NULL, 

  cat2 VARCHAR(50)   NULL, 

  cat3 VARCHAR(50)   NULL, 

  price_tier INT(5) NULL, 

  photo_url  VARCHAR(255) NULL, 

  site_url  VARCHAR(255) NULL, 

PRIMARY KEY (restaurantID) 

); 

  

-- insert data into the database 

INSERT INTO restaurants VALUES 
(1, 'Josiah''s Coffeehouse and Cafe', 4.5, 'Cafe', 'Breakfast & Brunch', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/5JyXdQXo_48rAaxU7LYE2Q/348s.jpg', 'josiahscoffee.com'),
(2, 'Phillips Avenue Diner', 4, 'Burger', 'Breakfast & Brunch', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/pBJ4cbpqhsYvC1w6x6P7Zw/348s.jpg', 'phillipsavenuediner.com'),
(3, 'Taphouse 41', 4.5, 'Burger', 'Beer Bar', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/5DvWkQv1LV4jxs_t3yXzvg/348s.jpg', 'taphouse41.com'),
(4, 'Minervas', 4, 'American', 'Steakhouse', 'Cocktail Bar', 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/06ymAnXcFnAeBRAimrzKkg/348s.jpg', 'minervas.net'),
(5, 'MacKenzie River Pizza, Grill & Pub', 4, 'Pizza', 'American', 'Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/TK9MhKBimNvHUdtfju3UMA/348s.jpg', 'mackenzieriverpizza.com'),
(6, 'Bread & Circus Sandwich Kitchen', 4.5, 'Sandwich', 'Salad', 'Beer Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/NvU_V6KQkA6IehqUvRxHag/348s.jpg', 'breadandcircussd.com'),
(7, 'JL Beers', 4, 'Burger', 'Beer Bar', 'Sandwich', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/-sh3-KZVVzfwW-vHt30aZw/348s.jpg', 'jlbeers.com'),
(8, 'Granite City Food & Brewery', 3.5, 'Brewery', 'American', 'Breakfast & Brunch', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/Sl-TsGuaKhRSteoybuRNug/348s.jpg', 'gcfb.com'),
(9, 'Sickies Garage Burgers & Brews', 3.5, 'Burger', 'Bar', 'American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/TaHXcgYBAyLQPzVgNYfWNg/348s.jpg', 'sickiesburgers.com'),
(10, 'Shahi Indian Grill', 4.5, 'Indian', 'Beer Bar', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/PL5JzCZYIdS1DLo5Pa3Mnw/348s.jpg', 'shahiindiagrill.com'),
(11, 'Grille 26', 4, 'Bar', 'American', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/QY-Hu_d3hHFTwJpAA-J6Vg/348s.jpg', 'grille26.com'),
(12, 'The Blarney Stone Pub', 4.5, 'Burger', 'Irish Pub', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/5l2XP96RaGEfbFrFQemBCA/348s.jpg', 'blarneyirishpub.com'),
(13, 'Phnom Penh Asian', 4.5, 'Asian Fusion', 'Chinese', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/3RV7g6Vt4kPLAxUvYpmJkQ/348s.jpg', ''),
(14, 'Sanaa''s Gourmet', 4.5, 'Mediterranean', 'Vegetarian', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/f7AJ5m2CPMT_22q1GqzI2g/348s.jpg', 'sanaacooks.com'),
(15, 'ROAM Kitchen + Bar', 4, 'American', 'Steakhouse', 'Barbeque', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/WsQGxYBSUxbuNLX0aESQgg/348s.jpg', 'roamkitchen.com'),
(16, 'The Original Pancake House', 4.5, 'Breakfast & Brunch', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/ioufnYmjOG9PB8X-nEa2aA/348s.jpg', 'originalpancakehousesiouxfalls.com'),
(17, 'Ode to Food and Drinks', 4.5, 'American', 'Coffee & Tea', 'Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/QPyjWTQW-g5SnYH_Ti9QDQ/348s.jpg', 'odetofoodanddrinks.com'),
(18, 'Monk''s Ale House', 4, 'Brewery', 'American', 'Beer Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/NT8YUlfEcELu5ABLz4nBVQ/348s.jpg', 'monks-sf.com'),
(19, 'Morrie''s Steakhouse', 4, 'Steakhouse', 'Bar', NULL, 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/nGWfO-_LUuO7Vdof8MJj5Q/348s.jpg', 'morriessteakhouse.com'),
(20, 'Lam''s Vietnamese', 4, 'Vietnamese', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/WEE_--p2zqV3iFQSDBBBZA/348s.jpg', ''),
(21, 'Carnaval Brazilian Grill', 4.5, 'Brazilian', 'Buffet', NULL, 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/5zBYF2tIw5snN5Std-61Kg/348s.jpg', 'cbgsd.com'),
(22, 'All Day Cafe', 4, 'Cafe', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/2thyWyP_inxr3AvNl-fbzg/348s.jpg', 'alldaycafe.net'),
(23, 'Giliberto''s Mexican Taco Shop', 4, 'Mexican', NULL, NULL, 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/IGHwe0dkjzWuz2vpMK-i5Q/348s.jpg', 'gilibertos.com'),
(24, 'Crawford''s Bar & Grill', 3.5, 'Bar', 'American', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/i4K-NjJIgaPvcXGtTJZHiw/348s.jpg', 'crawfordssf.com'),
(25, 'Mb Haskett Delicatessen', 4.5, 'Coffee & Tea', 'Deli', 'Breakfast & Brunch', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/tYnhi_nKwXjmqeLS8ll-KA/348s.jpg', 'mbhaskett.com'),
(26, 'Johnny Carino''s', 3.5, 'Italian', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/EWXg9FuTL6Vli2wx056-AA/348s.jpg', 'carinos.com'),
(27, 'Crave American Kitchen & Sushi Bar', 3.5, 'American', 'Sushi Bar', 'Wine Bar', 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/t1HAtkAy_ah2dUozmehukA/348s.jpg', 'craveamerica.com'),
(28, 'Hibachi Grill & Supreme Buffet', 2.5, 'Buffet', 'Sushi Bar', 'Japanese', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/bBLKdjOgQta3WwAZq-L_Fg/348s.jpg', 'hibachigrillsiouxfalls.com'),
(29, 'Mama''s Ladas', 4, 'Mexican', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/SUJqCWP6FecBgRjXcMh69g/348s.jpg', 'mamasladas.com'),
(30, 'Chevys Fresh Mex', 3, 'Mexican', 'Bar', 'Tex-Mex', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/0lcSv5egn_-1n6B9weg6iw/348s.jpg', 'chevys.com'),
(31, 'Parker''s Bistro', 4, 'American', 'Bar', NULL, 3, 'https://s3-media0.fl.yelpcdn.com/bphoto/2JL2ZgqzhWjdd--Dyx7BTg/348s.jpg', 'parkersbistro.net'),
(32, 'The Barrel House', 4, 'Pizza', 'Cocktail Bar', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/qYb85fTMsXxC4upUgjSgiQ/348s.jpg', 'thebarrelhousesd.com'),
(33, 'Texas Roadhouse', 3.5, 'Steakhouse', 'Barbeque', 'American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/2uRDn4ZvEdsDerDgWDUE3A/348s.jpg', 'texasroadhouse.com'),
(34, 'Oshima', 4.5, 'Sushi Bar', 'Japanese', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/iLfpOtUJET-yLmeVnOIKeA/348s.jpg', 'oshimasiouxfalls.com'),
(35, 'Sushi-Masa Japanese', 4, 'Japanese', 'Sushi Bar', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/R5kxVnlJCFZj8ZW8iTSOBA/348s.jpg', ''),
(36, 'kRav''N Bar & Grill', 3.5, 'Sports Bar', 'American', 'Wrap', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/DRXR5aVvslBfdpOFwkb1_g/348s.jpg', 'kravn.com'),
(37, 'Tokyo Japanese', 3.5, 'Japanese', 'Sushi Bar', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/2DdSQD-Pj5eyiLafNDcegQ/348s.jpg', 'sftokyojapanese.com'),
(38, '22TEN Kitchen Cocktails', 4.5, 'Salad', 'Burger', 'American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/yxijSun71X28OC9baXZvmA/348s.jpg', '22tenkitchen.com'),
(39, 'Azteca Family Mexican', 4.5, 'Mexican', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/UwIsONyXffLlJ6XowbcIPg/348s.jpg', ''),
(40, 'Pho Quynh', 3.5, 'Vietnamese', NULL, NULL, 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/AipYopXV9AI-eHJAwQ5xBg/348s.jpg', ''),
(41, 'Outback Steakhouse', 2.5, 'Steakhouse', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/c1i1cfXsAsLSRiFzImFRXQ/348s.jpg', 'outback.com'),
(42, 'Urban Chislic', 3.5, 'American', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/hmo1A25W_zO16FgPDC3q5A/348s.jpg', 'urbanchislic.com'),
(43, 'Boss'' Pizza & Chicken', 2.5, 'Pizza', 'Chicken Wing', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/zNXfgliLkDZ64l3QiEmzTw/348s.jpg', 'bosspizzaandchicken.com'),
(44, 'Buffalo Wild Wings', 2.5, 'American', 'Sports Bar', 'Chicken Wing', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/VU5ThlJvexjusgMsPhrOcQ/348s.jpg', 'buffalowildwings.com'),
(45, 'Red Robin Gourmet Burgers & Brews', 2.5, 'Burger', 'American', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/6-BBPjuM0YqyNxy9qXXVPA/348s.jpg', 'redrobin.com'),
(46, 'Cracker Barrel Old Country Store', 3.5, 'American', 'Breakfast & Brunch', 'Southern', 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/ClS9BhQ2ig-v7npeai7IsQ/348s.jpg', 'crackerbarrel.com'),
(47, 'Crooked Pint Ale House', 3, 'Bar', 'American', 'Taco', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/somBoTgq1qFhbUNEsVr60A/348s.jpg', 'crookedpint.com'),
(48, 'Tinner''s Public House', 3.5, 'American', 'Sports Bar', 'Breakfast & Brunch', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/S3TQ3mbR6ZxMV2W-a8KaOQ/348s.jpg', 'tinnerspublichouse.com'),
(49, 'Lalibela', 4.5, 'Ethiopian', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/IqIFU81m2wp_9J3Fjvms8g/348s.jpg', 'lalibela605.com'),
(50, 'Look''s Marketplace', 4.5, 'Deli', 'Sandwich', 'Cocktail Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/XX9Px513Wo_K-ux3Wqi3xw/348s.jpg', 'looksmarket.com'),
(51, 'IHOP', 1.5, 'Breakfast & Brunch', 'American', 'Burger', 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/E4AipmD-Z5gAmaYC9Ik0gA/348s.jpg', 'ihop.com'),
(52, 'Olive Garden Italian', 2.5, 'Italian', 'Soup', 'Salad', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/Q3iuMj_uDr8GJKU_RMYJYw/348s.jpg', 'OliveGarden.com'),
(53, 'Lao Szechuan', 4, 'Hot Pot', 'Chinese', 'Sushi Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/eLy4BlqaAV_MPj49RMtpKw/348s.jpg', ''),
(54, 'Guadalajara Mexican', 4, 'Mexican', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/xl-LxciPomlukGABMo238g/348s.jpg', ''),
(55, 'Tomacelli''s Pizza & Pasta', 4, 'Pizza', 'Italian', NULL, 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/-lvxyVMES5RsBRsLV6Wsyg/348s.jpg', 'tomacellis.com'),
(56, 'Fuji Sushi & Hibachi', 3.5, 'Japanese', 'Sushi Bar', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/Rr4z7a5ev167H6DSbYTe2w/348s.jpg', 'fujisiouxfalls.com'),
(57, 'TC''s Referee Sports Bar & Grill', 4, 'American', 'Sports Bar', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/ajyMjhM0yuWV13uH5X34yw/348s.jpg', 'tcreferee.com'),
(58, 'Vinyl Taco', 3.5, 'Mexican', 'Bar', 'Social Club', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/U49uDMCfowWIX9PYXwsbKw/348s.jpg', 'vinyltaco.com'),
(59, 'McNally''s Irish Pub', 4, 'Irish Pub', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/T0orujYIZD6tb_qxxhIc3w/348s.jpg', 'mcnallysip.com'),
(60, 'HuHot Mongolian Grill', 3.5, 'Mongolian', 'Chinese', 'Asian Fusion', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/AxqBOUdP5NcA2dXlxoZYzw/348s.jpg', 'huthot.com'),
(61, 'Famous Dave''s Bar-B-Que', 3.5, 'Barbeque', 'Comfort Food', 'American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/w_iR9vwDg7lL54YJ_jQm_Q/348s.jpg', 'famousdaves.com'),
(62, 'Pho Thai', 4, 'Vietnamese', 'Thai', 'Asian Fusion', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/dHAu_uOS1VH6UrX2hfxymA/348s.jpg', ''),
(63, 'Everest Indian', 4.5, 'Indian', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/3gPr57qq6Mpj0IumEYPUag/348s.jpg', 'everestcuisines.com'),
(64, 'Inca Mexican', 4, 'Mexican', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/3DD8pwdU7doNl9ncLC5fXQ/348s.jpg', 'incasiouxfalls.com'),
(65, 'Tailgators', 3, 'Breakfast & Brunch', 'American', 'Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/vxC688hWsXZQD0UkdCiVWQ/348s.jpg', 'Tgators.com'),
(66, 'Kaladi''s Bistro', 4, 'Burger', 'Sandwich', 'Salad', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/_sz9uOV84iFBJWSmYbPmiA/348s.jpg', 'kaladisbistro.com'),
(67, 'Casa Del Rey', 3.5, 'Mexican', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/nKiCTsVwc9L8RuQyStBywA/348s.jpg', 'casadelrey.com'),
(68, 'Blue Rock Bar & Grill', 3.5, 'Burger', 'Pizza', 'Wrap', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/CBsgmv3oNHeGR2sImyUFeA/348s.jpg', 'sanfordsports.com'),
(69, 'Nick''s Gyros', 4, 'Greek', NULL, NULL, 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/u5nTIMjtUlQYcbO4TZFBsg/348s.jpg', ''),
(70, 'Mama''s Phried and Phillys', 4.5, 'Sandwich', 'Cheesesteak', NULL, 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/nj2uistPVr-O46aK_1vtNg/348s.jpg', ''),
(71, 'Attic Bar & Grill', 3.5, 'Bar', 'American', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/5iUaN1f7FCcFNfnONGk63g/348s.jpg', 'theatticsf.com'),
(72, 'Dynasty Chinese & Vietnamese', 4, 'Chinese', 'Vietnamese', 'Thai', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/BGA6F2QMnCWi0k-JEkr0hA/348s.jpg', 'DynastychineseSF.com'),
(73, 'Sonic Drive-In', 2, 'Fast Food', 'Burger', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/70zOVkvEbl1qi4TU6ct1UQ/348s.jpg', 'sonicdrivein.com'),
(74, 'PepperJax Grill', 4, 'Cheesesteak', 'Vegetarian', 'Salad', 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/0UNxfPVAq9YNbHVCVhboMA/348s.jpg', 'pepperjaxgrill.com'),
(75, 'Wileys', 3, 'Bar', 'Social Club', 'American', 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/NrpMYwxRgRBrdInTAw8BIg/348s.jpg', 'wileysbar.com'),
(76, 'Panda Express', 2, 'Chinese', 'Fast Food', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/oUwK8Fm3dFsjFk5MiHaQzw/348s.jpg', 'pandaexpress.com'),
(77, 'BackYard Grill', 3.5, 'Barbeque', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/BK05ZGH5eWPj6HOp9KM3WQ/348s.jpg', 'bygrill.com'),
(78, 'The Sandbar & Grill', 3, 'Bar', 'American', 'Burger', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/pWPfwXfDSh3QiunBzqH6BQ/348s.jpg', 'thesandbarsf.com'),
(79, 'The 18th Amendment', 3, 'Pizza', 'American', 'Sports Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/Sb-rkf9JIqUJUzI8WvK8UA/348s.jpg', ''),
(80, 'Red Lobster', 2.5, 'Seafood', 'American', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/6Ddykl5LrG8AqokDiTa7Ew/348s.jpg', 'redlobster.com'),
(81, 'Marco''s Pizza', 4, 'Pizza', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/hU58c_y3OTZ65TfcEfm18Q/348s.jpg', 'marcos.com'),
(82, 'Squealers Smoke Shack', 4, 'American', NULL, NULL, 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/_l2Ar14VIlWic0nhN-fERw/348s.jpg', 'squealerssmokeshack.com'),
(83, 'Falls Overlook Cafe', 3, 'Cafe', NULL, NULL, 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/IOeLpuj3zoqQKlKxngIF5w/348s.jpg', 'fallsoverlook.com'),
(84, 'Chili''s', 2.5, 'Bar', 'Tex-Mex', 'American', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/1TaRbIfLwp-2wCrTdtypbQ/348s.jpg', 'chilis.com'),
(85, 'R Wine Bar & Kitchen', 5, 'Wine Bar', 'Italian', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/rhc8CODwfhe4d7QUisNabQ/348s.jpg', 'rwinebar.com'),
(86, 'Swamp Daddy''s Cajun Kitchen', 4, 'Burger', 'Seafood', 'Southern', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/AQ2lPhkAX4wjgLJmJf1rrw/348s.jpg', ''),
(87, 'Tortilleria Hernandez', 5, 'Mexican', NULL, NULL, 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/12pdK85n8mrDJDBsIVn1ng/348s.jpg', ''),
(88, 'Panera Bread', 3, 'Sandwich', 'Salad', 'Soup', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/osjw905IDOnU8LZ2prk5ag/348s.jpg', 'panerabread.com'),
(89, 'Pave', 3, 'Bar', 'American', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/OL16kfk-tRuitY-U_0yHUg/348s.jpg', 'pavebar.com'),
(90, 'Tokyo Sushi & Hibachi', 2.5, 'Japanese', 'Steakhouse', 'Sushi Bar', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/fXXlFZGwi9FMLs774TW50A/348s.jpg', 'tokyosushihibachisd.com'),
(91, 'Fryn'' Pan', 3.5, 'American', NULL, NULL, 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/rVXBkyScfofK9XCxe9BQbQ/348s.jpg', 'frynpan.net'),
(92, 'Camille''s Sidewalk Cafe', 4, 'Breakfast & Brunch', 'Pizza', 'Sandwich', 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/DhKh8SrexkosgdTqU_rHYw/348s.jpg', 'camillessiouxfalls.com'),
(93, 'Falls Landing', 4.5, 'American', 'Bar', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/RAR5wjeM7cI3ppE7t43UYA/348s.jpg', 'falls-landing.com'),
(94, 'Golden Bowl', 3.5, 'Chinese', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/Bi6CqgIESogxez1K8rg1eQ/348s.jpg', ''),
(95, 'Ruby Tuesday', 3.5, 'American', 'Burger', 'Salad', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/OgSwfbDyustJwo0M5cxh8Q/348s.jpg', 'rubytuesday.com'),
(96, 'Bagel Boy', 4, 'Coffee & Tea', 'Breakfast & Brunch', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/LPekdcFXHye0O8BWPXRHbg/348s.jpg', 'bagelboy605.com'),
(97, 'Yummy House', 4, 'Coffee & Tea', 'Cafe', 'Asian Fusion', 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/EdE_lop7TnixCsNXAJYHYA/348s.jpg', ''),
(98, 'Slim Chickens', 3.5, 'Chicken Wing', 'Southern', 'Comfort Food', 1, 'https://s3-media0.fl.yelpcdn.com/bphoto/rYucZohEYD8cx_aL2v4TTg/348s.jpg', 'slimchickens.com'),
(99, 'Puerto Vallarta', 3.5, 'Mexican', NULL, NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/fDcIhALfjO_RZ7VGV28AHw/348s.jpg', 'puertovallartasf.com'),
(100, 'La Luna Cafe', 4.5, 'Coffee & Tea', 'Breakfast & Brunch', NULL, 2, 'https://s3-media0.fl.yelpcdn.com/bphoto/ILVsLmUryxdRcYIBpnNRYg/348s.jpg', 'lalunacafesf.com');