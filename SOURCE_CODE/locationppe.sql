DROP DATABASE IF EXISTS locationppe;

CREATE DATABASE IF NOT EXISTS locationppe;
USE locationppe;
# -----------------------------------------------------------------------------
#       TABLE : TYPE INTERVENTION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_INTERVENTION
 (
   CODEI CHAR(32) NOT NULL  ,
   LIBELLEI CHAR(32) NULL,  
   PRIMARY KEY (CODEI) 
 );

# -----------------------------------------------------------------------------
#       TABLE : TYPE CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_CLIENT
 (
   CODE_TYPEC CHAR(32) NOT NULL  ,
   LIBELLEC CHAR(32) NULL  
   , PRIMARY KEY (CODE_TYPEC) 
 );

# -----------------------------------------------------------------------------
#       TABLE : TYPE MATERIEL
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_MATERIEL
 (
   CODE_TYPEM CHAR(32) NOT NULL  ,
   DESIGNATION CHAR(32) NULL  
   , PRIMARY KEY (CODE_TYPEM) 
 );

# -----------------------------------------------------------------------------
#       TABLE : QUALIFICATION TECHNICIEN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS QUALIFICATION_TECHNICIEN
 (
   CODE_QUALIFT CHAR(32) NOT NULL  ,
   LIBELLET CHAR(32) NULL  
   , PRIMARY KEY (CODE_QUALIFT) 
 );

# -----------------------------------------------------------------------------
#       TABLE : INTERVENTION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INTERVENTION
 (
   NUMI CHAR(32) NOT NULL  ,
   NUMC CHAR(32) NOT NULL  ,
   PERIODE TIME NULL  ,
   COMMENTAIRE CHAR(32) NULL  ,
   ETAT CHAR(32) NULL  
   , PRIMARY KEY (NUMI) 
 );


# -----------------------------------------------------------------------------
#       TABLE : PERIODE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERIODE
 (
   NUMP CHAR(32) NOT NULL  ,
   DATE_DEBUT CHAR(32) NULL  ,
   DATE_FIN CHAR(32) NULL  
   , PRIMARY KEY (NUMP) 
 );

# -----------------------------------------------------------------------------
#       TABLE : MATERIEL
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MATERIEL
 (
   NUM_SERIE CHAR(32) NOT NULL  ,
   CODE_TYPEM CHAR(32) NOT NULL  ,
   NOTICE_ENTRETIEN CHAR(32) NULL  
   , PRIMARY KEY (NUM_SERIE) 
 );



# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLIENT
 (
   IDC int(32) NOT NULL auto_increment  ,
   CODE_TYPEC CHAR(32) NOT NULL  ,
   MDPC VARCHAR(255) NULL  ,
   MAIL VARCHAR(50) NULL  ,
   NOMC CHAR(32) NULL  ,
   PRENOMC CHAR(32) NULL  ,
   ADRESSEC VARCHAR(100) NULL  ,
   CPC CHAR(32) NULL  ,
   TELC int(32) NULL  ,
   DATENAISSC DATE NULL,  
   PRIMARY KEY (IDC) 
 );



# -----------------------------------------------------------------------------
#       TABLE : CONTRAT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONTRAT
 (
   NUMC CHAR(32) NOT NULL  ,
   DATE_DEBUT CHAR(32) NULL  ,
   DATE_FIN CHAR(32) NULL  ,
   SIGNATURE CHAR(32) NULL  ,
   ETAT CHAR(32) NULL  
   , PRIMARY KEY (NUMC) 
 );

# -----------------------------------------------------------------------------
#       TABLE : TECHNICIEN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TECHNICIEN
 (
   IDT CHAR(32) NOT NULL  ,
   PSEUDOT CHAR(32)  NULL ,
   MDPT VARCHAR(255) NULL  ,
   PRENOMT CHAR(32) NULL  ,
   NOMT CHAR(32) NULL  
   , PRIMARY KEY (IDT) 
 );

# -----------------------------------------------------------------------------
#       TABLE : RESERVATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RESERVATION
 (
   NUMR CHAR(32) NOT NULL  ,
   NUMP CHAR(32) NOT NULL  ,
   idc CHAR(32) NOT NULL  ,
   NUMC CHAR(32) NULL  ,
   ETAT CHAR(32) NULL  ,
   DATER CHAR(32) NULL  
   , PRIMARY KEY (NUMR) 
 );



# -----------------------------------------------------------------------------
#       TABLE : MOTIVER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MOTIVER
 (
   NUMI CHAR(32) NOT NULL  ,
   CODEI CHAR(32) NOT NULL  
   , PRIMARY KEY (NUMI,CODEI) 
 );



# -----------------------------------------------------------------------------
#       TABLE : CORRESPONDRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CORRESPONDRE
 (
   IDT CHAR(32) NOT NULL  ,
   CODE_QUALIFT CHAR(32) NOT NULL  ,
   LIBELLEQ CHAR(32) NULL  
   , PRIMARY KEY (IDT,CODE_QUALIFT) 
 );



# -----------------------------------------------------------------------------
#       TABLE : OPERER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS OPERER
 (
   IDT CHAR(32) NOT NULL  ,
   NUMI CHAR(32) NOT NULL  ,
   DATE_DEBUT CHAR(32) NULL  ,
   DATE_FIN CHAR(32) NULL  
   , PRIMARY KEY (IDT,NUMI) 
 );


# -----------------------------------------------------------------------------
#       TABLE : PORTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PORTER
 (
   NUM_SERIE CHAR(32) NOT NULL  ,
   NUMC CHAR(32) NOT NULL  ,
   QUANTITE CHAR(32) NULL  
   , PRIMARY KEY (NUM_SERIE,NUMC) 
 );


# -----------------------------------------------------------------------------
#       FOREIGN KEY
# -----------------------------------------------------------------------------


ALTER TABLE INTERVENTION 
  ADD FOREIGN KEY FK_INTERVENTION_CONTRAT (NUMC)
      REFERENCES CONTRAT (NUMC) ;


ALTER TABLE MATERIEL 
  ADD FOREIGN KEY FK_MATERIEL_TYPE_MATERIEL (CODE_TYPEM)
      REFERENCES TYPE_MATERIEL (CODE_TYPEM) ;


ALTER TABLE CLIENT 
  ADD FOREIGN KEY FK_CLIENT_TYPE_CLIENT (CODE_TYPEC)
      REFERENCES TYPE_CLIENT (CODE_TYPEC) ;


ALTER TABLE RESERVATION 
  ADD FOREIGN KEY FK_RESERVATION_PERIODE (NUMP)
      REFERENCES PERIODE (NUMP) ;


ALTER TABLE RESERVATION 
  ADD FOREIGN KEY FK_RESERVATION_CLIENT (idc)
      REFERENCES CLIENT (idc) ;


ALTER TABLE RESERVATION 
  ADD FOREIGN KEY FK_RESERVATION_CONTRAT (NUMC)
      REFERENCES CONTRAT (NUMC) ;


ALTER TABLE MOTIVER 
  ADD FOREIGN KEY FK_MOTIVER_INTERVENTION (NUMI)
      REFERENCES INTERVENTION (NUMI) ;


ALTER TABLE MOTIVER 
  ADD FOREIGN KEY FK_MOTIVER_TYPE_INTERVENTION (CODEI)
      REFERENCES TYPE_INTERVENTION (CODEI) ;


ALTER TABLE CORRESPONDRE 
  ADD FOREIGN KEY FK_CORRESPONDRE_TECHNICIEN (IDT)
      REFERENCES TECHNICIEN (IDT) ;


ALTER TABLE CORRESPONDRE 
  ADD FOREIGN KEY FK_CORRESPONDRE_QUALIFICATION_TECHNICIEN (CODE_QUALIFT)
      REFERENCES QUALIFICATION_TECHNICIEN (CODE_QUALIFT) ;


ALTER TABLE OPERER 
  ADD FOREIGN KEY FK_OPERER_TECHNICIEN (IDT)
      REFERENCES TECHNICIEN (IDT) ;


ALTER TABLE OPERER 
  ADD FOREIGN KEY FK_OPERER_INTERVENTION (NUMI)
      REFERENCES INTERVENTION (NUMI) ;


ALTER TABLE PORTER 
  ADD FOREIGN KEY FK_PORTER_MATERIEL (NUM_SERIE)
      REFERENCES MATERIEL (NUM_SERIE) ;


ALTER TABLE PORTER 
  ADD FOREIGN KEY FK_PORTER_CONTRAT (NUMC)
      REFERENCES CONTRAT (NUMC) ;

insert into TYPE_CLIENT values
(1,"Particulier"),
(2,"Professionnelle");

insert into CLIENT values
(null,2,"motdepasse1","jean655@hotmail.com","dupont","jean-mouloud","17 rue des Behenes","93120","0105648212","1994-08-01"),
(null,2,"motdepasse2","massala111@hotmail.com","ouandjli","jean-massala","17 rue des Gazelles","75002","0105648512","2000-08-01"),
(null,2,"motdepasse3","jm_soprano@hotmail.com","soprano","michel","1 place de Renault","75018","0105748212","1991-08-01");

insert into TYPE_MATERIEL values
(1, "Bricolage"),
(2, "Construction"),
(3, "Jardinage");

insert into MATERIEL values
(1, 1, "FRAGILE");