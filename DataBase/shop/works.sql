SELECT city, round(AVG(comm),2) FROM Salespeople GROUP BY city;



-- Условие после коючевого слова в применяются к каждой хаписи 
-- таблицы в отдельности, условие записанные ключевого слова "Having" 
-- применяются к группам записей,
-- поэтому инструкция "Having" не используется без инструкции "Group by"
-- т.к. условие записываемые после "Having" применяются к группам
-- записей это дает возможность использовать в условиях функции 
-- огрегирования(min,max и т.д.)

-- Вывести список
-- городов в которых средний зармер комиссионных продавцов больше 0,14.
SELECT city, round(AVG(comm),2) FROM Salespeople GROUP BY city HAVING avg(comm)>0.14;

-- Вывести список городов в которых минимальный рейтинг
-- покупателей выше среднего рейтинга всех покупателей 
SELECT city, min(rating) FROM customers GROUP BY city HAVING MIN(rating) > (SELECT AVG(rating) FROM customers);

-- Найти покупателей у которых рейтинг выше рейтинга любого покупателя из Лондона 
SELECT * FROM customers WHERE rating > ALL(SELECT rating FROM customers WHERE city = "London");

-- Вывести список товаров на сумму > 1000 
SELECT AMT FROM orders WHERE AMT > 1000;

-- Вывсети список городов в которых живут покупатели совершившие покупку на сумму более 5000
SELECT city FROM customers WHERE CNUM IN(SELECT cnum FROM orders WHERE amt>5000);

-- Написать запрос который выводит список городов в которых проживают клиенты,
-- из результата вопроса удалить дублирующиеся запросы
SELECT distinct city FROM customers;
-- Объединение таблиц 
SELECT * from Salespeople, Orders;

-- Объединение таблиц где ... = ...
SELECT * from Salespeople, Orders WHERE salespeople.snum = Orders.snum;

SELECT * from Salespeople, Customers WHERE salespeople.snum = Customers.snum;

-- Найти общую сумму заказов каждого продавца
SELECT sname, sum(amt) FROM Salespeople, Orders WHERE salespeople.snum = orders.snum GROUP BY sname;

-- Подсчитать количество заказов у каждого продавца
SELECT sname, COUNT(*) FROM Salespeople, Orders WHERE salespeople.snum = orders.snum GROUP BY sname;

-- Количество заказов и их сумма по каждому продавцу
SELECT sname, COUNT(*), round(sum(amt)2) FROM Salespeople, Orders WHERE salespeople.snum = orders.snum GROUP BY sname;
