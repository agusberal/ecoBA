<?php


    if(!empty($_POST["ingresar"])){
        if(!empty($_POST["usuario"]) and !empty($_POST["contraseña"])){
            $user=$_POST["usuario"];
            $clave=$_POST["contraseña"];
            $sql=$ruta->query("SELECT * FROM usuarios WHERE user='$user' and contraseña='$clave'");
            if($verificamos=$sql->fetch_object()){
                header("Location:Views/pages/inicio.php");
                echo "nashe";   
            }
            else{
                echo "no tienes cuenta";
            }
        }
        else{
           
            echo "debe ingresar usuario y/o contraseña";
        }
    }
    else{
        echo "algo esta mal enviado";
    }
?>