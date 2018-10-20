drop database tpville;
create database tpville;
  use tpville;

create table ville
  (
    idV int(6) not null,
    designation varchar(50),
    nbHab int(12),
    primary key (idV)
  ); 

  create table RDV
    (
      id int(3) not null auto_increment,
      nom varchar(15),
      prenom varchar(15),
      primary key (id)
      )

  insert into ville values
  	(1, "Paris", 12532901),
  	(2, "Bruxelles", 1192243),
  	(3, "Strasbourg", 271782),
  	(4, "Toulouse", 441802),
  	(5, "Bordeaux", 239157),
  	(6, "Vaucresson", 8670),
  	(7, "Rouen", 110933),
  	(8, "Deauville", 4364),
  	(9, "Mulhouse", 109588),
  	(10, "Persan", 10250);
