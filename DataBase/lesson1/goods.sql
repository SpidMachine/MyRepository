-- Добавляет в "goods(Name)" значение "beer"  
INSERT INTO goods(Name) VALUES('beer');
-- Добавляет в "goods(Name, Price)" значение "vodka", "200"
INSERT INTO goods(Name, Price) VALUES('Vodka','200');
-- В goods меняет значение на 228
UPDATE goods SET Price=228;
-- Меняет значение id=2 на price=400
UPDATE goods SET Price=400 WHERE id=2;
-- Удаляет id=6
DELETE from goods WHERE id=6;
-- Задает значение price=NULL Если Price=2
UPDATE goods Price=NULL WHERE Price=2;
-- Установить цену для всех велосипедов 20р
UPDATE goods SET Price=200 WHERE Name='Pepsi-cola';
-- Between
SELECT * from People WHERE Salary>=10000 AND Salary<=12000;
-- Between
SELECT * from People WHERE Salary Between 10000 AND 12000;

SELECT * from People WHERE Dep="Офисный отдел" or Dep="Начальство";

SELECT * from People WHERE Dep IN ("Офисный отдел","Начальство");
-- Два постоновочных символа в Like "% - Любые символы; _ - Один любой символ"
SELECT * from People WHERE Name like "Иван%";
-- Вывести всех сотрудников которые работают в отделе -
-- - название которого содержит ровно 5 символов
SELECT * from People WHERE Dep Like "__________";

-- Функции агрегирование - вычесляют групповые характеристики полей таблицы 
-- min,max,count,sum,avg

SELECT MAX(Salary),min(Salary),sum(Salary),avg(Salary),count(Salary) FROM people;

UPDATE people SET Salary=NULL WHERE id=1;
SELECT count(Salary)
from people;

SELECT count(*) from people;

-- Вложенные запросы 

SELECT * from people WHERE Salary>(SELECT avg(Salary) from people);

-- Найти роботника с самой большое зарплатой
SELECT * from people WHERE Salary=(SELECT max(Salary) from people);

SELECT * from people WHERE Salary=(SELECT min(Salary) from people);

-- вывести информацию о сотрудниках больше  зп в бухгалтерии