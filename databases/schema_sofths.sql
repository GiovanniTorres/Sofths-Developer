CREATE DATABASE IF NOT EXISTS sofths ;

USE sofths ;

CREATE TABLE administrador (
    adminDNI INT NOT NULL AUTO_INCREMENT ,
    ad_nombre VARCHAR (40) NOT NULL ,
    ad_apellidos VARCHAR (80) NOT NULL ,
    ad_edad INT NOT NULL ,
    ad_rfc VARCHAR (20) NOT NULL ,
    ad_telefono VARCHAR (10) NOT NULL ,
    ad_mail VARCHAR (50) NOT NULL ,    
    ad_direccion VARCHAR (100) NOT NULL ,
    ad_cp INT NOT NULL ,
    PRIMARY KEY (adminDNI)
) ;

USE sofths ;
CREATE TABLE cliente (
    clienteDNI INT NOT NULL AUTO_INCREMENT ,
    adminDNI INT ,
    cl_nombre VARCHAR (40) NOT NULL ,
    cl_apellidos VARCHAR (80) NOT NULL ,
    cl_usuario VARCHAR (30) NOT NULL ,
    cl_password VARCHAR (30) NOT NULL ,
    cl_edad INT ,
    cl_rfc VARCHAR (20) ,
    cl_telefono VARCHAR (10) NOT NULL ,
    cl_mail VARCHAR (50) NOT NULL ,   
    cl_mensaje TEXT (350) NOT NULL , 
    cl_direccion VARCHAR (100) ,
    cl_cp INT ,
    razon_social VARCHAR (110) ,
    sello_digital TEXT (150) ,
    PRIMARY KEY (clienteDNI) ,
    FOREIGN KEY (adminDNI) REFERENCES administrador (adminDNI) ON UPDATE CASCADE ON DELETE CASCADE
) ;

CREATE TABLE articulo (
    articuloDNI INT NOT NULL AUTO_INCREMENT ,
    nombre VARCHAR (40) NOT NULL ,
    descripcion TEXT (500) NOT NULL ,
    version_art VARCHAR (20) NOT NULL,    precio DECIMAL (7,2) NOT NULL ,
    PRIMARY KEY (articuloDNI) 
) ;

CREATE TABLE venta (
    ventaDNI INT NOT NULL AUTO_INCREMENT ,
    clienteDNI INT NOT NULL ,
    adminDNI INT NOT NULL ,
    fecha_hora DATETIME NOT NULL ,
    total DECIMAL (7,2) NOT NULL,
    PRIMARY KEY (ventaDNI) ,
    FOREIGN KEY (clienteDNI) REFERENCES cliente (clienteDNI) ON UPDATE CASCADE ON DELETE CASCADE ,
    FOREIGN KEY (adminDNI) REFERENCES administrador (adminDNI) ON UPDATE CASCADE ON DELETE CASCADE
) ;

CREATE TABLE factura (
    facturaDNI INT NOT NULL AUTO_INCREMENT ,
    clienteDNI INT NOT NULL ,
    ventaDNI INT NOT NULL ,
    forma_pago VARCHAR (10) NOT NULL,
    uso_cfdi VARCHAR (10) NOT NULL ,
    iva DECIMAL (7,2) NOT NULL ,
    total DECIMAL (7,2) NOT NULL ,
    PRIMARY KEY (facturaDNI) ,
    FOREIGN KEY (clienteDNI) REFERENCES cliente (clienteDNI) ON UPDATE CASCADE ON DELETE CASCADE ,
    FOREIGN KEY (ventaDNI) REFERENCES venta (ventaDNI) ON UPDATE CASCADE ON DELETE CASCADE 
) ;

CREATE TABLE lista (
    listaDNI INT NOT NULL AUTO_INCREMENT ,
    articuloDNI INT NOT NULL ,
    ventaDNI INT NOT NULL ,
    facturaDNI INT NOT NULL ,
    cantidad INT NOT NULL ,
    precio_cant DECIMAL (7,2) NOT NULL ,
    PRIMARY KEY (listaDNI) ,
    FOREIGN KEY (articuloDNI) REFERENCES articulo (articuloDNI) ON UPDATE CASCADE ON DELETE CASCADE ,
    FOREIGN KEY (ventaDNI) REFERENCES venta (ventaDNI) ON UPDATE CASCADE ON DELETE CASCADE ,
    FOREIGN KEY (facturaDNI) REFERENCES factura (facturaDNI) ON UPDATE CASCADE ON DELETE CASCADE
) ;

INSERT INTO administrador (adminDNI, ad_nombre, ad_apellidos, ad_edad, ad_rfc, ad_telefono, ad_mail, ad_direccion, ad_cp) VALUES
(NULL, 'Giovanni', 'Torres Miranda', 33, 'TOMJ8708018F8', '1111111111', 'giovanni@gmail.com', 'calle Cuauhtemoc 2, Ameyalco, Lerma, Estado de México', '52040') , 
(NULL, 'Lupita', 'Caballero Juárez', 25, 'CAJG9411128F8', '2222222222', 'lupita@gmail.com', 'calle Cuauhtemoc 2, Ameyalco, Lerma, Estado de México', '52040') ;

INSERT INTO cliente (clienteDNI, adminDNI, cl_nombre, cl_apellidos, cl_usuario, cl_password, cl_edad, cl_rfc, cl_telefono, cl_mail, cl_direccion, cl_cp, razon_social, sello_digital) VALUES
(NULL, 1, 'Daniela', 'Torres Caballero', 'Dani1000', '39785tom', 7, 'TOCD9411128F8', '3333333333', 'daniela@gmail.com', 'calle Cuauhtemoc 2, Ameyalco, Lerma, Estado de México', '52040', 'Daniela Torres Caballero', 'ghjkiuytdvbhjuytfJHGFDCVBjdcvbj4567887654JHFVBGBNMUY________kfghjjuyt') , 
(NULL, 2, 'Clara', 'Miranda Gonzaga', 'Clara2000', '39785tom', 50, 'MIGC9411128F8', '4444444444', 'clara@gmail.com', 'calle Cuauhtemoc 2, Ameyalco, Lerma, Estado de México', '52040', 'Clara Miranda Gonzaga', 'ghjkiuytdvbhjuytfJHGFDCVBjdcvbj4567887654JHFVBGBNMUY________kfghjjuyt') , 
(NULL, 2, 'Ricardo', 'Torres Flores', 'Rick3000', '39785tom', 51, 'TOFR9411128F8', '5555555555', 'ricardo@gmail.com', 'calle Cuauhtemoc 2, Ameyalco, Lerma, Estado de México', '52040', 'Ricardo Torres Flores', 'ghjkiuytdvbhjuytfJHGFDCVBjdcvbj4567887654JHFVBGBNMUY________kfghjjuyt') ;

INSERT INTO articulo (articuloDNI, nombre, descripcion, version_art, precio) VALUES
(NULL, 'Dominio', 'Nombre de la página web', 'N/A', 200) , 
(NULL, 'Almacenamiento1', 'Hosting de 1TB', 'N/A', 350) ,
(NULL, 'Almacenamiento2', 'Hosting de 2TB', 'N/A', 450) ,
(NULL, 'Almacenamiento3', 'Hosting de 3TB', 'N/A', 550) ,
(NULL, 'Producción', 'Creación del sitio web', '1.0.0', 3500) ,
(NULL, 'Mantenimiento', 'Actualización del sitio', '1.0.0', 1500) ;

INSERT INTO venta (ventaDNI, clienteDNI, adminDNI, fecha_hora, total) VALUES
(NULL, 2, 2, NULL, 4050) , 
(NULL, 1, 1, NULL, 4250) ;

INSERT INTO factura (facturaDNI, clienteDNI, ventaDNI, forma_pago, uso_cfdi, iva, total) VALUES
(NULL, 1, 2, 'por definir', 'gastos en general', 0.15, 4698) , 
(NULL, 3, 1, 'por definir', 'gastos en general', 0.15, 4930) ;

INSERT INTO lista (listaDNI, articuloDNI, ventaDNI, facturaDNI, cantidad, precio_cant) VALUES
(NULL, 1, 1, 1, 1, 200) , 
(NULL, 2, 1, 1, 1, 350) ,
(NULL, 5, 1, 1, 1, 3500) ,
(NULL, 1, 2, 2, 1, 200) , 
(NULL, 3, 2, 2, 1, 450) ,
(NULL, 5, 2, 2, 1, 3600) ;




































USE sofths ;
DROP DATABASE sofths ;