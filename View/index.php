
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Pizza Hut">
	<meta name="google-site-verification" content="TgCEW-bPDcUs7EQBikITQe03ToCN5iV_J9gKIYgM4vw" />
	<link href="http://www.pizzahut-ab.com.br/application/content/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<title>Pizza Hut</title>
	<link href="http://www.pizzahut-ab.com.br/application/content/css/bootstrap.css" rel="stylesheet" />
	<link href="http://www.pizzahut-ab.com.br/application/content/css/styles.css" rel="stylesheet" />
	<link href="http://www.pizzahut-ab.com.br/application/content/css/fonts.css" rel="stylesheet" />
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="http://www.pizzahut-ab.com.br/application/content/js/html5shiv.js"></script>
		<script src="http://www.pizzahut-ab.com.br/application/content/js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="http://www.pizzahut-ab.com.br/application/content/css/pagina/inicio.css" media="screen" />
	<script src="http://www.pizzahut-ab.com.br/application/content/js/jquery.js"></script>
	<script src="http://www.pizzahut-ab.com.br/application/content/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
	$(function(){
		setCustomLineSize();
        
        $('#trabalhe').click(function(e){
            e.preventDefault();
            $(this).addClass('hide');
            $('#trabalhe-links').removeClass('hide');
        });
        
        $('.trabalhe').click(function(){
            setTimeout(function(){
                $('#trabalhe-links').addClass('hide');
                $('#trabalhe').removeClass('hide');
            }, 1000);
        });
	});

	$(window).resize(function(){
		setCustomLineSize();
	});

	function setCustomLineSize(){
		var $line = $line ? $line : $('.navbar #custom-line:visible');
		var $prev = $prev ? $prev : $line.prevAll('.container');
		$line.width($prev.offset().left);
	}
	</script>
</head>
<body>
	<div id="wrap">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container relative-position">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://www.pizzahut-ab.com.br/">
						<span class="nome-logo">Pizza Hut</span>
						<img src="http://www.pizzahut-ab.com.br/application/content/images/logo.png" alt="logo"/>
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="http://www.pizzahut-ab.com.br/index.php/home/index">Início</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cardápio <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="http://www.pizzahut-ab.com.br/index.php/cardapio/entradas">Entradas</a></li>
								<li><a href="http://www.pizzahut-ab.com.br/index.php/cardapio/saladas">Saladas</a></li>
								<li><a href="http://www.pizzahut-ab.com.br/index.php/cardapio/pastas">Pastas</a></li>
								<li><a href="http://www.pizzahut-ab.com.br/index.php/cardapio/variedades">Variedades</a></li>
								<li><a href="http://www.pizzahut-ab.com.br/index.php/cardapio/pizzas">Pizzas</a></li>
								<li><a href="http://www.pizzahut-ab.com.br/index.php/cardapio/sobremesas">Sobremesas</a></li>
								<li><a href="http://www.pizzahut-ab.com.br/index.php/cardapio/bebidas">Bebidas</a></li>
							</ul>
						</li>
						<li>
							<a href="http://www.pizzahut-ab.com.br/index.php/home/promocoes">Promoções</a>
						</li>
						<li>
							<a href="http://www.pizzahut-ab.com.br/index.php/home/lojas">Lojas</a>
						</li>
						<li>
                            <a href="http://pedido.pizzahut-ab.com.br">Delivery</a>
                        </li>
					</ul>
				</div>
			</div>
			<hr id="custom-line"/>
		</div>
		
<div id="carousel-main" class="carousel slide">
    <ol class="carousel-indicators">
                    <li data-target="#carousel-main" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-main" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-main" data-slide-to="2" class=""></li>
                                <li data-target="#carousel-main" data-slide-to="3" class=""></li>
                        </ol>

        <div class="carousel-inner">
                    <div class="item active">
	            <img src="http://www.pizzahut-ab.com.br/application/content/images/slide/slider_01.jpg" title="Amantes de Mignon" alt="slide" class="img-responsive hidden-xs" />
                <img src="http://www.pizzahut-ab.com.br/application/content/images/slide/slider_01_mob.jpg" title="" alt="slide" class="img-responsive visible-xs" />
            </div>
                                <div class="item ">
	            <img src="http://www.pizzahut-ab.com.br/application/content/images/slide/slider_07.jpg" title="" alt="slide" class="img-responsive hidden-xs" />
                <img src="http://www.pizzahut-ab.com.br/application/content/images/slide/slider_03_mob.jpg" title="" alt="slide" class="img-responsive visible-xs" />
            </div>
                                <div class="item ">
	            <img src="http://www.pizzahut-ab.com.br/application/content/images/slide/slider_04.jpg" title="" alt="slide" class="img-responsive hidden-xs" />
                <img src="http://www.pizzahut-ab.com.br/application/content/images/slide/slider_04_mob.jpg" title="" alt="slide" class="img-responsive visible-xs" />
            </div>
                                <div class="item ">
	            <img src="http://www.pizzahut-ab.com.br/application/content/images/slide/slider_05.jpg" title="" alt="slide" class="img-responsive hidden-xs" />
                <img src="http://www.pizzahut-ab.com.br/application/content/images/slide/slider_05_mob.jpg" title="" alt="slide" class="img-responsive visible-xs" />
            </div>
                        </div>

    <a class="left carousel-control" href="#carousel-main" data-slide="prev">
	    <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#carousel-main" data-slide="next">
	    <span class="icon-next"></span>
    </a>
    </div>

<div class="container" id="submenu">
	<div class="row">
		<div class="col-md-3 clearfix column">
			<div class="box box-a">
				<img src="http://www.pizzahut-ab.com.br/application/content/images/cardapio-submenu.png" />
                <div class="descricao">
                    <p>Conheça todas as delícias de nosso cardápio.</p>
					<a href="http://www.pizzahut-ab.com.br/index.php/cardapio/pizzas" class="btn btn-custom">Acesse</a>
                </div>
			</div>
		</div>
		<div class="col-md-4 clearfix column">
			<div class="box box-b">
				<img src="http://www.pizzahut-ab.com.br/application/content/images/pizza-submenu.png" />
                <div class="descricao">
                    <p>Promoções para deixar você ainda mais apaixonado.</p>
					<a href="http://www.pizzahut-ab.com.br/index.php/home/promocoes" class="btn btn-custom">Acesse</a>
                </div>
			</div>
		</div>
		<div class="col-md-5 clearfix column">
			<div class="box box-c">
				<img src="http://www.pizzahut-ab.com.br/application/content/images/lojas-submenu.png" />
                <div class="descricao">
                    <p>Entre em contato com a loja mais próxima de você.</p>
					<a href="http://www.pizzahut-ab.com.br/index.php/home/lojas" class="btn btn-custom">Acesse</a>
                </div>
			</div>
		</div>
	</div>
</div>

<script type='text/javascript'>
    $(function(){
        $('#carousel-main').carousel({
             interval: 5000
         })
    });
</script>
	</div>
	<div id="footer">
		<div class="container clearfix">
			<p class="text-muted pull-left creditos">Desenvolvido por <a href="http://www.emxeque.com.br" target="_blank"><img src="http://www.pizzahut-ab.com.br/application/content/images/logo-xeque.png" alt="logo xeque" title="Xeque criação comunicativa" /></a></p>
			<p class="text-muted pull-right">
                <span class="hide" id="trabalhe-links">
                    <a href="mailto:luiz@pizzahut-ab.com.br?Subject=Quero%20trabalhar%20no%20Pizza%20Hut%20Campo%20Grande" class="trabalhe">Campo Grande</a> • 
                    <a href="mailto:foz@pizzahut-ab.com.br?Subject=Quero%20trabalhar%20no%20Pizza%20Hut%20Cascavel" class="trabalhe">Cascavel</a> • 
                    <a href="mailto:ederfoz@pizzahut-ab.com.br?Subject=Quero%20trabalhar%20no%20Pizza%20Hut%20Foz%20do%20Iguaçu" class="trabalhe">Foz do Iguaçu</a> • 
                    <a href="mailto:londrina@pizzahut-ab.com.br?Subject=Quero%20trabalhar%20no%20Pizza%20Hut%20Londrina" class="trabalhe">Londrina</a> • 
                    <a href="mailto:maringa@pizzahut-ab.com.br?Subject=Quero%20trabalhar%20no%20Pizza%20Hut%20Maringá" class="trabalhe">Maringá</a>
                </span>
                <a href="#" id="trabalhe">Trabalhe conosco</a> | 
                <a href="http://www.pizzahut-ab.com.br/application/content/tabela-nutricional.pdf" target="_blank">Tabela nutricional</a> | 
                <a href="http://www.facebook.com/pizzahutbrasil" target="_blank"><img src="http://www.pizzahut-ab.com.br/application/content/images/logo-facebook.png" alt="facebook"/></a> 
                <a href="http://www.pizzahut.com.br/" target="_blank">Pizza Hut Brasil</a></p>
		</div>
	</div>
</body>
</html>