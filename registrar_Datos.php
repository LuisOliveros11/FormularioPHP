<?php
include("conexion_BD.php");

if($conexion){
    echo "TOSDO BIEN";
}else{
    echo "TOSDO mal";
}
    if(isset($_POST['registro'])){
        if(strlen($_POST['nombre']) >= 1 &&
           strlen($_POST['apellido']) >= 1 && 
           strlen($_POST['telefono']) >= 1 &&
           strlen($_POST['correo']) >= 1 &&
           strlen($_POST['pwd']) >= 1 &&
           strlen($_POST['confPwd']) >= 1 &&
           strlen($_POST['colonia']) >= 1 &&
           strlen($_POST['calle']) >= 1){
            if(preg_match("/^[a-zA-Z\s]+$/",$_POST['nombre'])){
                if(preg_match("/^[a-zA-Z\s]+$/",$_POST['apellido'])){
                    if($_POST['pwd'] == $_POST['confPwd']){
                        if(is_numeric($_POST['telefono'])){
                            if(filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){
                                if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/",$_POST['pwd'])){
                                    if(preg_match("/^[a-zA-Z0-9]+$/",$_POST['colonia'])){
                                        if(preg_match("/^[a-zA-Z0-9]+$/",$_POST['calle'])){
                                            $nombre = trim($_POST['nombre']);
                                            $apellido = trim($_POST['apellido']);
                                            $telefono = trim($_POST['telefono']);
                                            $correo = trim($_POST['correo']);
                                            $pwd = md5(trim($_POST['pwd']));
                                            $colonia = trim($_POST['colonia']);
                                            $calle = trim($_POST['calle']);
                                            $sentencia = "INSERT INTO registro(nombre, apellido, telefono, correo, contraseña, colonia, calle) VALUES ('$nombre', '$apellido',
                                                          '$telefono', '$correo', '$pwd', '$colonia', '$calle')";
                                            $insersion = mysqli_query($conexion, $sentencia);
                                            if($insersion){
                                                ?>
                                                <h3 class="exito">Formulado enviado correctamente</h3>
                                                <?php
                                            }else{
                                                ?>
                                                <h3 class="fallo">Error al enviar el formulario</h3>
                                                <?php
                                            }
                                        }else{
                                            ?>
                                            <h3 class="fallo">Error, la calle no admite ese formato</h3>
                                            exit();
                                            <?php
                                        }
                                    }else{
                                        ?>
                                        <h3 class="fallo">Error, la colonia no admite ese formato</h3>
                                        exit();
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <h3 class="fallo">Error, la contraseña no admite ese formato</h3>
                                    exit();
                                    <?php
                                }
                            }else{
                                ?>
                                <h3 class="fallo">Error, el correo electrónico no admite ese formato</h3>
                                exit();
                                <?php
                            }
                        }else{
                            ?>
                            <h3 class="fallo">Error, el teléfono solo admite valores numéricos</h3>
                            exit();
                            <?php
                        }
                    }else{
                        ?>
                        <h3 class="fallo">Error, las contraseñas no coinciden</h3>
                        <?php
                    }
                }else{
                    ?>
                    <h3 class="fallo">Error, el apellido no admite ese formato</h3>
                    exit();
                    <?php
                }
            }else{
                ?>
                <h3 class="fallo">Error, el nombre no admite ese formato</h3>
                exit();
                <?php
            }
           }else{
                ?>
                <h3 class="fallo">Error, todos los campos deben ser llenados</h3>
                <?php
           }
    }


?>