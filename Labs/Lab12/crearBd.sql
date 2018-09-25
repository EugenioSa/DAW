
--Creación de tablas--
IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Materiales')



DROP TABLE Materiales 

CREATE TABLE Materiales 
( 
  Clave numeric(5) not null, 
  Descripcion varchar(50), 
  Costo numeric (8,2) 
) 


IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Proveedores')

DROP TABLE Proveedores

CREATE TABLE Proveedores 
( 
  RFC char(13) not null, 
  RazonSocial varchar(50) 
) 
IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Proyectos')

DROP TABLE Proyectos

CREATE TABLE Proyectos 
( 
  Numero numeric(5) not null, 
  Denominacion varchar(50) 
) 
IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Entregan')

DROP TABLE Entregan

CREATE TABLE Entregan 
( 
  Clave numeric(5) not null, 
  RFC char(13) not null, 
  Numero numeric(5) not null, 
  Fecha DateTime not null, 
  Cantidad numeric (8,2) 
) 

--Carga de datos--
BULK INSERT a1701996.a1701996.Materiales 
  FROM 'e:\wwroot\a1701996\materiales.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = ' ' 
  ) 

BULK INSERT a1701996.a1701996.[Proyectos] 
  FROM 'e:\wwroot\a1701996\proyectos.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = ' ' 
  ) 

BULK INSERT a1701996.a1701996.[Proveedores] 
  FROM 'e:\wwroot\a1701996\proveedores.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = ' ' 
  ) 

SET DATEFORMAT dmy -- especificar formato de la fecha 

BULK INSERT a1701996.a1701996.[Entregan] 
  FROM 'e:\wwroot\a1701996\entregan.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = ' ' 
  ) 




    INSERT INTO Materiales values(1000, 'xxx', 1000) 

	DELETE FROM Materiales where Clave = 1000 and Costo = 1000 

	--Creacion de primary keys--
	ALTER TABLE Materiales add constraint llaveMateriales PRIMARY KEY (Clave) 
	ALTER TABLE Proveedores add constraint llaveProveedores PRIMARY KEY (RFC) 
	ALTER TABLE Proyectos add constraint llaveProyectos PRIMARY KEY (Numero) 

	 INSERT INTO Materiales values(1000, 'xxx', 1000) 

	 SELECT *
	 FROM Materiales
	 
	 sp_helpconstraint materiales

	 --Creación de varias primary keys--
	 ALTER TABLE Entregan add constraint llaveEntregas PRIMARY KEY (Clave,RFC,Numero,Fecha) 
	 sp_helpconstraint entregan

	 SELECT *
	 FROM Materiales

	 SELECT *
	 FROM Proveedores

	 SELECT *
	 FROM Proyectos

	  INSERT INTO entregan values (0, 'xxx', 0, '1-jan-02', 0) ; 
		
		SELECT *
	 FROM Entregan

	 Delete from Entregan where Clave = 0 

	 --Crear foreign keys--
	 ALTER TABLE entregan add constraint cfentreganclave 
		foreign key (clave) references materiales(clave); 

	ALTER TABLE entregan add constraint cfentreganRFC
		foreign key (RFC) references Proveedores(RFC);


	ALTER TABLE entregan add constraint cfentreganNumero
		foreign key (Numero) references Proyectos(Numero);

		--Ver información de keys sobre las tablas
	  sp_helpconstraint Materiales
	  sp_helpconstraint entregan
	  sp_helpconstraint Proyectos
	  sp_helpconstraint Proveedores

	  INSERT INTO Proveedores values('AAAA800101', 'jajajajja');
	  INSERT INTO Proyectos values(5000, 'denom');

	 INSERT INTO entregan values (1000, 'AAAA800101', 5000, GETDATE(), 1); 

	 --Constraint para no aceptar cantidades invalidas--
	  ALTER TABLE entregan add constraint cantidad check (cantidad > 0) ; 

	  

