ex 1:
SELECT * FROM fournis 
WHERE numfou = 9120;

ex 2:
SELECT * FROM vente 
WHERE codart IS NOT NULL;

ex 3:
SELECT COUNT(delliv), 
COUNT(DISTINCT(numfou)) AS nombre_livraison_passe FROM vente;


ex 4:
SELECT * FROM produit 
WHERE stkphy <= stkale AND qteann < 1000;


ex 5:
SELECT nomfou FROM fournis 
WHERE SUBSTRING(posfou,1,2) IN ('75','78','92','77');

ex 10:
SELECT nomfou, numcom, datcom 
FROM entcom, fournis;

ex 11:
select  p.libart, e.numcom, e.obscom
from ligcom as l join produit as p on l.codart=p.codart
join entcom as e on l.numcom=e.numcom
where e.obscom like '%urgent%';

ex 13:
#1 /* differente maniere de faire le script: #1, #2 #3 */
select numfou from entcom 
where numcom='70210';

#2
select numcom, numfou 
from entcom 
where numfou in (select numfou from entcom 
where numcom='70210' );

#3
select numcom, e.numfou 
from entcom as e join (select numfou from entcom 
where numcom='70210' ) as four on e.numfou=four.numfou

ex 19:
select e.numcom,sum(qtecde* priuni) 
as prixht,sum(qtecde* priuni) *1.20 as prixttc 
from entcom as e
join ligcom as l on e.numcom=l.numcom
where year(datcom)=2018;

ex 15:
SELECT numfou, stkale 
FROM fournis, produit 
WHERE stkale <= 150;
