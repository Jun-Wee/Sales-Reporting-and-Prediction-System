-- 
-- Create database
-- 
CREATE DATABASE `phpsreps`

-- 
-- Create sales table
-- 
CREATE TABLE `sales` (
  `sales_id` int(8) NOT NULL ,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`sales_id`)
) 

-- 
-- Create salesList table
-- 
CREATE TABLE `sales_list`(
  `sales_id` int(8) NOT NULL,
  `product_id` int(8) NOT NULL,
  `quantity` int(8) NOT NULL,
  
)

-- 
-- Create product table
-- 
CREATE TABLE `product`(
  `product_id` int(8) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(8) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (`product_id`) 
)

-- 
-- Create inventory table
-- 
CREATE TABLE `inventory`(
  `product_id` int(8) NOT NULL,
  `stock` int(10) NOT NULL,
  PRIMARY KEY(`product_id`)
)

-- 
-- Create category table
-- 
CREATE TABLE `category`(
  `category_id` int(8) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY(`category_id`)
)

ALTER TABLE `sales_list`
  ADD FOREIGN KEY (`sales_id`) REFERENCES `sales`(`sales_id`),
  ADD FOREIGN KEY (`product_id`) REFERENCES `product`(`product_id`)

ALTER TABLE `product`
  ADD FOREIGN KEY (`category_id`) REFERENCES `category`(`category_id`)

ALTER TABLE `inventory`
  ADD FOREIGN KEY (`product_id`) REFERENCES `product`(`product_id`)


-- insert data into category table
INSERT INTO `category`(`category_id`, `category_name`) 
VALUES 
(1,"Health"),
(2,"Personal Care"),
(3,"Cosmetics"),
(4,"Baby Care");

INSERT INTO `product`(`product_id`, `product_name`, `category_id`, `price`) 
VALUES 
(1,"Vitamins",1,5),
(2,"First Aid",1,6),
(3,"Face Mask",1,7),
(4,"VitaEye & Ear Caremins",1,8),
(5,"Hand Wash",2,9),
(6,"Bath Care",2,7),
(7,"Feminine Care",3,4),
(8,"Oral Care",4,6),
(9,"Cotton",3,5),
(10,"Fragance",3,7),
(11,"Face",3,9),
(12,"Lips",3,10),
(13,"Baby Daipers",4,8),
(14,"Baby Food",4,11),
(15,"Baby Wipes",4,5);

--insert data into inventory default quantity of product is 20
INSERT INTO `inventory`(`product_id`, `stock`) 
VALUES
(1, 20),
(2, 20),
(3, 20),
(4, 20),
(5, 20),
(6, 20),
(7, 20),
(8, 20),
(9, 20),
(10, 20),
(11, 20),
(12, 20),
(13, 20),
(14, 20),
(15, 20);

-- Select all data for display in salesmodule
SELECT `sales.sales_id`, `category.category_name`, `product.product_name`, `product.price`, `sales.date`
FROM (((`sales_list`
INNER JOIN `sales` ON `sales_list.sales_id`=`sales.sales_id`)
      INNER JOIN `product` ON `sales_list.product_id`=`product.product_id`)
      INNER JOIN `category` on `product.category_id`=`category.category_id`)