drop database location;
create database location;

  use location;


# -----------------------------------------------------------------------------
#       TABLE : TYPE INTERVENTION
# -----------------------------------------------------------------------------

create table type_intervention
  (
    codeT_I int(5) not null auto_increment,
    libelle varchar(100),
    primary key(codeT_I)
  );

# -----------------------------------------------------------------------------
#       TABLE : INTERVENTION
# -----------------------------------------------------------------------------

create table intervention
 (
   codeI int(5) not null auto_increment,
   codeT_I int(5) not null,
   duree time,
   commentaire varchar(100),
   etat varchar(50),
   primary key(codeI),
   foreign key(codeT_I) references type_intervention(codeT_I)
 );

# -----------------------------------------------------------------------------
#       TABLE : TYPE CLIENT
# -----------------------------------------------------------------------------
create table type_client
    (
     codeT_C int(5) not null auto_increment,
     libelle enum("Professionnelle","Particulier","Entreprise"),
     primary key(codeT_C) 
    );

# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------

create table  client
 (
   codeC int(5) not null auto_increment,
   codeT_C int(5) not null,
   mdpc varchar(100),
   mail varchar(50),
   nom varchar(50),
   prenom varchar(50),
   adresse varchar(100),
   cp int(5),
   tel int(10),
   datenaiss date,  
   primary key(codeC),
   foreign key(codeT_C) references type_client(codeT_C)
 );

# -----------------------------------------------------------------------------
#       TABLE : TYPE MATERIEL
# -----------------------------------------------------------------------------

create table type_materiel
 (
   codeT_M int(5) not null auto_increment,
   designation varchar(50),
   primary key(codeT_M) 
 );

# -----------------------------------------------------------------------------
#       TABLE : MATERIEL
# -----------------------------------------------------------------------------

create table materiel
 (
   codeM int(5) not null auto_increment,
   codeT_M int(5) not null,
   nom varchar(25),
   notice varchar(150),
   prix float(5.2),
   poids float(5.2),
   primary key(codeM),
   foreign key(codeT_M) references type_materiel(codeT_M)
 );

# -----------------------------------------------------------------------------
#       TABLE : TYPE TECHNICIEN
# -----------------------------------------------------------------------------

create table type_technicien
 (
   codeT_T int(5) not null auto_increment,
   libelle enum("Maintenance","Installation","Réparation"),
   primary key(codeT_T) 
 );

# -----------------------------------------------------------------------------
#       TABLE : TECHNICIEN
# -----------------------------------------------------------------------------

create table technicien
 (
   codeT int(5) not null auto_increment,
   codeT_T int(5) not null,
   mdp varchar(50),
   nom varchar(25),
   prenom varchar(25),
   mail varchar(50),
   primary key(codeT),
   foreign key(codeT_T) references type_technicien(codeT_T)
 );

# -----------------------------------------------------------------------------
#       TABLE : LOCATION
# -----------------------------------------------------------------------------

create table location
 (
   codeL int(5) not null auto_increment,
   primary key(codeL) 
 );

# -----------------------------------------------------------------------------
#       TABLE : RESERVATION
# -----------------------------------------------------------------------------

create table reservation
 (
   codeR int(5) not null auto_increment,
   etat varchar(50),
   dateD date,
   dateF date,
   date_retrait date,
   date_depot date,
   primary key(codeR) 
 );

# -----------------------------------------------------------------------------
#       TABLE : CONTRAT
# -----------------------------------------------------------------------------

create table contrat
 (
   code_contrat int(5) not null auto_increment,
   codeR int(5) not null,
   codeL int(5) not null,
   signature varchar(50),
   etat varchar(50),
   primary key(code_contrat),
   foreign key(codeR) references reservation(codeR),
   foreign key(codeL) references location(codeL)
 );


# -----------------------------------------------------------------------------
#       TABLE : TYPE_INTERVENTION <=> INTERVENTION
# -----------------------------------------------------------------------------

create table motiver
 (
   codeI int(5) not null,
   codeT_I int(5) not null,
   primary key(codeI,codeT_I),
   foreign key(codeI) references intervention(codeI),
   foreign key(codeT_I) references type_intervention(codeT_I)
 );

# -----------------------------------------------------------------------------
#       TABLE : INTERVENTION <=> LOCATION
# -----------------------------------------------------------------------------

create table intervenir
 (
   codeI int(5) not null,
   codeL int(5) not null,
   primary key(codeI,codeL),
   foreign key(codeI) references intervention(codeI),
   foreign key(codeL) references location(codeL)
 );

/*
insert into type_client values
(1,"Particulier"),
(2,"Professionnelle");

insert into client values
,2,"motdepasse1","jean655@hotmail.com","DUPONT","Jean-Mouloud","17 rue des Behenes","93120","0105648212","1994-08-01"),
,2,"motdepasse2","massala111@hotmail.com","OUALA","Jean-Massala","17 rue des Gazelles","75002","0105648512","2000-08-01"),
,2,"motdepasse3","jm_soprano@hotmail.com","SOPRANO","Michel","1 place de Renault","75018","0105748212","1991-08-01");

insert into type_materiel values
(1, "Bricolage"),
(2, "Construction"),
(3, "Jardinage");

insert into materiel values
(1, 1, "Marteau-piqueur", "Ne pas manger cru", "110,99", "18");

insert into technicien values
(1, "motdepasse4", "George", "MICHAEL", "gm@gmail.com");

insert into contrat values
(1, "2015-01-03", "2015-06-21", "SOPRANO", "Contrat fini");

insert into periode values
(1, "2015-01-03", "2015-06-21");

insert into reservation values
(1, 1, 1, 1, "OK", "2016-01-06"),
(2, 2, 2, 2, "OK", "2016-02-06"),
(3, 3, 3, 3, "OK", "2016-01-06"),
(4, 4, 4, 4, "OK", "2018-02-06"),
(5, 5, 5, 5, "OK", "2018-01-06"),
(6, 6, 6, 6, "OK", "2016-02-06"),
(7, 1, 1, 1, "OK", "2018-01-06");
*/