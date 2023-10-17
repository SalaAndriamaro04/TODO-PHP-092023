<?php
include('config/app.php');
include('html/header.php');
include('fct/item.php');

//--Vérification de l'existence de nom du fichier
if(!file_exists(FILE_NAME)){
  file_put_contents(FILE_NAME, serialize([]));
}

?>

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Formulaire d'ajout-->
                <form action="addItem.php" method='POST'>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="intitule">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-info btn-flat">+</button>
                    </span>
                  </div>
                </form>
                <!-- Liste -->
                <ul class="todo-list " data-widget="todo-list">
                <?=
                  $items = getItems(); 
                  
                  foreach ($items as $item) {
                    echo displayItem($item);
                  }
                 // echo "Debug Output: " . var_dump($items);
                  
                ?>
                </ul>
              </div>
             
            </div>
          </div>  
        </div>

<?php
include('html/footer.php');
?>
