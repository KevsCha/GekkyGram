<?php
include("conectar.php");
if(isset($_POST["subir"])){

     $imagen = $_FILES["src-file1"]["name"]; 
     $nombre = $_POST["titulo"];

     if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES["src-file1"]["type"];
        $temp = $_FILES["src-file1"]["tmp_name"];

        if(!(strpos($tipo,"gif") || strpos($tipo,"jpeg") || strpos($tipo,"webp"))){
            $_SESSION["mensaje"] = "solo se permite formato jpg gif";
            header("location:../principal.php");
        } else{
            $query = "INSERT INTO imagenes(imagen,nombre) 
                                  values('$imagen','$nombre')";

            $resultado = mysqli_query($conectar,$query);

                if($resultado){
                    move_uploaded_file($temp,"imagenes/".$imagen);
                    $_SESSION["mensaje"] = "se a subido correctamente";
                } else{
                    $_SESSION["mensaje"] = "error en el servidor";
                }
            
            }
        }
     }


?>