drop database location;
create database location;

  use location;


# -----------------------------------------------------------------------------
#       TABLE : TYPE INTERVENTION
# -----------------------------------------------------------------------------

create table type_intervention
  (
    codeT_I int(5) not null auto_increment,
    libelle enum("Maintenance","Installation","Réparation"),
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
   designation enum("Bricolage","Construction","Jardinage"),
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
   prix float(6.2),
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
   libelle enum("Mainteneur","Installateur","Réparateur"),
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
   signature varchar(50),
   etat varchar(50),
   primary key(code_contrat),
   foreign key(codeR) references reservation(codeR)
 );


# -----------------------------------------------------------------------------
#       TABLE : (CONCERNER) MATERIEL <=> RESERVATION
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
#       TABLE : (INTERVENIR) INTERVENTION <=> MATERIEL
# -----------------------------------------------------------------------------

create table intervenir
 (
   codeI int(5) not null,
   codeM int(5) not null,
   primary key(codeI,codeM),
   foreign key(codeI) references intervention(codeI),
   foreign key(codeM) references materiel(codeM)
 );



/* 	INSERT */



/* 	INTERVENTION */

insert into type_intervention values
(null,"Maintenance"),
(null,"Réparation"),
(null,"Installation");

insert into intervention values
(null, 1, 2.30, "RAS", "Fini");

/* 	CLIENT */

insert into type_client values
(null,"Professionnelle"),
(null,"Particulier"),
(null,"Entreprise");

insert into client values
(null,1,"mdp123","a@gmail.com","JEAN","Paul","157 Rue de la Chouette","21000","0652216408","1995-09-08"),
(null,2,"mdp123","b@gmail.com","SKOIZER","Sidney","158 Rue de la Chouette","21000","0621640865","1991-01-03"),
(null,3,"mdp123","c@gmail.com","HULOT","Nicolas","159 Rue de la Chouette","21000","0652216408","1982-09-08");

/* 	MATERIEL */

insert into type_materiel values
(null,"Bricolage"),
(null,"Construction"),
(null,"Jardinage");

insert into materiel values
(null, 2, "Marteau-piqueur", "Attention au bruit", "110.99", "18.4");

/* 	TECHNICIEN */

insert into type_technicien values
(null,"Mainteneur"),
(null,"Réparateur"),
(null,"Installateur");

insert into technicien values
(null, 1, "motdepasse4", "George", "MICHAEL", "gm@gmail.com");

/* 	ETC ... */

insert into reservation values
(null, "OK", 2018-05-24, 2018-08-06, 2018-05-24, 2018-07-30),
(null, "OK", 2018-02-01, 2018-02-26, 2018-02-05, 2018-02-28);

insert into contrat values
(null, 1, "SOPRANO", "Contrat fini");

