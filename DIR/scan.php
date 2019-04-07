<?php
$imagens = scandir("images");

$dados = array();
foreach ($imagens as $img) {
    if(!in_array($img, array(".",".."))){
        $filename = "images".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s",fileatime($filename));
        $info["url"] = "http://127.0.0.1/EstudoPHP/DIR/". str_replace("\\", DIRECTORY_SEPARATOR, $filename);
        array_push($dados, $info);
    }
}
echo json_encode($dados);