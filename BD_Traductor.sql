create database traductor;

use traductor;

CREATE TABLE Palabras (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    palabra_spanish text(50) not null,
    palabra_english text(50) not null
);

INSERT INTO Palabras
  (id, palabra_spanish, palabra_english)
  VALUES ('1','Gato','Cat');
  

INSERT INTO Palabras
  (palabra_spanish, palabra_english)
  VALUES ('Perro','Dog');

SELECT * FROM Palabras;  
/*Consulta con Palabras en Ingles*/
SELECT * FROM palabras where palabra_english = 'Machine';
/*Consulta con Palabras en Español*/
SELECT * FROM palabras where palabra_spanish = 'perro';

UPDATE palabras SET palabra_spanish = "Negro" WHERE id = 17;
UPDATE palabras SET palabra_english = "Black" WHERE id = 17;
