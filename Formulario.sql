USE railway;

CREATE TABLE registro(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(45),
    apellido VARCHAR(45),
    telefono CHAR(10),
    correo VARCHAR(100),
    contraseña VARCHAR(32),
    colonia VARCHAR(45),
    calle VARCHAR(45)
);

SELECT * FROM registro;