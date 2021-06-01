<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="./estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <form action="Respuesta.php" method="GET">


        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control"  name="nombres">
        </div>

        <div class="form-group">
            <label for="nombres">Apellidos</label>
            <input type="text" class="form-control" name="apellidos">
        </div>

        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Curso</label>
                    <select class="custom-select mr-sm-2" name="curso">
                        <option selected>Elije...</option>
                        <option value="6">6°</option>
                        <option value="7">7°</option>
                        <option value="8">8°</option>
                        <option value="9">9°</option>
                        <option value="10">10°</option>
                        <option value="11">11°</option>
                    </select>

            </div>
        </div>

        <div class="form-group">
            <label for="nombres">Edad</label>
            <input type="number" class="form-control" name="edad">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="contraseña">
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

    


  <script src="./javascript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  

</body>
</html>