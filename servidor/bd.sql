drop DATABASE if EXISTS lugares;
create DATABASE lugares;
use lugares;
create table lugar(
nombre varchar(50),
lat float,
longi float,
alt int,
tipo int,
nplazas int,
nmesas int);
insert into lugar values('parque1',42.56,-6.6,523,1,0,5);
insert into lugar values('parque2',42.559,-6.605,523,1,0,8);
insert into lugar values('Aparcamieno1', 42.5565,-6.613,523,2,10,0);
insert into lugar values('Aparcamiento2',42.544, -6.606,523,2,15,0);
drop user 'user1'@'localhost';
CREATE USER 'user1'@'localhost';
GRANT SELECT ON lugares.* TO 'user1'@'localhost';
GRANT INSERT ON lugares.* TO 'user1'@'localhost';
GRANT DELETE ON lugares.* TO 'user1'@'localhost';

