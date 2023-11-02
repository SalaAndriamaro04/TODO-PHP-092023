<?php
include('fct/item.php');
include('config/app.php');
include('fct/request.php');

    $items=getItems();
    $id= get('item');
   
    //foreach($items as $item){
    //    if($item['id']===$id){
            
    //        $item['checked']= !$item['checked'];
    //        var_dump($item);
    //    }
    //}

    $items[$id]['checked'] = !$items[$id]['checked'];
    saveItems($items);

    //--
    //-- Après Traitement de nouvel item
    header('Location:index.php');

?>