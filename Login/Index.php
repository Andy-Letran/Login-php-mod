<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script>

function inputs(evt){

  if (window.event) {
    keynum = evt.keycode;
  }else{

    keynum = evt.which;

  }

  if((keynum > 47 && keynum < 58) || (keynum > 64 && keynum < 123)
  || keynum == 8 || keynum == 130 || (keynum > 159 && keynum < 164)){
    return true;
  }else{
    alert("No se permite el igreso de caracteres especiales");
    return false;
  }

}

    </script>  


    <title>log</title>
  </head>
  <body style=" background-color:black;">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    



    <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Login</a>
    </div>
  </nav>
</div>

<div class="card" style="width: 18rem; margin-top: 250px; margin-left: 500px; ">
  <div class="card-body text-center">
    <h3 class="card-title">Login</h3>
        <form action="validar.php" method="post">
          <br>
          <input type="text" placeholder="Ingrese su usuario" class="form-control mx-auto" name="usuario" style="width:200px;"Required>
          <br>
          <input type="password" placeholder="Ingrese su contraseña" class="form-control mx-auto" name="contraseña" style="width:200px;"Required>
         <br>
          <div class="rounded mx-auto d-block">
          <input type="submit" class="btn btn-secondary rounded mx-auto d-block" value="Ingresar" style="width:100px;"Required>
          </div>
          </form>

          </div>
</div>

<br>
<br>
<br>
<br>

  </body>
</html>