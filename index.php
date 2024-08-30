<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="cabezera">
        <img src="https://www.uabcs.mx/assets/images/tail-assets/logo_uabcs.png" id="logo_uabcs" alt="Logo UABCS">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOQmQb_bRGKMDHSYM6JiZvJGyUM1jdsIsohw&s" id="logo_dasc" alt="Logo DASC">
        <p>FORMULARIO</h1>
    </div>
    <div class="container">
        <form method="post">
            <div class="row">
                <div class="col">
                    <label for="nombreInput" class="form-label">Nombre(s)</label>
                    <input id="nombreInput" class="form-control" type="text" name="nombre" required="" pattern="[a-zA-Z\s]+" placeholder="Ingresa tu nombre(s)"> 
    
                    <label for="apellidoInput" class="form-label">Apellido(s)</label>
                    <input id="apellidoInput" class="form-control" type="text" name="apellido" required="" pattern="[a-zA-Z\s]+" placeholder="Ingresa tu apellido(s)"> 
    
                    <label for="numeroInput" class="form-label">Número telefónico</label>
                    <input id="numeroInput" class="form-control" type="number" name="telefono" required="" placeholder="Ingresa tu número telefónico"> 
    
                    <label for="emailInput" class="form-label">Correo electrónico</label>
                    <input id="emailInput" class="form-control" type="email" name="correo" required="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" placeholder="Ingresa tu correo electrónico"> 
    
                    <label for="pwdInput" class="form-label">Contraseña</label>
                    <input id="pwdInput" class="form-control" type="password" name="pwd" required="" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}"  minlength="8" maxlength="15" placeholder="Ingresa tu contraseña"> 
    
                    <label for="confPwdInput" class="form-label">Confirma tu contraseña</label>
                    <input id="confPwdInput" class="form-control" type="password" name="confPwd" required="" placeholder="Confirma tu contraseña"> 
    
                    <label for="coloniaInput" class="form-label">Colonia</label>
                    <input id="coloniaInput" class="form-control" type="text" name="colonia" required="" pattern="[a-zA-Z0-9\s]+" placeholder="Ingresa tu colonia"> 
    
                    <label for="calleInput" class="form-label">Calle(s)</label>
                    <input id="calleInput" class="form-control" type="text" name="calle" required="" pattern="[a-zA-Z0-9\s]+" placeholder="Ingresa tu calle(s)"> 
    
                    <div class="botones">
                        <button class="btn btn-outline-success" id="registro" name="registro" required="" type="submit">Registrar</button>
                    </div>
                </div>
            </div>
        </form>
        <?php
        include("registrar_Datos.php")
        ?>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>