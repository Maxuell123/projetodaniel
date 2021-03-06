<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <link rel="shortcut icon" href="imges/livro.png" type="image/x-icon">
  <title>Tela de Login</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Bem Vindo</h5>
            <form class="form-signin" action="logar.php" method="post">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="usuario" required placeholder="usuario">
                <label for="inputEmail">usuario</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="senha" required placeholder="senha">
                <label for="inputPassword">Senha</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Logar</button>
              <hr class="my-4">
              <a  class="btn btn-success" class="butao" href="caduser.php">Criar nova conta</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>