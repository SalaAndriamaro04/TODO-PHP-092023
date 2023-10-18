<?php
    //--Affichage items 
    function displayItem($key, $item){
        $html =   '<li class="'. 
                    //Test pour activer le css de class 'done' lors du cochage

                    ($item['checked']?'done':' ').
                    '">
                    <!-- checkbox -->
                    <div class="icheck-primary d-inline ml-2">
                    <a href="toogleItem.php?item='.$key.'">';
                    
        if($item['checked']){
                    $html.='<i class="far fa-check-square"> </i>';
                }else{
                    $html.='<i class="far fa-square"> </i>';
                }
        $html.='    </a></div>
                    <!-- todo text -->
                    <span class="text">'.
                    $item['intitule']
                    .'</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                    </div>
                </li>';
        return $html;
    }
    
    //--Récupération items
    function getItems(){
        return unserialize(file_get_contents(FILE_NAME));
    }

    //--Enregistrement modification de checkbox des items
    function saveItems($items){
        return file_put_contents(FILE_NAME, serialize($items));
    }
?>