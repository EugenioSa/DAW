BULK INSERT a1701996.a1701996.[Entregan]
   FROM 'e:\wwwroot\a1701996\entregan.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n',
		 SET DATEFORMAT dmy
      )