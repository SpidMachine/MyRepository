--Найти фамилию продовца из Лондона с самыми маленькими комиссионными
SELECT sname FROM salespeople WHERE comm = (SELECT MIN(comm) FROM salespeople WHERE city = "London");

-- Найти средний рейтинг покупателей в каждом городе 
SELECT AVG(rating), city FROM customers GROUP BY city;

SELECT * FROM customers, orders, salespeople WHERE salespeople.snum = orders.snum AND customers.cnum = orders.cnum;

-- Средний рейтинг покупателей для каждого продавца
SELECT sname, AVG(rating) FROM salespeople, customers, orders WHERE salespeople.snum = orders.snum AND customers.cnum = orders.cnum GROUP BY sname;

-- Найти среднюю сумму заказов для каждого продавца на каждую дату
SELECT odate, sname, AVG(amt), count(amt) FROM salespeople, orders WHERE salespeople.snum = orders.snum GROUP BY sname, odate;

-- среднюю сумму заказов на каждое число
SELECT avg(amt),odate FROM orders GROUP BY odate;