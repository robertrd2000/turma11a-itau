<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="estilo.css">
  <script type="text/javascript" src="logingerente.js"></script>
  <title>Login de Gerentes</title>
</head>

<body>

  <div class="container">
    <br>
    <div class="row">
      <div class="col-12">
        <b>
          <h3 style="text-align: left;"> Sistema de Agendamento </h3>
        </b>
      </div>

    </div>
    <br>
    <div class="form-row">
      <div class="col-8">
        <b><label for="inputAddress">Usuário</label></b>
        <input type="text" class="form-control" id="txtemail" placeholder="Digite seu RACF ou email">
      </div>
    </div>

    <div class="form-row">
      <div class="col-8">
        <b><label for="inputAddress">Senha</label></b>
        <input type="text" class="form-control" id="txtsenha" placeholder="Digite sua senha">
      </div>
    </div>
    <br>
    <button onclick="logar()" type="button" class="btn btn-info">Logar </button>

  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>
