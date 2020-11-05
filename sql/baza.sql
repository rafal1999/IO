
CREATE TABLE _Session (					
	_idSession 	  	integer PRIMARY KEY,
	_idUser 	  	integer,                /* klucz obcy*/
	_key	  	  	integer,                /* klucz sesji? xd */
	_expiredTime      	time                    /* czas trwania sesji użytkownika (do jej wygaśnięcia) ? */
);

CREATE TABLE _Cart (
	_idCart           	integer PRIMARY KEY,    /* numer identyfikacyjny przynależny do karty zamówień (koszyk) */
	_idUser           	integer,                /* numer identyfikacyjny użytkownika */
	_idShop           	integer                 /* numer identyfikacyjny sklepu */
);

CREATE TABLE _User (
	_idUser          	integer PRIMARY KEY,
	_login           	varchar(25),            /* login użytkownika */
	_password           	varchar(25),            /* hasło użytkownika */
	_type	        	integer,                /* typ użytkownika */
	_firstName      	varchar(25),            /* imię użytkownika */
	_lastName	        varchar(25),            /* nazwisko użytkowika */
	_email			varchar(45),		/* adres email*/
	_phone               	varchar(12),		/* numer telfonu */
	_city            	varchar (64),           /* adres zamówienia */
	_street           	varchar (64),           /* adres zamówienia */
	_houseNumber            varchar (8),            /* adres zamówienia */
	_flatNumber            	varchar (8),            /* adres zamówienia */
	_postalCode            	varchar (8),            /* adres zamówienia */
	_lastLogin       	date,                   /* data ostatniego zalogowania się na stronę sklepu */
	_cardNumber      	varchar(17)             /* numer karty bankowej użytkownika */
);


CREATE TABLE _ProductToCart(
	_idProduct		integer,                /* id produktu */
	_idCart			integer,                /* id koszyka */
	_count			integer                 /* ilość produktów do dodania */
);

CREATE TABLE _ProductStorage (
	_idProductStorage    	integer PRIMARY KEY,    
	_name               	varchar(25),           	/* nazwa sklepu bądź magazynu */
	_idManager           	integer ,   		/* numer identyfikacyjny kierownika */
	_idDriver            	integer 		/* numer identyfikacyjny kierowcy danego sklepu */
); 

CREATE TABLE _Shop(
	_idShop              	integer PRIMARY KEY
) INHERITS (_ProductStorage);

CREATE TABLE _Purchase (
	_idPurchase          	integer PRIMARY KEY,
	_idShop			integer, 
	_time               	timestamp               /* data i godzina wykonania */
);

CREATE TABLE _Order (
	_idOrder            	integer PRIMARY KEY,
	_idUser             	integer,                /* klucz obcy */
	_deliveryTime           timestamp,              /* data i godzina dostarczenia zamówienia ! NIe potrzebna bo dziedziczy */
	_type               	integer,                /* typ zamówienia ??? */
	_firstName          	varchar(30),            /* imię zamawiającego */
	_lastName           	varchar(30),            /* nazwisko zamawiającego */
	_email			varchar(45),		/* adres email*/
	_city            	varchar (64),           /* adres zamówienia */
	_street           	varchar (64),           /* adres zamówienia */
	_houseNumber            varchar (8),            /* adres zamówienia */
	_flatNumber            	varchar (8),            /* adres zamówienia */
	_postalCode            	varchar (8),            /* adres zamówienia */
	_phone               	varchar(12),		/* numer telefonu*/
	_delivered          	boolean                 /* status - dostarczony, niedostarczony */
)INHERITS (_Purchase);
CREATE TABLE _ProductToPurchase (
	_idProduct           	integer PRIMARY KEY,
	_idPurchase          	integer,                /* klucz obcy ? */
	_count              	integer,                /* liczba elementów w koszyku */
	_price               	numeric(10,2)                /* cena całościowa za produkty w koszyku */
);

CREATE TABLE _ProductCategory(
	_idCategory          	integer PRIMARY KEY,     /* numer kategorii produktu */
	_categoryName        	text                 	/* nazwa danej kategorii */
);	

CREATE TABLE _Product (
	_idProduct           	integer PRIMARY KEY,
	_idProductStorage    	integer,                /* klucz obcy ? */
	_name               	varchar(64),            /* nazwa produktu */
	_description		text,			/* opis produktu */
	_idCategory          	integer,                /* numer odpowiadający za kategorię produktu 0 - jedzenie 1- agd rtv */
	_price               	numeric(10,2),          /* cena produktu */
	_discount            	integer,                /* ile wynosi obniżka ceny produktu */
	_idDeliverer         	integer,                /* numer dostawcy danego produktu */
	_picture             	varchar(200)            /* ścieżka do pliku ze zdjęciem */
);

CREATE TABLE _ProductBatch (
	_idBatch             	integer PRIMARY KEY,
	_idProduct           	integer,                /* klucz obcy? */
	_expiryDate          	date,                   /* termin daty ważności produktu */
	_baseCount           	integer,                /* zamówiona ilość produktów */
	_realCount           	integer,                /* dostarczona ilość produktów */
	_idDelivery          	integer,                /* numer dostawy */
	_price               	numeric(10,2)           /* cena całego zamówienia */
);

CREATE TABLE _Warehouse(
	_idWarehouse 		integer PRIMARY KEY
)INHERITS (_ProductStorage);	

CREATE TABLE _WarehouseProductBatch(
	_idWarehouseBatch    	integer PRIMARY KEY,
	_idProduct           	integer,                /* numer identyfikacyjny produktu */
	_idWarehouseDelivery 	integer,                /* klucz obcy? */
	_baseCount           	integer,                /* zamówiona ilość produktów */
	_realCount           	integer                 /* dostarczona ilość produktów */
);

CREATE TABLE _Delivery (
	_idDelivery          	integer PRIMARY KEY,
	_idDeliverer         	integer,                /* klucz obcy? */
	_time               	timestamp,              /* data i godzina zaplanowanej dostawy */
	_status             	boolean                 /* status dostawy */
);

CREATE TABLE _Deliverer (
	_idDeliverer         	integer PRIMARY KEY,
	_name               	varchar(64),            /* nazwa dostawcy */
	_address            	varchar(64),            /* adres zamówienia */
	_phone               	varchar(12)             /* numer telefonu dostawcy? */
);

  CREATE TABLE _WarehouseDelivery(  
	_idWarehouseDelivery 	integer PRIMARY KEY,
	_idWarehouse         	integer,                /* klucz obcy? */
	_dateOfOrder         	date,                   /* data wykonania zamówienia */
	_dateOfDelivery      	date,                   /* data dostarczenia zamówienia */
	_status             	boolean                 /* status zamówienia - dostarczony/niedostarczony */
);


/*Nadawanie Kluczy Obcych*/


ALTER TABLE _Session
ADD FOREIGN KEY (_idUser) REFERENCES _User (_idUser);

ALTER TABLE _Cart
ADD FOREIGN KEY (_idUser) REFERENCES _User (_idUser);
ALTER TABLE _Cart
ADD FOREIGN KEY (_idShop) REFERENCES _Shop(_idShop);
----------------------------------------------------

ALTER TABLE _ProductToCart
ADD FOREIGN KEY (_idProduct) REFERENCES _Product(_idProduct);
ALTER TABLE _ProductToCart
ADD FOREIGN KEY (_idCart) REFERENCES _Cart(_idCart);
----------------------------------------------------

ALTER TABLE _ProductStorage
ADD  FOREIGN KEY (_idManager) REFERENCES _User(_idUser);
ALTER TABLE _ProductStorage
ADD  FOREIGN KEY (_idDriver) REFERENCES _User(_idUser);
----------------------------------------------------
/*
ALTER TABLE _Shop
ADD  FOREIGN KEY (_idDriver) REFERENCES _User(_idUser);
ALTER TABLE _Shop
ADD  FOREIGN KEY (_idManager) REFERENCES _User(_idUser);
*/
----------------------------------------------------
ALTER TABLE _Purchase
ADD  FOREIGN KEY (_idShop) REFERENCES _Shop(_idShop);
----------------------------------------------------

ALTER TABLE _Product
ADD  FOREIGN KEY (_idCategory) REFERENCES _ProductCategory(_idCategory);
ALTER TABLE _Product
ADD  FOREIGN KEY (_idDeliverer) REFERENCES _deliverer(_idDeliverer);
/*ALTER TABLE _Product
ADD  FOREIGN KEY (_idProductStorage) REFERENCES _ProductStorage(_idProductStorage);*/ -- nie używać 


----------------------------------------------------

ALTER TABLE _ProductBatch
ADD  FOREIGN KEY (_idProduct) REFERENCES _Product(_idProduct);
----------------------------------------------------

ALTER TABLE _WarehouseProductBatch
ADD  FOREIGN KEY (_idProduct) REFERENCES _Product(_idProduct);

ALTER TABLE _WarehouseProductBatch
ADD  FOREIGN KEY (_idWarehouseDelivery) REFERENCES _WarehouseDelivery(_idWarehouseDelivery);
----------------------------------------------------

ALTER TABLE _Delivery
ADD  FOREIGN KEY (_idDeliverer) REFERENCES _Deliverer(_idDeliverer);
