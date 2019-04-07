<?php
spl_autoload_register(function($nameClass){
    $DS = DIRECTORY_SEPARATOR;
    $past = "Classes";
    $fileName =$past.$DS.$nameClass.".php";
    if(file_exists($fileName)){
        include_once ($fileName);
    }
});
 ?>
