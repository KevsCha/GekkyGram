<?php
require 'config.php';
session_start();
if (!isset($_SESSION['welcome_usuario'])) {
    header('location:index.php');
}

$name=$_SESSION['welcome_usuario'];
$id=$_SESSION['id'];
$cont = 0;
$cont2 = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="principal.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@600&family=Dongle:wght@700&family=Montserrat:wght@400;500;600;800&display=swap');
    </style>
    <title>Principal</title>
</head>
<body>
    <header>
        <nav class="nav">
            <div class="div-logo">  
              <img class="logo" src="logo2.png">
            </div>
            <div class="iconos">

                <div class="buscador">
                     <div class="r">
                       <input class="b" type="text" >
                     </div>
                     <img id="lupa" class="lupa" src="lupa.png" alt="">
                </div>
                <a href="#casa"><img  src="casa.png" class="casa" alt=""></a>


               <img class="mensaje icono1" src="usuario1.png" alt="">
               <!-- aqui van los usuario -->
               <div class="containerUsuario">
                  
                  <div class="buscador1"><input type="text" placeholder="Buscar contactos"></div>

                  <div class="item-usuario">
                  <?php
                     $sql=mysqli_query($conect,("SELECT * FROM user "));
                     $query=mysqli_num_rows($sql);
                     if ($query > 0) {
                        while($data = mysqli_fetch_array($sql)){
                           if ($data['id'] != $id) {
                           ?>
                     <div class="usuarios">
                        <div class="portada-usuario">
                           <img class="img2" src="8.jpg" alt="">
                        </div>
                        <div class="dato-usuario">
                           <img src="data::image/jpg;base64,<?php echo base64_encode($data['img']);?>" alt="">
                           <p><?php echo $data['nombre'] ;?></p>
                           <!-- <img class="delet" src="borrar2.png" alt=""> -->
                        </div>
                     </div>
                           <?php
                           }
                        }
                     }
                  ?>
               </div>
            </div>
               <!-- mensajes -->
               <img class="usuario icono1" src="enviar1.png" alt="">
               <img src="exit.png" class="cerrar" alt="">
               <div class="item-mensajes">
                     
               </div>
               <div class="foto">
                    <img class="https://static.wikia.1nocookie.net/doblaje/images/8/86/Bart.png/revision/latest/top-crop/width/360/height/450?cb=20131124215321&path-prefix=es" src="" alt="">
               </div>
            </div>
        </nav>
    </header>


       <section class="portada">
   <?php

      $selec=mysqli_query($conect,("SELECT img FROM user WHERE id='$id'"));
      $row=mysqli_fetch_assoc($selec);

   ?>
        <div class="fondoportada">

        </div>
       </section>
       <div class="datos">
              <div id="casa" class="divfotoPerfil">
              <img class="fotoPerfil" src="data:image/jpg;base64,<?php echo base64_encode($row['img']);?>" alt="">
              </div>
             <div class="nombreperfil">

                 <h2 id="si"><?php echo ucwords($name) ;?></h2>
                 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptatem nam hic ex necessitatibus ad numquam tempora officia minima expedita itaque voluptatibus aperiam obcaecati quo, nostrum nesciunt deleniti cum tenetur.</p>
             </div>
             <div class="boton2">
                  <button class="seguir">Subir</button>
             <div class="cajaDeSubirFoto">
                   <h2>Subir fotos</h2>
                   <img class="x" src="x2.png">

                       <div class="fotoAsubir">
                        <!-- aqui se mostrara la foto que se a subir   -->
                       </div>

                       <form class="for" action="" method="POST" enctype="multipart/form-data">
                           <input type="text" name="titulo">
                           <div class="file-select" id="src-file1" >
                              <input type="file" name="src-file1" aria-label="Archivo">
                           </div>
                           <button class="s" name="subir" type="submit">Subir</button>
                           <?php
                           
                              if (isset($_POST['subir']) && $_FILES['src-file1']['tmp_name'] != "") {
                                 echo 'subio';
                                 $img=addslashes(file_get_contents($_FILES['src-file1']['tmp_name']));
                                 $query=mysqli_query($conect,("INSERT INTO galeria (id,
                                                                                    img) 
                                                                              values('$id',
                                                                                     '$img')"));
                                 print_r($query);

                                 unset($_POST['subir']);
                                 unset($_FILES['src-file1']['tmp_name']);
                              }

                           ?>
                       </form>
             </div>
             <button class="mj">Editar perfil</button>
             <img class="punto" src="mas.png" alt="">
             <div class="itemPuntos">

             </div>
          </div>
       </div>






<!-------------------------- Galeria --------------------------->
      <div class="galeria" id="d">
         <div class="cajaGaleria">
            <?php

               $imgs=mysqli_query($conect,"SELECT img FROM galeria where id ='$id' ");

            ?>
                <?php foreach ($imgs as $rows) { ?>
                <?php $cont++; ?>
                     <div class="container-foto">
                         <a href="<?php echo "#$cont"?>">
                         <img class="fotoGaleria" src="data:image/jpg;base64,<?php echo base64_encode($rows['img']);?>" alt="">
                         </a> 
                         <p class="comentario"> <?php //echo $row["nombre"]?></p>
                     </div>
                <?php } ?>
                
         </div>
      </div>
<!------------------------ eslaider --------------------->
     <?php foreach ($imgs as $rows) { ?>

        <?php $cont2++; ?>
          <article class="box" id="<?php echo "$cont2"?>">
              <a href="#<?php echo "$cont2" - 1?>"><img  class="izq" src="izq.png" alt=""></a>
              <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($rows['img']);?>" alt="">
              <a href="#<?php echo "$cont2" +1 ;?>"><img class="dere" src="dere.png" alt=""></a>
              <a href="#d"><img class="close"  src="x.png" alt=""></a>
          </article>
        <?php } ?> 


    <script src="principal.js"></script>
    <script>
      console.log(mensaje);
      console.log(salir);
    </script>
</body>
</html>