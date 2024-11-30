<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Inicial</title>
	<link rel="stylesheet" href="Zcss\style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<header>
	<img src="" alt="logo">
	
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="gerenciamento/produtos.php">Produtos</a></li>
			<li><a href="$">Fornecedores</a></li>
			<li><a href="$">Categorias</a></li>
		</ul>
	</nav>

	
	<div class="admin-btn">
		<a href="adminastracao/usuarios.php" class="btn btn-light">
			<img src="admin_icon.png" alt="Ícone de Admin">
			<div class="admin-text">Área de Admin</div>
		</a>
	</div>
</header>

<main>
	<img src="" alt="Gráfico Icon"> <h2>Página Inicial</h2>
    <h6>Visão geral do Controle de Estoque</h6>
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <p class="card-text">4 produtos cadastrados</p>
                    <p class="card-text">19 itens disponíveis no estoque</p>
					<p class="card-text"></p>
                    <hr>
                    <a href="#" class="card-link">Exibir relação de produtos</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <p class="card-text">2 produtos fora de estoque</p>
                    <p class="card-text">Previsão de reposição: 10/12/2024</p>
					<p class="card-text"></p>
                    <hr>
                    <a href="#" class="card-link">Exibir produtos estoque zero</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <p class="card-text">1 produto operando com estoque mínimo</p>
                    <p class="card-text">5 itens no estoque</p>
					<p class="card-text"></p>
                    <hr>
                    <a href="#" class="card-link">Ver relação de produtos</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <p class="card-text">Investimento total: R$ 5.994,00</p>
                    <p class="card-text">Retorno esperado: R$ 8.675,00</p>
                    <p class="card-text">Atualizado: 21/11/2024</p>
                    <hr>
                    <a href="#" class="card-link">Ver relação de produtos</a>
                </div>
            </div>
        </div>
    </div>

    <div class="graficos">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Entradas e Saídas dos Últimos 10 dias</h5>
                    </div>
                    <img src="grafico1.png" class="card-img-bottom" alt="Gráfico 1">
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vendas x Compras (2024-2025)</h5>
                    </div>
                    <img src="grafico2.png" class="card-img-bottom" alt="Gráfico 2">
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>&copy; Autores: Alvaro Sáteles, Davi Souza, Eduardo e Gabriel Minelli</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-7esjka9K78dDZYyNSgq7+AYM2gA1jk++z2eZmVkcpoLfVh8eTzYJXoZzCq6V6am6" crossorigin="anonymous"></script>
</body>
</html>