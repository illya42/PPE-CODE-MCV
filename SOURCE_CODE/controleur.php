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

    function insertClientC ($IDC)
    {
        insertClientM ($IDC);
    }

    function deleteClientC ($IDC)
    {
        
        deleteClientM ($IDC);
    }

    function selectWhereIdClientC ($IDC)
    {
        
        $resultat = selectWhereIdClientM ($IDC);
        return $resultat;
    }

    function updateClientC ($tab)
    {
        updateClientM ($tab);
    }

//                      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! TECHNICIEN !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!                     //

    function insertTechnicienC ($tab)
    {
        insertTechnicienM ($tab);
    }

    function deleteTechnicienC ($IDT)
    {
        deleteProduitModel ($IDT);
    }

    function selectWhereIdTechnicienC ($IDT)
    {
        $resultat = selectWhereIdTechnicienM ($IDT);
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

    function deleteContratC ($NUMC)
    {
        deleteMessageModel ($NUMC);
    }

    function selectWhereIdContratC ($NUMC)
    {
        $resultat = selectWhereIdContratM ($NUMC);
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

    function deleteMaterielC ($NUM_SERIE)
    {
        deleteMaterielM ($NUM_SERIE);
    }

    function selectWhereIdMaterielC ($NUM_SERIE)
    {
        $resultat = selectWhereIdMaterielM ($NUM_SERIE);
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

    function deleteReservationC ($NUMR)
    {
        deleteReservationM ($NUMR);
    }

    function selectWhereIdReservationC ($NUMR)
    {
        $resultat = selectWhereIdReservationM ($NUMR);
        return $resultat;
    }

    function updateReservationC ($tab)
    {
        updateReservationM ($tab);
    }
?>