<?php
// receber o arquivo da imagem
$imagem = $_FILES["imagem"];
$tmp = $imagem["tmp_name"];
$dir = "arq/".$imagem["name"];

if($imagem["error"] == 0){

    if(move_uploaded_file($tmp,$dir)){
        echo "Arquivo cadastrado com Sucesso!";
    }
}else{
    echo "erro de upload";
}
?>