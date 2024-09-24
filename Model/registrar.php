<?php 
    

     if(!empty($_POST["registrarr"])){
        if(empty($_POST["usuario"]) or empty($_POST["contraseña"]) or empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["dni"])  or empty($_POST["edad"]) or empty($_POST["email"])) { 
          
            echo '<script class=pro>
            Swal.fire({
                title: "Incompleto!",
                text: "Debe Rellenar los Campos para Continuar!",
                icon: "info"
              });
            </script>';
        }

        else{   
            $user=$_POST["usuario"];
            $mail=$_POST["email"];
            $con=$_POST["contraseña"];
            $nom=$_POST["nombre"];
            $ape=$_POST["apellido"];
            $dni=$_POST["dni"];
            $prer=$_POST["edad"];
            
            $sql=$ruta->query("insert into usuarios (dni,nom,ape,email,user,contraseña) values ('$dni','$nom','$ape','$mail','$user','$con')");
            if($sql==1){
                echo '<div class="pro"><script>
                Swal.fire({
                    title: "Producto Registrado!",
                    text: "Se Guardo en la Tabla Productos!",
                    icon: "success"
                  });
                </script></div>';
            }
            else{
                echo '<script>
                Swal.fire({
                    title: "Upss!",
                    text: "No se Guardo el Producto!",
                    icon: "error"
                  });
                </script>';
            }
        }
    }

?>