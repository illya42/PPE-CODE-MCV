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
            '".$tab["idc"]."',
            '".$tab["nomc"]."',
            '".$tab["prenomc"]."',
            '".$tab["pseudo"]."',
            '".$tab["mail"]."',
            '".$tab["adressec"]."',
            '".$tab["datenaissc"]."',
            '".$tab["telc"]."',
            '".$tab["cpc"]."'
        );";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteClientM ($idc)
    {
        $con = connexion();
        $requete = "delete from client where idc = ".$idc.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdClientM ($idc)
    {
        $con = connexion();
        $requete = "select * from client where idc = ".$idc.";";

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
        idc =     '".$tab['idc'].       "', 
        nomc =           '".$tab['nomc'].             "',
        prenomc =     '".$tab['prenomc'].       "',
        pseudo =       '".$tab['pseudo'].         "',
        mail =       '".$tab['mail'].         "',
        adressec =   '".$tab['adressec'].     "',
        datenaissc =      '".$tab['datenaissc']."',
        telc =   '".$tab['telc'].     "',
        cpc =   '".$tab['cpc'].     "'

        where idc = ".$tab['idc'].";";

    

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
            '".$tab["idt"]."',
            '".$tab["nomt"]."',
            '".$tab["prenomt"]."',
            '".$tab["mailt"]."'
        );";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteTechnicienM ($idt)
    {
        $con = connexion();
        $requete = "delete from technicien where idt = ".$idt.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdTechnicienM ($idt)
    {
        $con = connexion();
        $requete = "select * from technicien where idt = ".$idt.";";

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
        idt =     '".$tab['idt'].       "', 
        nomt =           '".$tab['nomt'].             "',
        prenomt =     '".$tab['prenomt'].       "',
        mailt =       '".$tab['mailt'].         "',

        where idt = ".$tab['idt'].";";

    

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
            '".$tab["numc"]."',
            '".$tab["date_debut"]."',
            '".$tab["date_fin"]."',
            '".$tab["signature"]."',
            '".$tab["etat"]."'
        );";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteContratM ($numc)
    {
        $con = connexion();
        $requete = "delete from contrat where numc = ".$numc.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdContratM ($numc)
    {
        $con = connexion();
        $requete = "select * from client where numc = ".$numc.";";

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
        numc =     '".$tab['idc'].       "', 
        date_debut =           '".$tab['date_debut'].             "',
        date_fin =     '".$tab['date_fin'].       "',
        signature =       '".$tab['signature'].         "',
        etat =       '".$tab['etat'].         "',

        where numc = ".$tab['numc'].";";

    

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
            '".$tab["num_serie"]."',
            '".$tab["notice_entretien"]."'
       		);";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteMaterielM ($num_serie)
    {
        $con = connexion();
        $requete = "delete from materiel where num_serie = ".$num_serie.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdMaterielM ($num_serie)
    {
        $con = connexion();
        $requete = "select * from materiel where num_serie = ".$num_serie.";";

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
        num_serie =     '".$tab['num_serie'].       "', 
        notice_entretien =           '".$tab['notice_entretien'].             "'

        where num_serie = ".$tab['num_serie'].";";

    

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
            '".$tab["numr"]."',
            '".$tab["etat"]."',
            '".$tab["dater"]."'
       		);";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
     function deleteReservationM ($numr)
    {
        $con = connexion();
        $requete = "delete from reservation where numr = ".$numr.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdReservationM ($numr)
    {
        $con = connexion();
        $requete = "select * from reservation where numr = ".$numr.";";

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
        numr =     '".$tab['numr'].       "', 
        etat =           '".$tab['etat'].             "',
        dater =           '".$tab['dater'].             "'

        where numr = ".$tab['numr'].";";

    

        mysqli_query($con, $requete);
        deconnexion($con);
    }
