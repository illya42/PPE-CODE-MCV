<?php
//INJECTE LES REQUETE SQL
    
    function connexion()
    {
    $con = mysqli_connect("localhost","root","","location");
    return $con;
    }
    function deconnexion ($con)
    {
        mysqli_close($con);
    }
    
    function selectAllM ($table)
    {
        //on se connecte sur la base de données 
        $con = connexion();
        $requete ="select * from " .$table. ";";

        $resultat = mysqli_query($con,$requete);


        deconnexion($con);
        return $resultat;
    }
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------

    function selectAllClientM ()
    {
        //on se connecte sur la base de données 
        $con = connexion();
        $requete ="select codeC, c.codeT_C, mdpc, mail, nom, prenom, adresse, cp, tel, datenaiss, libelle from client c, type_client t where c.codeT_C = t.codeT_C ;";

        $resultat = mysqli_query($con,$requete);


        deconnexion($con);
        return $resultat;
    }

    function insertClientM ($tab)
    {
        $con = connexion();
        $requete = "insert into client values
            (
            null,
            '".$tab["codeT_C"]."',
            '".$tab["mdpc"]."',
            '".$tab["mail"]."',
            '".$tab["nom"]."',
            '".$tab["prenom"]."',
            '".$tab["adresse"]."',
            '".$tab["cp"]."',
            '".$tab["tel"]."',
            '".$tab["datenaiss"]."'
        );";

        echo $requete;
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteClientM ($codeC)
    {
        $con = connexion();
        $requete = "delete from client where codeC = ".$codeC.";";
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function selectWhereIdClientM ($codeC)
    {
        $con = connexion();
        $requete = "select * from client where codeC = ".$codeC.";";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);
        return $ligne;
    }
     function updateClientM ($tab)
    {
        $con = connexion();
        $requete = 
        "update client
        set
        codeC =         '".$tab['codeC']."',
        codeT_C =       '".$tab["codeT_C"]."',
        mdpc =          '".$tab["mdpc"]."',
        mail =          '".$tab['mail']."',
        nom =           '".$tab['nom']."',
        prenom =        '".$tab['prenom']."',
        adresse =       '".$tab['adresse']."',
        cp =            '".$tab['cp']."',
        tel =           '".$tab['tel']."',
        datenaiss =     '".$tab['datenaiss']."'
        
        where codeC =     '".$tab['codeC']."'
        ;";

        
    
        mysqli_query($con, $requete);
        deconnexion($con);
    }

# -----------------------------------------------------------------------------    
# -----------------------------------------------------------------------------
#       TABLE : TECHNICIEN
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------

    function insertTechnicienM ($tab)
    {
        $con = connexion();
        $requete = "insert into technicien values
            (
            null,
            '".$tab["codeT_T"]."',
            '".$tab["mdp"]."',
            '".$tab["nom"]."',
            '".$tab["prenom"]."',
            '".$tab["mail"]."'
        );";
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteTechnicienM ($codeT)
    {
        $con = connexion();
        $requete = "delete from technicien where codeT = ".$codeT.";";

        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function selectWhereIdTechnicienM ($codeT)
    {
        $con = connexion();
        $requete = "select * from technicien where codeT = ".$codeT.";";

        

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);
        return $ligne;
    }
     function updateTechnicienM ($tab)
    {
        $con = connexion();
        $requete = 
        "update technicien
        set 

        codeT_T =           '".$tab['codeT_T']."',
        mdp =               '".$tab['mdp']."',
        nom =               '".$tab['nom']."',
        prenom =            '".$tab['prenom']."',
        mail =              '".$tab['mail']."'

        where codeT =     '".$tab['codeT']."'
        ;";

        
    
        mysqli_query($con, $requete);
        deconnexion($con);
    }

# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       CONTRAT
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------

    function insertContratM ($tab)
    {
        $con = connexion();
        $requete = "insert into contrat values
            (
            null,
            '".$tab["codeR"]."',
            '".$tab["codeL"]."',
            '".$tab["signature"]."',
            '".$tab["etat"]."'
            );";
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    
     function deleteContratM ($code_contrat)
    {
        $con = connexion();
        $requete = "delete from contrat where code_contrat = ".$code_contrat.";";

        
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdContratM ($code_contrat)
    {
        $con = connexion();
        $requete = "select * from contrat where code_contrat = ".$code_contrat.";";

        

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);
        return $ligne;
    }

     function updateContratM ($tab)
    {
        $con = connexion();
        $requete = 
        "update contrat
        set 
 
        codeR =         '".$tab['codeR']."',
        codeL =         '".$tab['codeL']."',
        signature =     '".$tab['signature']."',
        etat =          '".$tab['etat']."'

        where code_contrat =    '".$tab['code_contrat']."'
        ;";
    
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       TABLE : MATERIEL
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------

    function insertMaterielM ($tab)
    {
        $con = connexion();
        $requete = "insert into materiel values
            (
            null,
            '".$tab["codeT_M"]."',
            '".$tab["nom"]."',
            '".$tab["notice"]."',
            '".$tab["prix"]."',
            '".$tab["poids"]."'

       		);";

        echo $requete;
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }

     function deleteMaterielM ($codeM)
    {
        $con = connexion();
        $requete = "delete from materiel where codeM = ".$codeM.";";
        
        
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdMaterielM ($codeM)
    {
        $con = connexion();
        $requete = "select * from materiel where codeM = ".$codeM.";";

        

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);
        return $ligne;
    }

     function updateMaterielM ($tab)
    {
        $con = connexion();
        $requete = 
        "update materiel
        set 

        codeT_M =                '".$tab['codeT_M']."',
        nom =                    '".$tab['nom']."',
        notice =                 '".$tab['notice']."',
        prix =                   '".$tab['prix']."',
        poids =                  '".$tab['poids']."',

        where codeM =            '".$tab['codeM']."';";
    
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       TABLE : RESERVATION
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------

    function insertReservationM ($tab)
    {
        $con = connexion();
        $requete = "insert into reservation values
            (
            null,
            '".$tab["etat"]."',
            '".$tab["dateD"]."',
            '".$tab["dateF"]."',
            '".$tab["date_retrait"]."',
            '".$tab["date_depot"]."'
       		);";
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteReservationM ($codeR)
    {
        $con = connexion();
        $requete = "delete from reservation where codeR = ".$codeR.";";
        
        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdReservationM ($codeR)
    {
        $con = connexion();
        $requete = "select * from reservation where codeR = ".$codeR.";";

        

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);
        return $ligne;
    }

     function updateReservationM ($tab)
    {
        $con = connexion();
        $requete = 
        "update reservation
        set 

        etat =              '".$tab['etat']."',
        dateD =             '".$tab['dateD']."',
        dateF =             '".$tab['dateF']."',
        date_retrait =      '".$tab['date_retrait']."',
        date_depot =        '".$tab['date_depot']."'

        where codeR =        '".$tab['codeR']."'
        ;";
    
        mysqli_query($con, $requete);
        deconnexion($con);
    }