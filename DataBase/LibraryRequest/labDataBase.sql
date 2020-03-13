-- Выводит все из таблицы firsttable все содержимое
SELECT * FROM firsttable; 

-- Выводит FIO, ZP из таблицы firsttable
SELECT FIO, ZP FROM firsttable;

-- Выводит из таблицы firsttable те значения, которые ЗП больше 1999
SELECT * FROM firsttable WHERE ZP>1999; 

-- Вывести из таблицы firsttable те значения, где ZP Не равняются 10
SELECT * FROM firsttable WHERE ZP<>10;

-- Вывести из таблицы firsttable те значения, где ZP больше 1000 и меньше 2000
SELECT * FROM firsttable WHERE ZP>1000 AND ZP<2000;

-- Вывести из таблицы firsttable те значения, где ZP больше 1000 и Dep равен "Инженер-программист"
SELECT * FROM firsttable WHERE ZP>1000 AND Dep="Инженер-программист";

-- Вывести из таблицы firsttable те значения, где ZP не меньше 100
SELECT * FROM firsttable WHERE NOT ZP<100;

-- Сортировка по ZP
SELECT * FROM firsttable ORDER BY ZP;

-- Сортировка от большего к меньшему
SELECT * FROM firsttable ORDER BY ZP DESC;

-- Сортировка от меньшего к большему
SELECT * FROM firsttable ORDER BY ZP ASC;

-- Сортировка Dep по алфавиту. Сортировка ZP 
SELECT * FROM firsttable ORDER BY Dep, ZP DESC;

-- AS(как) Заменяем латиницу на кириллицу
SELECT Name AS 'Имя', FIO AS "ФИО", ZP AS "ЗП", Dep AS "Департамент" FROM firsttable;

-- НАЛОГИ
SELECT Name AS 'Имя', FIO AS "ФИО", ZP*0.13 AS "Налоги", Dep AS "Департамент" FROM firsttable;

-- ZP после налогов
SELECT Name AS 'Имя', FIO AS "ФИО", ZP-(ZP*0.13) AS "Налоги", Dep AS "Департамент" FROM firsttable;