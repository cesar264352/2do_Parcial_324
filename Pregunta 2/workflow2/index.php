<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INscripcion CEI</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-warning">

<div class="row justify-content-md-center">
	<form class="col-md-3 card p-5 mt-5" action="controlindex.php" method="GET">
      
      <h1 class="h3 mb-3 text-center text-primary">INGRESAR</h1>

      <label>Usuario:</label>
      <input type="text" name="usuario" value="" class="form-control" required>

      <label>Contraseña:</label>
      <input type="password" name="contrasenia" value="" class="form-control" required>
      <br>
      <input type="submit" name="Aceptar" value="Aceptar" class="btn btn-primary">
  	  
    </form>
</div>
</body>
</html>