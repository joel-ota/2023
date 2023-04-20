/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`Parcijalni` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `Parcijalni`;



-- Odjel tablica
CREATE TABLE Odjel (
  OdjelID VARCHAR(10) NOT NULL PRIMARY KEY,
  name VARCHAR(50)
);

-- Dodaj odjele
INSERT INTO Odjel (OdjelID, name)
VALUES
  ('1', 'HR'),
  ('2', 'Prodaja'),
  ('3', 'proizvodnja');

-- Radnici tablica
CREATE TABLE Radnici (
  RadniciID VARCHAR(10) NOT NULL PRIMARY KEY,
  Ime VARCHAR(50),
  Prezime VARCHAR(50),
  Placa DECIMAL(10,2)
);

-- Info o radnicima
INSERT INTO Radnici (RadniciID, Ime, Prezime, Placa)
VALUES
  ('001', 'John', 'Smith', 90000),
  ('002', 'Jane', 'Doe', 40000),
  ('003', 'Sarah', 'Lee', 42000),
  ('004', 'David', 'Kim', 60000),
  ('005', 'Alex', 'Lee', 55000),
  ('006', 'Peter', 'Chen', 85000),
  ('007', 'Laura', 'Chen', 35000),
  ('008', 'Mike', 'Wang', 38000),
  ('009', 'Emily', 'Lin',, 36000),
  ('010', 'Mark', 'Garcia',, 40000),
  ('011', 'Maria', 'Gonzales', 60000),
  ('012', 'Juan', 'Hernandez', 35000),
  ('013', 'Ana', 'Martinez', 42000),
  ('014', 'Carlos', 'Gomez', 55000),
  ('015', 'Sofia', 'Flores', 85000),
  ('016', 'Alejandro', 'Perez', 38000),
  ('017', 'Luis', 'Castillo', 40000),
  ('018', 'Paola', 'Jimenez', 60000),
  ('019', 'Fernanda', 'Alvarez', 35000),
  ('020', 'Diego', 'Ramirez', 42000);

-- Voditelj tablica
CREATE TABLE Voditelj (
  VoditeljID VARCHAR(10) NOT NULL PRIMARY KEY,
  Ime VARCHAR(50),
  Prezime VARCHAR(50),
  salary DECIMAL(10,2)
);

-- Info o voditeljima
INSERT INTO Voditelj (VoditeljID, Ime, Prezime, position, salary)
VALUES
  ('001', 'John', 'Smith', 90000),
  ('006', 'Peter', 'Chen', 85000),
  ('015', 'Sofia', 'Flores', 85000);

-- Rad tablica
CREATE TABLE Rad (
  RadniciID VARCHAR(10) NOT NULL,
  OdjelID VARCHAR(10) NOT NULL,
  PRIMARY KEY (RadniciID, OdjelID),
  FOREIGN KEY (RadniciID) REFERENCES Radnici (RadniciID),
  FOREIGN KEY (OdjelID) REFERENCES Odjel (OdjelID)
);

//////////
-- Dodavanje radnika preko imena i prezimena

INSERT INTO Rad (RadniciID, OdjelID)
VALUES 
  ((SELECT RadniciID FROM Radnici WHERE Ime = 'Zeljko' AND Prezime = 'Ibrahimovic'),
   (SELECT OdjelID FROM Odjel WHERE name = 'Prodaja'));

//////////

-- Dodavanje radnika sa ID u odjele

INSERT INTO Rad (RadniciID, OdjelID)
VALUES ('020', (SELECT OdjelID FROM Odjel WHERE name = 'HR'));

//////////

-- Dodavanje voditelja preko radnikID

INSERT INTO Voditelj (VoditeljID, Ime, Prezime, Placa)
SELECT RadniciID, Ime, Prezime, Placa 
FROM Radnici 
WHERE RadniciID = '001';

//
-- Dodano da piše koji radnik radi u kojem odjelu

ALTER TABLE Rad ADD COLUMN Odjel_Ime VARCHAR(50);
UPDATE Rad
SET Odjel_Ime = Odjel.name
FROM Odjel
WHERE Rad.OdjelID = Odjel.OdjelID;

UPDATE Rad
JOIN Odjel ON Rad.OdjelID = Odjel.OdjelID
SET Rad.Odjel_Ime = Odjel.name;
//

-- Zadatci
/////////
1.
SELECT Ime, Prezime, Placa FROM Radnici;

2.
SELECT Ime, Prezime, Placa, (SELECT AVG(Placa) FROM Voditelj) as prosjecnaPlaca
FROM Voditelj;

3.
DELIMITER //
CREATE PROCEDURE prosjekPlaca ()
BEGIN
  SELECT AVG(placa) AS prosjekPlaca FROM Radnici;
END //
DELIMITER ;

CALL prosjekPlaca();

-- Trigeri
-- povezemo tablicu radnici za voditelji. Plača voditelja je uvijek jednaka bez obzira što ćemo ga voditi i pod radnicima. Plaća se izdaje jedamput tako da nema potrebe
-- da voditelji imaju posebno pisane plaće.
-- kreiram trigere koji će sve promjene u tablici radnici reflektirati u tablici voditelji
-- samo radimo sa tablicom radnici, a tablica voditelji je tu samo da se mogu određene računice zasebno raditi ukoliko nam trebaju (tipa u zadatku 2.)
