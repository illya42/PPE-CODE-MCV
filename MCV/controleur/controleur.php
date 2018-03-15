<?php
//SERT A CONTROLER / FAIRE DES VERIFICATIONS

    include("modele/modele.php");

    function selectAllC($table)
    {
        //traitement des données
        if($table == "materiel" || $table == "technicien" || $table == "contrat" || $table == "reservation" || $table == "client")
        {
            $resultat = selectAllM($table);
            return $resultat;
        }
        else
        {
            return null;
        }
    }

//                      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! CLIENT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!                       //

    function insertClientC ($idc)
    {
        insertClientM ($idc);
    }

    function deleteClientC ($idc)
    {
        //verification de l'idClient
        deleteClientM ($idc);
    }

    function selectWhereIdClientC ($idc)
    {
        //verification de l'idClient

        $resultat = selectWhereIdClientM ($idc);
        return $resultat;
    }

    function updateClientC ($tab)
    {
        updateClientM ($tab);
    }

//                      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! NEWS !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!                        //

    function insertNewsC ($tab)
    {
        insertNewsModel($tab);
    }

    function deleteNewsC ($idnews)
    {
        deleteNewsModel ($idnews);
    }

    function selectWhereIdNewsC ($idnews)
    {
        $resultat = selectWhereIdNewsModel ($idnews);
        return $resultat;
    }

    function updateNewsC ($tab)
    {
        updateNewsModel ($tab);
    }

//                      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! TECHNICIEN !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!                     //

    function insertTechnicienC ($tab)
    {
        insertTechnicienM ($tab);
    }

    function deleteTechnicienC ($idt)
    {
        deleteProduitModel ($idt);
    }

    function selectWhereIdTechnicienC ($idt)
    {
        $resultat = selectWhereIdTechnicien ($idt);
        return $resultat;
    }

    function updateTechnicienC ($tab)
    {
        updateTechnicienM ($tab);
    }

//                      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! CONTRAT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!                     //

    function insertContratC ($tab)
    {
        insertContratM ($tab);
    }

    function deleteContratC ($numc)
    {
        deleteMessageModel ($numc);
    }

    function selectWhereIdContratC ($numc)
    {
        $resultat = selectWhereIdContratM ($numc);
        return $resultat;
    }

    function updateContratC ($tab)
    {
        updateContratM ($tab);
    }

    //                      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! MATERIEL !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!                     //

    function insertMaterielC ($tab)
    {
        insertMaterielM ($tab);
    }

    function deleteMaterielC ($num_serie)
    {
        deleteMaterielM ($num_serie);
    }

    function selectWhereIdMaterielC ($num_serie)
    {
        $resultat = selectWhereIdMaterielM ($num_serie);
        return $resultat;
    }

    function updateMaterielC ($tab)
    {
        updateMaterielM ($tab);
    }

    //                      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! RESERVATION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!                     //

    function insertReservationC ($tab)
    {
        insertReservationM ($tab);
    }

    function deleteReservationC ($numr)
    {
        deleteReservationM ($numr);
    }

    function selectWhereIdReservationC ($numr)
    {
        $resultat = selectWhereIdReservationM ($numr);
        return $resultat;
    }

    function updateReservationC ($tab)
    {
        updateReservationM ($tab);
    }
?>