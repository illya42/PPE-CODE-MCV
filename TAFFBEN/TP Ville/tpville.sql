drop database tpville;
create database tpville;
  use tpville;

create table ville
  (
    idV int(6) not null auto_increment,
    designation varchar(50),
    nbHab int(12),
    primary key (idV)
  ); 

  create table RDV
    (
      id int(3) not null auto_increment,
      nom varchar(15),
      prenom varchar(15),
      ville enum('Paris', 'Bruxelles', 'Strasbourg', 'Toulouse', 'Bordeaux', 'Vaucresson', 'Rouen',
        'Deauville', 'Mulhouse', '^Persan'),
      primary key (id)
      );

  insert into ville values
  	(null, "Paris", 12532901),
  	(null, "Bruxelles", 1192243),
  	(null, "Strasbourg", 271782),
  	(null, "Toulouse", 441802),
  	(null, "Bordeaux", 239157),
  	(null, "Vaucresson", 8670),
  	(null, "Rouen", 110933),
  	(null, "Deauville", 4364),
  	(null, "Mulhouse", 109588),
  	(null, "Persan", 10250);
