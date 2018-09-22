BULK INSERT a1701996.a1701996.[Proveedores]
   FROM 'e:\wwwroot\a1701996\proveedores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )