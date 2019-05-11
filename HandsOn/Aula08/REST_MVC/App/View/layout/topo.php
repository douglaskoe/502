<header class="header">
<html dir="ltr" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Trabalhando com Postgres</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/style.css">
              <!-- Le styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

            <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>
<body>

<div class="container">
 <?php if(isset($_SESSION['nome'])): ?>
  <h3>Usuário Logado: <?= $_SESSION['nome'] ?></h3>
 <?php endif; ?>
	<nav class="right">
		<ul>
		     <li><a href="/produtos/listar">Listar Produtos</a></li>
		     <li><a href="/produtos/inserir">Novo Produto</a></li>
		     <li><a href="index.php?controller=usuarios&action=sair">Sair</a></li>
		</ul>
	</nav>
</div>
</header>
