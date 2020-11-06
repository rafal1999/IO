INSERT INTO _productcategory (_idcategory,_categoryname ) Values (0,'Owoce');
INSERT INTO _productcategory (_idcategory,_categoryname ) Values (1,'Warzywa');
INSERT INTO _productcategory (_idcategory,_categoryname ) Values (2,'Słodycze');
INSERT INTO _productcategory (_idcategory,_categoryname ) Values (3,'Podstawowe');
INSERT INTO _productcategory (_idcategory,_categoryname ) Values (4,'Napoje');

--klient typ 1

INSERT INTO _user (_iduser,_login, _password,_type,_firstname,_lastname,_email,_phone,_city,_street,_housenumber,_flatnumber,_postalcode,_lastlogin, _cardnumber)
			Values (0,'JanKowalski','klient123',1,'Jan','Kowalski','kowal@gmail.com','123123123','Gliwice','Akademicka','1a',NULL,'44-100','2020-11-3','012345678912345');

-- kierownicy typ 2
INSERT INTO _user (_iduser,_login, _password,_type,_firstname,_lastname,_email,_phone,_city,_street,_housenumber,_flatnumber,_postalcode,_lastlogin, _cardnumber)
			Values (1,'PiotrTracz','kierownikMiodowa',2,'Piotr','Tracz','tracz@gmail.com','000111000','Gliwice','Akademicka','2a',NULL,'44-100','2020-11-3','112345678912345');
INSERT INTO _user (_iduser,_login, _password,_type,_firstname,_lastname,_email,_phone,_city,_street,_housenumber,_flatnumber,_postalcode,_lastlogin, _cardnumber)
			Values (2,'JanNowak','kierownikSloneczna',2,'Jan','Nowak','nowak@gmail.com','000000001','Gliwice','Akademicka','3a',NULL,'44-100','2020-11-3','212345678912345');
INSERT INTO _user (_iduser,_login, _password,_type,_firstname,_lastname,_email,_phone,_city,_street,_housenumber,_flatnumber,_postalcode,_lastlogin, _cardnumber)
			Values (3,'TadeuszNudny','kierownikWysoka',3,'Tadeusz','Nudny','nuda@gmail.com','000000010','Gliwice','Akademicka','4a',NULL,'44-100','2020-11-3','312345678912345');

-- kierowcy typ 3
INSERT INTO _user (_iduser,_login, _password,_type,_firstname,_lastname,_email,_phone,_city,_street,_housenumber,_flatnumber,_postalcode,_lastlogin, _cardnumber)
			Values (4,'PiotrekTracz','kierowcaMiodowa',3,'Piotrek','Tracz','traczek@gmail.com','100111000','Gliwice','Akademicka','2a',NULL,'44-100','2020-11-3','112345678912341');
INSERT INTO _user (_iduser,_login, _password,_type,_firstname,_lastname,_email,_phone,_city,_street,_housenumber,_flatnumber,_postalcode,_lastlogin, _cardnumber)
			Values (5,'JanekNowak','kierowcaSloneczna',3,'Janek','Nowak','nowaczek@gmail.com','100000001','Gliwice','Akademicka','3a',NULL,'44-100','2020-11-3','212345678912341');
INSERT INTO _user (_iduser,_login, _password,_type,_firstname,_lastname,_email,_phone,_city,_street,_housenumber,_flatnumber,_postalcode,_lastlogin, _cardnumber)
			Values (6,'TadeuszekNudny','kierowcaWysoka',3,'Tadeuszek','Nudny','nudaek@gmail.com','100000010','Gliwice','Akademicka','4a',NULL,'44-100','2020-11-3','312345678912341');

-- SZEF FIRMY typ 0
INSERT INTO _user (_iduser,_login, _password,_type,_firstname,_lastname,_email,_phone,_city,_street,_housenumber,_flatnumber,_postalcode,_lastlogin, _cardnumber)
			Values (7,'JanuszSkąpy','admin123',0,'Janusz','Skąpy','skapy@gmail.com','100000011','Gliwice','Akademicka','0a',NULL,'44-100','2020-11-3','312345678912001');





INSERT INTO _shop (_idproductstorage,_idShop,_name,_idmanager,_iddriver) 
			Values (0,0,'Sklep Miodowa',1,4);
INSERT INTO _shop (_idproductstorage,_idShop,_name,_idmanager,_iddriver) 
			Values (1,1,'Sklep Sloneczna',2,5);
INSERT INTO _shop (_idproductstorage,_idShop,_name,_idmanager,_iddriver) 
			Values (2,2,'Sklep Wysoka',3,6);







INSERT INTO _deliverer (_iddeliverer,_name,_address,_phone) 
			Values (0,'DostawcaOwocówiWarzyw','Kłodnicka','222333444');
INSERT INTO _deliverer (_iddeliverer,_name,_address,_phone) 
			Values (1,'DostawcaSłodyczy','Lubliniecka','222333111');
INSERT INTO _deliverer (_iddeliverer,_name,_address,_phone) 
			Values (2,'DostawcaNapojów','tarnogórska','122333111');
INSERT INTO _deliverer (_iddeliverer,_name,_address,_phone) 
			Values (3,'DostawcaPodstawowy','Krótka','122333111');	
			


INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (0,1,'Makaron','Makaron spaghetti Lubellato doskonały i klasyczny wybór na szybki i wartościowy obiad.',3,3.99,0,3,'makaron.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (1,1,'Mąka','pszenna Szymanowska typ 480',3,3.99,0,3,'makaSzymanowska.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (2,1,'Ketchup łagodny','Ketchup łagodny marki Pudliszki to łagodny w smaku sos',3,2.99,0,3,'ketchup.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (3,1,'Cukier biały','Ketchup łagodny marki Pudliszki to łagodny w smaku sos',3,1.99,0,3,'cukier.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (4,1,'Cytryny','Świeże cytryny, oferowane przez nasz sklep internetowy',0,0.99,0,3,'cytryny.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (5,1,'PEPSI Napój gazowany','Od ponad 100 lat Pepsi niesie radość i orzeźwienie na całym świecie.',4,4.99,0,3,'pepsi.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (6,1,'Kawa mielona','STARBUCKS ESPRESSO Dark Roast Kawa mielona Dark roast Bogaty smak z nutami karmelu.',4,159.99,0,3,'kawa.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (7,1,'Ogórki','Ogórki krótkie spod upraw szklarniowych z nowych zbiorów, świeże i pachnące wiosną.',1,2.99,0,3,'ogorki.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
	   Values (8,1,'Wafelek orzechowy','Wafelek z nadzieniem mleczno-nugatowym.',2,1.59,1,3,'wafelek.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
	   Values (9,1,'Czekolada Biała','Czekolada Biała  Czy wiesz jak powstaje wedlowska biała czekolada?',2,1.59,0,3,'czekolada.jpg');


INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (0,0,'2020-12-12',100,80,NULL,10000);
INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (1,1,'2020-12-12',200,70,NULL,890.23);
INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (2,2,'2020-12-12',300,70,NULL,891.23);
INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (3,3,'2020-12-12',40,10,NULL,201.99);
INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (4,4,'2020-12-12',200,70,NULL,810.23);
INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (5,5,'2020-12-12',300,70,NULL,891.23);
INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (6,6,'2020-12-12',120,12,NULL,999);
INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (7,7,'2020-12-12',500,10,NULL,100000);
INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (8,8,'2020-12-12',300,70,NULL,700.23);
INSERT INTO _ProductBatch(_idbatch,_idproduct,_expirydate,_basecount,_realcount,_iddelivery,_price)
			Values (9,9,'2020-12-12',320,300,NULL,70.23);

-- Produkty sklep 2
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (10,2,'Sos do spaghetti','Sos do spaghetti bolognese. Produkt doprawiony wyrazistą kompozycją przypraw. Gęsta konsystencja.',3,8.49,0,3,'sosBolo.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (11,2,'Steki rybne','Mrożone steki rybne Frosta znakomicie sprawdzają się podczas leniwych dni, kiedy poszukują Państwo szybkiego i prostego sposobu na przygotowanie smacznego obiadu.',3,12.99,2,3,'stekiRybne.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (12,2,'Kakao','Kakao o obniżonej zawartości tłuszczu (zawartość tłuszczu kakaowego 10-12%)',3,6.99,1,3,'kakao.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (13,2,'Pizza mrożona','Ta pizza stanowi połączenie szynki z pieczarkami w towarzystwie lubianych przez wszystkich świeżych i aromatycznych przypraw, które nadają jej wyjątkowy smak i doskonały aromat.',3,8.99,0,3,'pizzaGuseppe.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (14,2,'Sok jabłkowy','Produkt BIO nie zawiera w swoim składzie cukru dodanego ani wody, jest naturalnie tłoczonym i niefiltrowanym sokiem owocowym o niskiej temperaturze pasteryzacji',4,4.49,0,3,'sokJablko.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (15,2,'Kinder Shoko-Bons','Czekoladki z mlecznej czekolady z nadzieniem mlecznym i orzechami - Smakołyk z mlecznym i orzechowym nadzieniem oblany mleczną czekoladą',2,9.49,0,3,'shocoBons.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (16,2,'Oreo','Ciasteczka czekoladowe przedzielone delikatnym kremem waniliowym, który wręcz rozpuszcza się w ustach.',2,4.29,0,3,'oreo.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (17,2,'Lays Prosto z pieca','Chipsy ziemniaczane o smaku grillowanych warzyw',2,4.59,0,3,'laysGrillowaneWarzywa.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
	   Values (18,2,'Pomidory malinowe','Charakteryzują się one typowym dla siebie żebrowaniem, dzięki którym posiadają odpowiednią twardość i soczystość.',1,4.99,0,3,'pomidoryFresh.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
	   Values (19,2,'Banany','Banany bardzo dobrze wpływają na układ krążenia, wzmacniając serce oraz regulując ciśnienie tętnicze krwi.Pozwalają spokojnie zasypiać i wzmacniają pamięć.',0,4.49,0,3,'bananyFresh.jpg');

-- Produkty sklep 0 (o id 0)
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (20, 0,  'Danone Actimel', 'Napój mleczny malinowy wspierający układ odpornościowy całej rodziny!',  4,  6.99,   0,  3,  'actimel.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (21, 0,  'Doritos Hot Corn', 'Chipsy kukurydziane o smaku ostrej papryki.',  2,  4.99,   0,  3,  'doritos.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (22, 0,  'Delicje Szampańskie', 'Biszkopty z galaretką pomarańczową',  2,  4.55,   0,  3,  'delicje.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (23, 0,  'Dżem truskawkowy', 'Dżem truskawkowy Łowicz to dżem wykonany z naturalnych i świeżych kawałków truskawek.',  3,  4.29,  0,  3,  'lowiczDzem.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (24, 0,  'Nestle Płatki kukurydziane', 'NESTLÉ Corn Flakes chrupiące, bezglutenowe płatki kukurydziane!',  3,  9.99,   2.00,  3,  'nestleCornFlakes.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (25, 0,  'Woda lecznicza', 'Kryniczanka to naturalna woda lecznicza Słotwinka.', 4,  20.99,   0,  3,  'kryniczanka.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (26, 0,  'Szampon', 'Szampon wzamcniający Garnier Fructis',  3,  11.69,   1.69,  3,  'szampon.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
		   Values (27, 0,  'Pistacje', 'Pistacje Kresto, prażone, solone',  3,  10.99,   0,  3,  'pistacje.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
	   Values (28, 0,  'Filety z makreli', 'King Oscar - Filety z makreli w sosie pomidorowym z papryką. Produkt rybny sterylizowany',  3,  6.49,   0,  3,  'filetyMakrela.jpg');
INSERT INTO _Product (_idproduct,_idproductstorage,_name,_description,_idcategory,_price,_discount,_iddeliverer,_picture)
	   Values (29, 0,  'Musztarda miodowa', 'Musztarda miodowa Maille Dijon ma ciekawy, słodki smak. Oryginalny aromat wynika z połączenia tradycyjnej musztardy francuskiej Dijon i świetnego gatunkowo miodu. Ten słodki dodatek sprawia, że smak jest znacznie łagodniejszy.',  4,  6.99,   0,  3,  'musztardaMiodowa.jpg');
   
