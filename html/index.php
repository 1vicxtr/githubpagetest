<?php
    if(isset($_POST['boton'])){
        $mensaje = "";
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $correo = $_POST['correo'];
        $edad = $_POST['edad'];
        $contraseña = $_POST['contraseña'];
    }
   

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="src/css/img/fav.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <script>

        window.onload = addEventListener("DOMContentLoaded",function(){        
            var btnEnviar = document.getElementById("btnEnviar"); 
            if(document.getElementById("tablaDatos") == null){
                document.getElementById("btnEliminar").style.display = "none";
                document.getElementById("btnModificar").style.display = "none";
                document.getElementById("btnInsertar").style.display = "none";
            }else{    
                btnEnviar.style.display = "none";
                document.getElementById("btnEliminar").style.display = "inline";
                document.getElementById("btnModificar").style.display = "inline";
                document.getElementById("btnInsertar").style.display = "inline";
            }
                
        });
        function mostrarDatos(){
            var txtNombre = document.getElementById("txtNombre");
            var txtEdad= document.getElementById("txtEdad");
            var txtCorreo= document.getElementById("txtCorreo");
            var txtNumero= document.getElementById("txtNumero");
            var txtContraseña= document.getElementById("txtContraseña");

            var txtNombre2 = document.getElementById("txtNombre2");
            var txtEdad2= document.getElementById("txtEdad2");
            var txtCorreo2= document.getElementById("txtCorreo2");
            var txtNumero2= document.getElementById("txtNumero2");
            var txtContraseña2= document.getElementById("txtContraseña2");
            txtNombre2.value = txtNombre.value;
            txtEdad2.value = txtEdad.value;
            txtCorreo2.value =txtCorreo.value;
            txtNumero2.value = txtNumero.value;
            txtContraseña2.value = txtContraseña.value;
        }
    </script>
    <style>
    form{
       
        box-shadow:0 0 20px rgba(0, 0, 0, 0.2);
        padding: 50px 35px;
        border-radius: 25px;
        text-align: center;
        margin: auto;
        width: 700px;
       
        position: relative;
        /*border: 2.5px solid;
        margin: auto;
        backdrop-filter: blur(120px);*/
       
        h1{
            text-align: center;
        }
        .botones{
            margin:15px;
            .btn{
                border-radius: 10px;
                padding: 10px;
                background: linear-gradient(
                    90deg,
                    rgba(10, 43, 231, 1) 25%,
                    rgba(61, 1, 245, 1) 100%);
                box-shadow: 0 0 20px rgba(192, 203, 251, 0.7);
                color: #FFFFFF;
                text-transform: uppercase;
                font-size: 14px;
                cursor: pointer;
                transition: 1s;
            }
            .btn:hover{
                background: rgb(153, 47, 252);
            }
            /*display: inline;*/
            a{
                
                text-decoration: none;
            }
        }
    }
    .form-input{
        margin: 25px;
    }
    input{
        color: #0D0D0D;
        padding: 10px 7.5px 10px 20px;
        border-radius: 15px;
        border: 0px;
        box-shadow: 0 0 20px rgba(192, 203, 251, 0.7);
        outline: none;
        font-size: 16px;
        color: black;
    }
    label{
        font-weight: 600;
    }
    #error{
       color: red;
       font-weight: 900;
    }
    #error::before{
        content: " - ";
    }
    .tabla{
        width: 500px;
       margin:auto;
    }
    </style>
    <title>Registro</title>
</head>
<body id="form">
    <div>

    <form  action="<?php echo
    htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
        <h1>Registrarse</h1>             
            <label for="">Ingrese su nombre: <input type="text" name="nombre"  id ="txtNombre" value="<?php  if(isset($nombre)) echo$nombre?>"> <img class="input-icon" src="src/images-php/name.svg" alt=""></label>  
            <br>
            <br>
            <label for=""> Ingrese su Edad: <input maxlength="2" type="number" name="edad"  id ="txtEdad" value="<?php  if(isset($edad)) echo$edad?>"><img class="input-icon" src="src/images-php/name.svg"> </label> 
            <br>
            <br>
            <label for="">Ingrese su numero de telefono: <input maxlength="10" type="tel" name="numero"  id ="txtNumero" value="<?php  if(isset($numero)) echo$numero?>">  <img class="input-icon" src="src/images-php/phone.svg"> </label> 
            <br>
            <br>
            <label for="">Ingrese su correo: <input type="email" name="correo" id ="txtCorreo" value="<?php  if(isset($correo)) echo$correo?>"> <img class="input-icon" src="src/images-php/email.svg"> </label>
            <br>
            <br>
            <label for="">Ingrese su contraseña: <input type="password" maxlength="8" name="contraseña"  id ="txtContraseña" value="<?php  if(isset($contraseña)) echo$contraseña?>"> <img src="src/images-php/password.svg"></label>

            <div class="botones">
                <button class="btn" name="boton" id="btnEnviar" type="submit">Enviar</button>
                <a href="../index.html" class="btn">Regresar</a>
                <button type='submit' class='btn' id="btnInsertar" name = 'botonInsertar'>Insertar</button>
                <button type='button' class='btn' id="btnModificar" name = 'botonModificar' onclick = "mostrarDatos()" >Modificar</button>
                <button type='submit' class='btn' id="btnEliminar" name = 'botonEliminar'>Eliminar</button> 
            </div>
        <?php
        include("validar-form.php");
       if(isset($_POST['botonInsertar'])){
            echo "
            <script> 
                 alert('Insertado correctamente');
            </script>
            ";
        }
        if(isset($_POST['botonModificar'])){
            echo "
            <script> 
                alert('Modificado Correctamente');
             </script>";
        }
        if(isset($_POST['botonEliminar'])){
            echo "
            <script>          
                 alert('Eliminado correctamente');
             </script>
            ";
        }
        ?>
    </form>
        
    </div>
</body>
</html>