<?php
include('fct/item.php');
include('config/app.php');
include('fct/request.php');

    $items=getItems();
    $id= get('item');
   

    unset($items[$id]);
    saveItems($items);

    //--
    //-- Après Traitement de nouvel item
    header('Location:index.php')

?>