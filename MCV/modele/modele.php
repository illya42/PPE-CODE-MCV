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
     function deleteClientM ($idevenement)
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

        where idevenement = ".$tab['idevenement'].";";

    

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
     function deleteClientM ($idt)
    {
        $con = connexion();
        $requete = "delete from technicien where idt = ".$idt.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdTechnicienM ($idt)
    {
        $con = connexion();
        $requete = "select * from client where idt = ".$idt.";";

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
        idt =     '".$tab['idc'].       "', 
        nomt =           '".$tab['nomt'].             "',
        prenomt =     '".$tab['prenomt'].       "',
        mailt =       '".$tab['mailt'].         "',

        where idt = ".$tab['idt'].";";

    

        mysqli_query($con, $requete);
        deconnexion($con);
    }
