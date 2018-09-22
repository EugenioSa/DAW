BULK INSERT a1701996.a1701996.[Proyectos]
   FROM 'e:\wwwroot\a1701996\proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )