-- создать БД, состоящую из одной таблицы (информация об одногруппниках)
-- с четырьмя полями (добавить поле «Адрес»): id, name, age, address.

CREATE TABLE Classmates(
    idKey INTEGER PRIMARY KEY,
    firstName TEXT NOT NULL,
    age INTEGER NOT NULL,
    address TEXT NOT NULL
);

INSERT INTO Classmates VALUES (001, 'Paul', 55, 'SPB');
INSERT INTO Classmates VALUES (002, 'Маша', 15, 'Gatchina');
INSERT INTO Classmates VALUES (003, 'ILIA', 4, 'Samara');

SELECT age, firstName FROM Classmates WHERE age < 20;

