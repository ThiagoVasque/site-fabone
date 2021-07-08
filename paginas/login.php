<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include ("./navbar.php")?>
   
  <form class="px-3 py-2">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Email</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@dominio.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Senha</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Relembrar
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Conectar</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">Novo por aqui? Cadastre-se</a>
  <a class="dropdown-item" href="#">Esqueceu a senha?</a>
</div>
</body>
</html>