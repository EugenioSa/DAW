select * from materiales 

select * from materiales 
where clave=1000 


select clave,rfc,fecha from entregan 


select * from materiales,entregan 
where materiales.clave = entregan.clave 


select * from entregan,proyectos 
where entregan.numero < = proyectos.numero 


select * from entregan where clave=1450 OR clave=1300

 

select * from entregan where clave<>1000 



select * from entregan,materiales 

set dateformat dmy

SELECT Descripcion FROM Materiales,Entregan WHERE fecha BETWEEN 31-12-1999 AND 01-01-2001


SELECT Denominacion,Fecha,Cantidad,P.Numero FROM Proyectos P,Entregan E WHERE P.Numero = E.Numero  ORDER BY Fecha DESC


SELECT * FROM Materiales where Descripcion LIKE 'Si%'


DECLARE @foo varchar(40); 
DECLARE @bar varchar(40); 
SET @foo = '¿Que resultado'; 
SET @bar = ' ¿¿¿??? ' 
SET @foo += ' obtienes?'; 
PRINT @foo + @bar; 


SELECT RFC FROM Entregan WHERE RFC LIKE '[A-D]%'; 
SELECT RFC FROM Entregan WHERE RFC LIKE '[^A]%'; 
SELECT Numero FROM Entregan WHERE Numero LIKE '___6'; 



SELECT RFC,Cantidad, Fecha,Numero 
FROM [Entregan] 
WHERE [Numero] Between 5000 and 5010 AND 
Exists ( SELECT [RFC] 
FROM [Proveedores] 
WHERE RazonSocial LIKE 'La%' and [Entregan].[RFC] = [Proveedores].[RFC] ) 




SELECT RFC,Cantidad, Fecha,Numero 
FROM [Entregan] 
WHERE (Numero Between 5000 and 5010) AND RFC IN(SELECT RFC FROM Proveedores WHERE RazonSocial LIKE 'La%' and [Entregan].[RFC] = [Proveedores].[RFC] ) 


SELECT RFC,Cantidad, Fecha,Numero 
FROM [Entregan] 
WHERE (Numero Between 5000 and 5010) AND RFC NOT IN(SELECT RFC FROM Proveedores WHERE RazonSocial NOT LIKE 'La%' and [Entregan].[RFC] = [Proveedores].[RFC] ) 


