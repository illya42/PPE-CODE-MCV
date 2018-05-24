
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
   codeT int(5) not null,
   duree time,
   commentaire varchar(100),
   etat varchar(50),
   primary key(codeI),
   foreign key(codeT_I) references type_intervention(codeT_I),
   foreign key(codeT) references technicien(codeT)
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
   codeL int(5) not null,
   primary key(codeI,codeL),
   foreign key(codeI) references intervention(codeI),
   foreign key(codeL) references location(codeL)
 );



/*  INSERT */



/*  INTERVENTION */

insert into type_intervention values
(null,"Maintenance"),
(null,"Réparation"),
(null,"Installation");

insert into intervention values
(null, 1, "2.30.00", "RAS", "Fini"),
(null, 2, "0.30.00", "Manque outil adéquat", "Fini"),
(null, 3, "1:00:00", "Moins de temps que prévu", "Fini"),
(null, 2, "00:10:00", "Remplacement du matériel du client par un neuf", "Fini"),
(null, 1, "5:15:00", "Changement de pièce sur l'engin", "Fini"),
(null, 3, "1:00:00", "RAS", "Fini"),
(null, 1, "00:00:00", "En Cours", "En Cours");

/*  CLIENT */

insert into type_client values
(null,"Professionnelle"),
(null,"Particulier"),
(null,"Entreprise");

insert into client values
(null,1,"mdp123","a@gmail.com","JEAN","Paul","157 Rue de la Chouette","21000","0652216408","1995-09-08"),
(null,2,"mdp132","b@gmail.com","SKOIZER","Sidney","158 Rue de la Chouette","21000","0621640865","1991-01-03"),
(null,3,"mdp321","c@gmail.com","HULOT","Nicolas","159 Rue de la Chouette","21000","0652216408","1982-09-08"),
(null,2,"mdp231","d@gmail.com", "MORETI","Remy","34 Rue de la Marche","75016", "0654287689", "1975-03-12");

/*  MATERIEL */

insert into type_materiel values
(null,"Bricolage"),
(null,"Engin de chantier"),
(null,"Jardinage");

insert into materiel values
(null, 1, "Marteau-piqueur", "Puissance : 1700W - Force de Frappe : 60 joules - Livré en coffret métallique avec 2 burins - Grantie de 3 ans", "149.99e", "16kg"),
(null, 3, "Tuyau d'arrosage nu", "Résistant aux UV : oui - Matière du tuyau : PVC - Garantie : 30 ans - Longueur : 50m - Diamètre intérieur : 18.5mm - Diamètre extérieur : 23mm","74.99e","11.062 kg"),
(null, 2, "Pelleteuse", "Profondeur d'excavation max : 6.20m - Energie : Diesel - Hauteur : 3.01m - Longeur : 9.42m - Largeur : 2.98m - Pour le creusement de tranchées, les travaux de démolition, le remblaiement, les travaux lourds", "1220e/j","22t"),
(null, 2, "Bétonnière", "Energie : Electrique - Capacité : 160l" - "Matière principale : Acier - Usage : petit chantier", "229.00e", "46kg"),
(null, 2, "Brouette de chantier", "Matière principale : Acier - Diamètre roue : 400mm - châssis formant pare-choc - Garantie : 2 ans : Contenance : 100l/200kg", "55e", "10kg"),
(null, 3, "Brouette Jardinage", "Matière principale : résine - Dimension : L.111xl68.5xh.60cm - Garantie : 1an", "39.95e", "12kg");

/*  TECHNICIEN */

insert into type_technicien values
(null,"Mainteneur"),
(null,"Réparateur"),
(null,"Installateur");

insert into technicien values
(null, 1, "motdepasse4", "George", "MICHAEL", "gm@gmail.com"),
(null, 2, "motdepasse3", "Charles", "DUPONT", "cd@gmail.com"),
(null, 3, "motde passe2", "Henri", "DUROI", "hdr@gmail.com"),
(null, 2, "motdepasse1", "Ahmed", "BENALI", "aba@gmial.com");

/*  ETC ... */

insert into reservation values
(null, "OK", "2018-05-24", "2018-08-06", "2018-05-24", null),
(null, "Impossible", "2018-02-01", "2018-02-26", null, null);

insert into contrat values
(null, "2015-01-03", "2015-06-21", "SOPRANO", "Contrat fini");
