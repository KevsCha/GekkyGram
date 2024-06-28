<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <nav class="nav">
           <img src="img/logotransparente.png" class="logo" alt="">
            <div class="iconos">
                    <div class="buscador">
                        <input class="b" type="text" >
                        <img id="lupa" class="lupa" src="img/lupa.png" alt="">
                    </div>
                        <img class="mensaje icono1" src="img/usuario1.png" alt="">

               <!-- aqui van los usuario -->
               <div class="item-usuario">
                     <h2>Contactos</h2>
                     <div class="buscador1"><input type="text" placeholder="Buscar contactos"></div>
                     <div class="usuarios"><img src="img/usuario6.png" alt=""><p>marck sukenber</p><img class="delet" src="borrar2.png" alt=""></div>
                     <div class="usuarios"><img src="img/usuario6.png" alt=""><p>marck sukenber</p><img class="delet" src="borrar2.png" alt=""></div>
                     <div class="usuarios"><img src="img/usuario6.png" alt=""><p>marck sukenber</p><img class="delet" src="borrar2.png" alt=""></div>
                     <div class="usuarios"><img src="img/usuario6.png" alt=""><p>marck sukenber</p><img class="delet" src="borrar2.png" alt=""></div>
                     <div class="usuarios"><img src="img/usuario6.png" alt=""><p>marck sukenber</p><img class="delet" src="borrar2.png" alt=""></div>
                     <div class="usuarios"><img src="img/usuario6.png" alt=""><p>marck sukenber</p><img class="delet" src="borrar2.png" alt=""></div>
                     <div class="usuarios"><img src="img/usuario6.png" alt=""><p>marck sukenber</p><img class="delet" src="borrar2.png" alt=""></div>
                     <div class="usuarios"><img src="img/usuario6.png" alt=""><p>marck sukenber</p><img class="delet" src="borrar2.png" alt=""></div>
               </div>
               
               <!-- mensajes -->
               <img class="usuario icono1" src="img/enviar1.png" alt="">
               <div class="item-mensajes">
                     
            </div>
               <div class="foto">
                    <img class="https://static.wikia.1nocookie.net/doblaje/images/8/86/Bart.png/revision/latest/top-crop/width/360/height/450?cb=20131124215321&path-prefix=es" src="" alt="">
               </div>
            </div>
        </nav>
</header>
    <form action="">
            <div class="contEdit2" id="slide-in-top">
                        <p class="titlEdit">Editar perfil</p>
                        <p class="subtitlEdit">Foto de perfil</p>
                        <div class="divfotoPerfil">
                                <img class="fotoPerfil" src="https://aprendiendoaprogramar.es/wp-content/uploads/2021/11/Historia-de-CSS-El-programador-loco.jpeg" alt="">
                        </div>
                        <div class="image-upload">
                                <label for="file-inputPerfil">
                                    <img src="img/editar.png" alt="editar " class="editingbutton" title="Subir imagen">
                                </label>
                                <input id="file-inputPerfil" type="file" accept="image/*">
                        </div>
            </div>
                        <div class="contEdit" id="slide-in-top">
                            <div class="divfotoportada">
                                <p class="subtitlEditlong">Foto de Portada</p>
                                <img src="img/portada.jpg" alt="portada" class="fotoportada">
                                <!-- <input type="image" src="img/lapiz.png" class="editingbuttonlong" name="editPort"> -->
                                    <div class="image-upload">
                                        <label for="file-input">
                                            <img src="img/lapiz.png" alt="editar" 
                                            class="editingbuttonlong" title="Subir Imagen">
                                        </label>
                                        <input id="file-input" type="file" accept="image/*">
                                    </div>
                            </div>
                        </div>
                                    <div class="contEdit" id="slide-in-top">
                                        <div class="editname">
                                            <p class="subtitlEditName">Nombre</p>
                                            <input class="editName" type="text" placeholder="Editar nombre" name="nombre">
                                        </div>
                                    </div>
                                        <div class="contEdit" id="slide-in-top">
                                            <div class="correo">
                                                <p class="subtitlEditName">Correo</p>
                                                <input class="editName" type="text" placeholder="Editar correo" name="correo">
                                            </div>
                                        </div>
                                        <div class="contEdit" id="slide-in-top">
                                            <p class="subtitlEdittitle">Descripción</p>
                                            <textarea class="textarea" name="textarea" rows="10" cols="50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis dolore. Tempora iste ab animi officia incidunt eius quidem impedit?</textarea>
                                        </div>
                                        <button class="mj2" for="">Guardar cambios</button>
    </form>
<script src="java.js"></script>
</body>
</html>