<?php
    include('config/app.php');
    include('fct/request.php');
    include('fct/item.php');

    //--
//--Récupération de la valeur entrée

    $intitule=post('intitule');
    //--
//--Sérialisation pour le stockage de donnée dans un fichier, comme .txt
    //--Récupération de la valeur entrée "intitule"
    $items = getItems();
    $items[]= [
        'cheked' => false,
        'intitule' => $intitule
    ];
    
    file_put_contents(FILE_NAME, serialize($items));


    //--
    //-- Après Traitement nouvel item
    header('Location:index.php')

?>