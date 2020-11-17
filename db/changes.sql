
CREATE DATABASE prueba_tecnica;

CREATE TABLE users(
	id INT(10)PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255),
    lastname VARCHAR(255),
    email VARCHAR(255) NOT NULL
);
CREATE TABLE comercios(
	id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cuit BIGINT(12) NOT NULL,
    razon_social VARCHAR(255) NOT NULL,
    user_id INT(10) NOT NULL
);
CREATE TABLE cbus(
	id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    alias VARCHAR(25),
    cbu VARCHAR(25) NOT NULL,
    comercios_id INT(10)  NOT NULL
);
/*FOREIGN KEYS*/
ALTER TABLE comercios
ADD CONSTRAINT fk_comercios_user_id FOREIGN KEY(user_id) REFERENCES users(id);

ALTER TABLE cbus
ADD CONSTRAINT fk_cbus_comercios_id FOREIGN KEY(comercios_id) REFERENCES comercios(id);
