<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <style>
      body {
        height: 100vh;
      }
      #button{
        display: flex;
        height: 90%;
        align-items:center;
        justify-content:space-around;
      }
      form{
        margin: 20px; 
      }
      button {
          margin-top: 15px;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="index.php">Imobiliária</a>
        </div>
    </nav>
    <form>
        <div class="form-group">
            <label for="Cep">Cep</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="Cep">
        </div>
        <div class="form-group">
            <label for="Rua">Rua</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="Rua">
        </div>
        <div class="form-group">
            <label for="Bairro">Bairro</label>
            <input type="text" class="form-control"id="exampleFormControlInput1" name="Bairro">
        </div>
        <div class="form-group">
            <label for="Cidade">Cidade</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="Cidade">
        </div>
        <div class="form-group">
            <label for="Estado">Estado</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="Estado">
        </div>
        <div class="form-group">
            <label for="Ibge">Ibge</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="Ibge">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</body>
</html>