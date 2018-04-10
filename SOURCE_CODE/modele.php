<?php
//INJECTE LES REQUETE SQL
    function connexion()
    {
    $con = mysqli_connect("localhost","root","","locationppe");
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

        echo $requete;

        deconnexion($con);
        return $resultat;
    }
    ////////////////////////////////////////////////////
    function insertClientM ($tab)
    {
        $con = connexion();
        $requete = "insert into client values
            (
            null,
            '".$tab["CODE_TYPEC"]."',
            '".$tab["MDPC"]."',
            '".$tab["NOMC"]."',
            '".$tab["PRENOMC"]."',
            '".$tab["MAIL"]."',
            '".$tab["ADRESSEC"]."',
            '".$tab["DATENAISSC"]."',
            '".$tab["TELC"]."',
            '".$tab["CPC"]."'
        );";

        echo $requete;
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteClientM ($IDC)
    {
        $con = connexion();
        $requete = "delete from client where IDC = ".$IDC.";";

        
        
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function selectWhereIdClientM ($IDC)
    {
        $con = connexion();
        $requete = "select * from client where IDC = ".$IDC.";";

        

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
        IDC =           '".$tab['IDC']."', 
        NOMC =          '".$tab['NOMC']."',
        PRENOMC =       '".$tab['PRENOMC']."',
        MAIL =          '".$tab['MAIL']."',
        ADRESSEC =      '".$tab['ADRESSEC']."',
        DATENAISSC =    '".$tab['DATENAISSC']."',
        TELC =          '".$tab['TELC']."',
        CPC =           '".$tab['CPC']."'
        where IDC =     '".$tab['IDC']."'
        ;";

        
    
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    function insertTechnicienM ($tab)
    {
        $con = connexion();
        $requete = "insert into technicien values
            (
            null,
            '".$tab["IDT"]."',
            '".$tab["MDPT"]."',
            '".$tab["NOMT"]."',
            '".$tab["PRENOMT"]."',
            '".$tab["MAILT"]."'
        );";
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteTechnicienM ($IDT)
    {
        $con = connexion();
        $requete = "delete from technicien where IDT = ".$IDT.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function selectWhereIdTechnicienM ($IDT)
    {
        $con = connexion();
        $requete = "select * from technicien where IDT = ".$IDT.";";

        

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
        IDT =           '".$tab['IDT'].       "', 
        NOMT =          '".$tab['NOMT'].             "',
        PRENOMT =       '".$tab['PRENOMT'].       "',
        MAILT =         '".$tab['MAILT'].         "'
        where IDT =     '".$tab['IDT']."'
        ;";

        
    
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    function insertContratM ($tab)
    {
        $con = connexion();
        $requete = "insert into contrat values
            (
            null,
            '".$tab["NUMC"]."',
            '".$tab["DATE_DEBUT"]."',
            '".$tab["DATE_FIN"]."',
            '".$tab["SIGNATURE"]."',
            '".$tab["ETAT"]."'
            );";
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    
     function deleteContratM ($NUMC)
    {
        $con = connexion();
        $requete = "delete from contrat where NUMC = ".$NUMC.";";

        
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdContratM ($NUMC)
    {
        $con = connexion();
        $requete = "select * from contrat where NUMC = ".$NUMC.";";

        

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
        NUMC =          '".$tab['NUMC']."', 
        DATE_DEBUT =    '".$tab['DATE_DEBUT']."',
        DATE_FIN =      '".$tab['DATE_FIN']."',
        SIGNATURE =     '".$tab['SIGNATURE']."',
        ETAT =          '".$tab['ETAT']."'
        where NUMC =    '".$tab['NUMC']."'
        ;";
    
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
    ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    function insertMaterielM ($tab)
    {
        $con = connexion();
        $requete = "insert into materiel values
            (
            null,
            '".$tab["NUM_SERIE"]."',
            '".$tab["CODE_TYPEM"]."',
            '".$tab["NOMM"]."',
            '".$tab["NOTICE_ENTRETIEN"]."',
            '".$tab["PRIX_JOUR"]."',
            '".$tab["POIDS"]."'

       		);";
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }

     function deleteMaterielM ($NUM_SERIE)
    {
        $con = connexion();
        $requete = "delete from materiel where NUM_SERIE = ".$NUM_SERIE.";";
        
        
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdMaterielM ($NUM_SERIE)
    {
        $con = connexion();
        $requete = "select * from materiel where NUM_SERIE = ".$NUM_SERIE.";";

        

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
        NUM_SERIE =                 '".$tab['NUM_SERIE']."',
        CODE_TYPEM =                '".$tab['CODE_TYPEM']."',
        NOMM =                      '".$tab['NOMM']."',
        NOTICE_ENTRETIEN =          '".$tab['NOTICE_ENTRETIEN']."',
        PRIX_JOUR =                 '".$tab['PRIX_JOUR']."'
        where NUM_SERIE =           '".$tab['NUM_SERIE']."';";
    
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
    ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    function insertReservationM ($tab)
    {
        $con = connexion();
        $requete = "insert into reservation values
            (
            null,
            '".$tab["NUMR"]."',
            '".$tab["ETAT"]."',
            '".$tab["DATER"]."'
       		);";
        
        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteReservationM ($NUMR)
    {
        $con = connexion();
        $requete = "delete from reservation where NUMR = ".$NUMR.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdReservationM ($NUMR)
    {
        $con = connexion();
        $requete = "select * from reservation where NUMR = ".$NUMR.";";

        

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
        NUMR =              '".$tab['NUMR']."', 
        ETAT =              '".$tab['ETAT']."',
        DATER =             '".$tab['DATER']."'
        where NUMR =        '".$tab['NUMR']."'
        ;";
    
        mysqli_query($con, $requete);
        deconnexion($con);
    }