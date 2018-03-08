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
