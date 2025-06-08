<?php

if(isset($_POST['boton'])){
        $mensaje = "";
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $correo = $_POST['correo'];
        $edad = $_POST['edad'];
        $contraseña = $_POST['contraseña'];

       
        if(empty($nombre)){
            echo "<p id = 'error'>Ingrese su nombre </p> ";
        }else{
        if(strlen($nombre) > 15){
            echo "<p id = 'error'>Nombre muy largo </p> ";
        }
        }
      
        if(empty($correo)){
            echo "<p id = 'error'>Ingrese su correo</p> ";
        }else{
            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                echo "<p id = 'error'>El correo es incorrecto</p> ";
            }
        }
        if(!is_numeric($numero)){
            echo "<p id = 'error'>Ingrese un numero de telefono</p> ";
        }else{
            if(strlen($numero) > 10 || strlen($numero) < 10){
                echo "<p id = 'error'>El numero es de 10 digitos</p> ";
            }
        }
        if(!is_numeric($edad) || empty($edad)){
            echo "<p id = 'error'>La edad debe ser numerica</p> ";
        }else{
            if($edad > 100 || 0 > $edad){
                echo "<p id = 'error'>Edad Invalida</p> ";
            }
        }
        if(empty($contraseña)){
            echo  "<p id = 'error'>Ingrese una contraseña</p> ";
        }else{
            if(strlen($contraseña) > 8 || 0 > strlen($contraseña)){
                echo "<p id = 'error'>Minimo 8 caracteres</p> ";
            }
        }
        if(empty($nombre) || empty($edad) || empty($numero) || empty($correo)||empty($contraseña)){
           
        }else{
            $array = array($nombre,$edad,$numero,$correo,$contraseña);
            echo "
            <h1>Los datos:</h1>
           
            <div class = 'tabla' id = 'tablaDatos'> 
                <input type='text' name='nombre' value=' $nombre' id ='txtNombre2' disabled = 'none' >
                <br>
                <br>            
                <input type='text' name='edad'  value=' $edad' id ='txtEdad2' disabled = 'none' >    
                <br>          
                <br>
                <input type='text' name='numero'  value=' $numero'  id ='txtNumero2' disabled = 'none'>      
                <br>           
                <br>
                <input type='text' name='correo' value=' $correo' id ='txtCorreo2' disabled = 'none'>    
                <br>          
                <br>
                <input type='text' name='contraseña' value=' $contraseña ' id ='txtContraseña2' disabled = 'none'> 
                <br>
            </div>";
        }
    }
?>