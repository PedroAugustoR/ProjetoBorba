<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Na Palma</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
<style> 
            p {
                font-size: 12px; 
            }
          
            body {
                color: #000000;
                background: #FFFFFF;
                font-weight: bold; /*ponto-e-vírgula é facultativo */
            }
            .navblack{
                background-color:#000000 !important;
            }
            h1{
                font-weight: bold; /*ponto-e-vírgula é facultativo */
            }

</style>

<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Na Palma</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Relatórios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="grafico_colunas.php">Gráfico Colunas</a></li>
            <li><a class="dropdown-item" href="grafico_pizza.php">Gráfico Pizza</a></li>
            <li><a class="dropdown-item" href="relatorio_de_indices.php">Relatório Padrão</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Suporte
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">ChatBot</a></li>
            <li><a class="dropdown-item" href="duvidas_frequentes.php">Dúvidas Frequentes</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="index.php">Sair</a>
      </div>
  </div>
</nav>
<br>
<div class="container card" style="width: 18rem;">
  <img src="images/redes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Conecte-se com as redes.</h5>
    <p class="card-text">Para obter os gráficos e relatórios, conecte com suas redes.</p>
        <label>
            <a href="#" class="btn btn-primary">Facebook</a>
        </label>
    <br>
    <a href="#" class="btn btn-primary">Instagram</a>
  </div>
</div>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021-2021 Company NaPalma</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>
  

</body>

</html>