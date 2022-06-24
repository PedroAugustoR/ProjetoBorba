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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	

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

			h2 {
   			color:#000000;
			} 
			h4 {
			color:#000000;
			}

</style>

<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Na Palma</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="login.php">Entrar</a>
      </div>
  </div>
</nav>
		 <div class="form">
			<div class="form-signin" style="background: #808080;">
				<h2 class="text-center">Faça seu Login!</h2>

				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>


<!-- <main class="form-signin">
<form>
	<br>
    <h1 class="h3 mb-3 fw-normal">Faça seu login!</h1>
    <div class="form-floating">
	<label for="floatingInput">Usuario</label>
      <input type="text" name="usuario" class="form-control" id="floatingInput">
    </div>
    <div class="form-floating">
	<label for="floatingPassword">Senha</label>
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Insira sua senha aqui,">
    </div>
	<br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
  </form>
				</main> -->
				<form method="POST" action="menu_inicial.php">
					<label>Usuário</label>
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>
					
					<label>Senha</label>
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>
					
					<input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">

					<div class="row text-center" style="margin-top: 20px;"> 
						<h4>Você ainda não possui uma conta?</h4>
						<a href="cadastrar.php">Crie grátis</a>
					</div>
					
					
				</form> 
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>