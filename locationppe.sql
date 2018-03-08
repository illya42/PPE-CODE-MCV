DROP DATABASE IF EXISTS locationppe;

CREATE DATABASE IF NOT EXISTS locationppe;
USE locationppe;
# -----------------------------------------------------------------------------
#       TABLE : TYPE_INTERVENTION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_INTERVENTION
 (
   CODEI CHAR(32) NOT NULL  ,
   LIBELLEI CHAR(32) NULL  
   , PRIMARY KEY (CODEI) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TYPE_CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_CLIENT
 (
   CODE_TYPEC CHAR(32) NOT NULL  ,
   LIBELLEC CHAR(32) NULL  
   , PRIMARY KEY (CODE_TYPEC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TYPE_MATERIEL
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_MATERIEL
 (
   CODE_TYPEM CHAR(32) NOT NULL  ,
   DESIGNATION CHAR(32) NULL  
   , PRIMARY KEY (CODE_TYPEM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : QUALIFICATION_TECHNICIEN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS QUALIFICATION_TECHNICIEN
 (
   CODE_QUALIFT CHAR(32) NOT NULL  ,
   LIBELLET CHAR(32) NULL  
   , PRIMARY KEY (CODE_QUALIFT) 
 ) 
 comment = "";

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
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INTERVENTION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INTERVENTION_CONTRAT
     ON INTERVENTION (NUMC ASC);

# -----------------------------------------------------------------------------
#       TABLE : PERIODE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERIODE
 (
   NUMP CHAR(32) NOT NULL  ,
   DATE_DEBUT CHAR(32) NULL  ,
   DATE_FIN CHAR(32) NULL  
   , PRIMARY KEY (NUMP) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MATERIEL
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MATERIEL
 (
   NUM_SERIE CHAR(32) NOT NULL  ,
   CODE_TYPEM CHAR(32) NOT NULL  ,
   NOTICE_ENTRETIEN CHAR(32) NULL  
   , PRIMARY KEY (NUM_SERIE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MATERIEL
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MATERIEL_TYPE_MATERIEL
     ON MATERIEL (CODE_TYPEM ASC);

# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLIENT
 (
   IDC CHAR(32) NOT NULL  ,
   CODE_TYPEC CHAR(32) NOT NULL  ,
   MDPC VARCHAR(255) NULL  ,
   MAIL VARCHAR(50) NULL  ,
   NOMC CHAR(32) NULL  ,
   PRENOMC CHAR(32) NULL  ,
   ADRESSEC CHAR(32) NULL  ,
   CPC CHAR(32) NULL  ,
   TELC CHAR(32) NULL  ,
   DATENAISSC DATE NULL  
   , PRIMARY KEY (IDC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CLIENT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CLIENT_TYPE_CLIENT
     ON CLIENT (CODE_TYPEC ASC);

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
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TECHNICIEN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TECHNICIEN
 (
   IDT CHAR(32) NOT NULL  ,
   MDPT VARCHAR(255) NULL  ,
   PRENOMT CHAR(32) NULL  ,
   NOMT CHAR(32) NULL  
   , PRIMARY KEY (IDT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RESERVATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RESERVATION
 (
   NUMR CHAR(32) NOT NULL  ,
   NUMP CHAR(32) NOT NULL  ,
   IDC CHAR(32) NOT NULL  ,
   NUMC CHAR(32) NULL  ,
   ETAT CHAR(32) NULL  ,
   DATER CHAR(32) NULL  
   , PRIMARY KEY (NUMR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE RESERVATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_RESERVATION_PERIODE
     ON RESERVATION (NUMP ASC);

CREATE  INDEX I_FK_RESERVATION_CLIENT
     ON RESERVATION (IDC ASC);

CREATE  INDEX I_FK_RESERVATION_CONTRAT
     ON RESERVATION (NUMC ASC);

# -----------------------------------------------------------------------------
#       TABLE : MOTIVER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MOTIVER
 (
   NUMI CHAR(32) NOT NULL  ,
   CODEI CHAR(32) NOT NULL  
   , PRIMARY KEY (NUMI,CODEI) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MOTIVER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MOTIVER_INTERVENTION
     ON MOTIVER (NUMI ASC);

CREATE  INDEX I_FK_MOTIVER_TYPE_INTERVENTION
     ON MOTIVER (CODEI ASC);

# -----------------------------------------------------------------------------
#       TABLE : CORRESPONDRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CORRESPONDRE
 (
   IDT CHAR(32) NOT NULL  ,
   CODE_QUALIFT CHAR(32) NOT NULL  ,
   LIBELLEQ CHAR(32) NULL  
   , PRIMARY KEY (IDT,CODE_QUALIFT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CORRESPONDRE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CORRESPONDRE_TECHNICIEN
     ON CORRESPONDRE (IDT ASC);

CREATE  INDEX I_FK_CORRESPONDRE_QUALIFICATION_TECHNICIEN
     ON CORRESPONDRE (CODE_QUALIFT ASC);

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
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE OPERER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_OPERER_TECHNICIEN
     ON OPERER (IDT ASC);

CREATE  INDEX I_FK_OPERER_INTERVENTION
     ON OPERER (NUMI ASC);

# -----------------------------------------------------------------------------
#       TABLE : PORTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PORTER
 (
   NUM_SERIE CHAR(32) NOT NULL  ,
   NUMC CHAR(32) NOT NULL  ,
   QUANTITE CHAR(32) NULL  
   , PRIMARY KEY (NUM_SERIE,NUMC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PORTER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PORTER_MATERIEL
     ON PORTER (NUM_SERIE ASC);

CREATE  INDEX I_FK_PORTER_CONTRAT
     ON PORTER (NUMC ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
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
  ADD FOREIGN KEY FK_RESERVATION_CLIENT (IDC)
      REFERENCES CLIENT (IDC) ;


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

