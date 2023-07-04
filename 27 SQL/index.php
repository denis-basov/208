<?php

require 'DBConnect.php';

$pdo = DBConnect::getConnection();
DBConnect::d($pdo);



// CRUD
// CREATE - создание бд, таблицы
// DROP - удаление
// INSERT INTO - добавление данных в таблицу
// INSERT INTO authors (first_name, last_name) VALUES ('Иван', 'Бунин');
// SELECT - выборка данных из бд
/*
 *
CREATE TABLE books(
	book_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    book_name VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    auth_id INT NOT NULL,
    FOREIGN KEY(auth_id) REFERENCES authors(author_id)
);
*/
/*
Роман Фёдора Михайловича Достоевского, впервые опубликованный в номерах журнала «Русский вестник»
 за 1868 год. Являлся одним из самых любимых произведений писателя, наиболее полно выразившим
и нравственно-философскую позицию Достоевского, и его художественные принципы в 1860-х годах.
*/

// получите номер заказа, производителя и сумму заказов из табл с заказами
// получите данные о сотрудниках, у которых менеджер 104
//$images = ['image1' => 'images/image1.jpg',
//					'image2' => 'images/image2.jpg',
//					'image3' => 'images/image3.jpg'];
// получите сотрудников, которые перевыполнили план продаж
// получите сотрудников, у которых продажи больше чем план
// рассчитайте сколько сотрудникам осталось до выхода на пенсию (65)
// рассчитать план продаж, увеличенный на 5% от текущего плана (QUOTA): QUOTA + QUOTA * 0.05
// рассчитать план продаж, увеличенный на 5% от текущих продаж: QUOTA + SALES * 0.05

// 112993  112968  112975

// $searchValue = 'пушкин';
/**
 *    "/$searchValue/u"
 */

/**
 *
SELECT ORDER_NUM, DESCRIPTION, QTY, AMOUNT, ORDER_DATE,
COMPANY, NAME, CITY, REGION
FROM orders, customers, salesreps, products, offices
WHERE CUST = CUST_NUM
AND REP = EMPL_NUM
AND MFR = MFR_ID AND PRODUCT = PRODUCT_ID
AND REP_OFFICE = OFFICE
ORDER BY ORDER_DATE DESC;
 */


/**
 *
SELECT order_num, order_date, product,
price, description,
company, credit_limit,
name,
office, city, region
FROM orders, products, customers, salesreps, offices
WHERE product = product_id
AND cust = cust_num
AND cust_rep = empl_num
AND rep_office = office;
 */

/**
 *
SELECT ORDER_NUM, ORDER_DATE, DESCRIPTION, PRICE, COMPANY, NAME, REP_OFFICE
FROM orders, customers, salesreps, products
WHERE CUST_NUM = CUST AND EMPL_NUM = REP AND PRODUCT = PRODUCT_ID;
 */