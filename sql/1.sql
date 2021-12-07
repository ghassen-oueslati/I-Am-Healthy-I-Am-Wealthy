/****** TABLE PRODUCT ******/
CREATE TABLE product(
    id int(11) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    imageP varchar(255) NOT NULL,
    price double(10,2) NOT NULL,
    categoryG varchar(3) NOT NULL,
    categoryS varchar(4) NOT NULL,
    read_more varchar(255) NOT NULL,
    Description varchar(50) NULL,
    Quantity int(11)  NULL
)


/******Fitness******/

/* ----------- 1 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Skipping Rope', 'f1.jpg', 'e1.jpg', 49.5 ,'fit','acc','Produit8.html',10);


INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Skipping Rope', 'f1.jpg', 'e1.jpg', 49.5 ,'fit','acc','Produit8.html',10);


INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Kettlebell 45kg', 'f2.jpg', 'e2.jpg', 97.9,'fit','equi','Produit9.html',10);


INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Dumbbells 20kg', 'f3.jpg', 'e3.jpg', 80.0,'fit','equi','Produit2.html',10);

/* ----------- 4 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`Quantity`) VALUES
('Bumper Plates 45lb', 'f4.png', 'e4.jpg', 95.0,'fit','equi',10);

/* ----------- 5 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Training Band', 'f5.jpg', 'e5.jpg', 76.5,'fit','equi','Produit11.html',10);

/* ----------- 6 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Water Bottle', 'f6.jpg', 'e6.jpg', 45.8,'fit','acc','Produit12.html',10);

/* ----------- 7 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Resistance Bands Set', 'f7.jpg', 'e7.jpg', 60.5 ,'fit','acc','Produit3.html',10);

/* ----------- 8 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Personal Kinesis Heritage', 'f8.jpg', 'e8.jpg', 999.9,'fit','equi','Produit1.html',10);

/* ----------- 9 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Dumbbells 45kg', 'f9.jpg', 'e9.jpg', 140.5,'fit','equi','Produit5.html',10);

/* ----------- 10 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Fitness Mat', 'f10.jpg', 'e10.jpg', 87.5,'fit','acc','Produit7.html',10);

/* ----------- 11 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Hat', 'f11.jpg', 'e11.jpg', 57.4,'fit','acc','Produit13.html',10);

/* ----------- 12 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`Quantity`) VALUES
('Barbell Bar', 'f12.jpg', 'e12.jpg', 89.9,'fit','equi',10);

/* ----------- 13 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Pole', 'f13.jpg', 'e13.jpg', 100.9,'fit','equi','Produit4.html',10);

/* ----------- 14 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`Quantity`) VALUES
('Roll-up foam', 'f14.jpg', 'e14.jpg', 69.5,'fit','acc',10);

/* ----------- 15 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`Quantity`) VALUES
('Weights Benche', 'f15.jpg', 'e15.jpg', 289.9,'fit','acc',10);


/******Nutrition******/

/* ----------- 1 ----------- */

INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Sommer house', 'n1.jpg', 'g1.jpg', 70.0 ,'nut','p100','Aliment13.html',10);

/* ----------- 2 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Gut Primer', 'n2.jpg', 'g2.jpg', 97.9 ,'nut','p100','Aliment2.html',10);

/* ----------- 3 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Glow Protein', 'n3.jpg', 'g3.jpg', 97.9 ,'nut','p100','Aliment3.html',10);

/* ----------- 4 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Body Protein', 'n4.jpg', 'g4.jpg', 95.0 ,'nut','p100','Aliment4.html',10);

/* ----------- 5 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Dope Naturally', 'n5.jpg', 'g5.jpg', 76.5,'nut','p100','Aliment5.html',10);

/* ----------- 6 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Isopure', 'n6.jpg', 'g6.jpg', 75.8,'nut','p100','Aliment6.html',10);

/* ----------- 7 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Protein Bar', 'n7.jpg', 'g7.jpg', 19.9,'nut','p50','Aliment12.html',10);

/* ----------- 8 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('RxBar', 'n8.jpg', 'g8.jpg', 39.9,'nut','p50','Aliment8.html',10);

/* ----------- 9 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Granula', 'n9.jpg', 'g9.jpg', 41.5,'nut','p50','Aliment9.html',10);

/* ----------- 10 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Toast', 'n10.jpg', 'g10.jpg', 37.5,'nut','p50','Aliment10.html',10);

/* ----------- 11 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Granula parfumé', 'n11.jpg', 'g11.jpg', 105.0,'nut','s100','Aliment11.html',10);

/* ----------- 12 ----------- */
INSERT INTO `product` ( `name`, `image`,`imageP`, `price`,`categoryG`,`categoryS`,`read_more`,`Quantity`) VALUES
('Naked wealthy', 'n12.jpg', 'g12.jpg', 124.5,'nut','s100','Aliment7.html',10);

/****** TABLE USER ******/
CREATE TABLE users(
    Email char(50) NOT NULL PRIMARY KEY, /* check (Email LIKE "%@%") ),*/
    FirstName varchar(10) NOT NULL,
    LastName varchar(10) NOT NULL,
    Adress varchar(50) NOT NULL,
    Password char(8) NOT NULL,
    Conn Boolean NOT NULL

)

/****** TABLE INVOICE ******/
CREATE TABLE invoice (
    NumF int(10) NOT NULL PRIMARY KEY,
    Email char(50) NOT NULL, /* check (Email LIKE "%@%") ),*/
    Quantity int(11) NOT NULL,
    Tota double(10,2) NOT NULL,
    Date DATE NOT NULL,
    ShippingC double(2,2) NOT NULL
)

ALTER TABLE invoice 
ADD CONSTRAINT fk1 
FOREIGN KEY (Email)
REFERENCES user(Email);

/****** CLIENT SERVICE ******/
CREATE TABLE service (
IdS int(10) NOT NULL,
Tel int(8) NOT NULL,
Email char(50) NOT NULL, /* check (Email LIKE "%@%") ),*/
NumF int(10) NOT NULL 
)
/****** CART ******/

CREATE TABLE Cart(
    `product_id` int(11) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `product_price` double(10,2) NOT NULL,
    `item_quantity` int(50) NOT NULL,
    PRIMARY KEY (`product_id`)
)
/****/
ALTER TABLE service
ADD CONSTRAINT fk2 
FOREIGN KEY (Email)
REFERENCES user(Email);
/****/
ALTER TABLE service
ADD CONSTRAINT fk3 
FOREIGN KEY (NumF)
REFERENCES invoice(NumF);
