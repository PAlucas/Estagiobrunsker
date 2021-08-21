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
        div{
            display: block;
        }
      body {
        height: 100vh;
      }
      #button{
        display: flex;
        height: 90%;
        align-items:center;
        justify-content:space-around;
      }
      body #cards{
          display: flex;
      }
    </style>
</head>
<body>
<?php
    $pesquisa = $_POST['busca'] ?? '';
    include "processa.php";

    $sql = "SELECT * FROM imobiliaria WHERE cidade LIKE '%$pesquisa'";

    $dados = mysqli_query($connect, $sql);
    $dado = mysqli_fetch_array($dados);

    ?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand mb-0 h1" href="index.php">Imobiliária</a>
    <form class="d-flex" action="imoveis.php" method="POST">
          <input class="form-control me-2" type="search" placeholder="Cidade" aria-label="Search" name="busca" autofocus>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
  </div>

</nav>
    <div class="container-fluid" id="cards">
        <?php 
        echo"oi";
            //$dado = mysqli_fetch_array($dados);
            while($linha = mysqli_fetch_array($dados)){
                
                $img = $linha['arquivo'];
                $cep = $linha['cep'];
                $rua = $linha['rua'];
                $bairro = $linha['bairro'];
                $cidade = $linha['cidade'];
                $estado = $linha['estado'];
                $ibge = $linha['ibge'];
                $data = $linha['data'];
                echo "        <div class='card m-5' style='width: 18rem;'>
                                <img class='card-img-top' src='update/$img' alt='Card image cap'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$rua</h5>
                                    <p class='card-text'>$bairro</p>
                                    <p class='card-text'>$cidade</p>
                                    <p class='card-text'>$estado</p>
                                    <p class='card-text'>$cep</p>
                                    <p class='card-text'>$ibge</p>
                                    <p class='card-text'>$data</p>
                                </div>
                               </div>
            ";
            }
        ?>
    </div>
</body>
</html>
