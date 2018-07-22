<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<link rel="shortcut icon" href="http://novoterralima.com/wp-content/uploads/2017/10/icon_terralima.png">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="/<?=pasta?>/build/lib/bootstrap-4/css/bootstrap.min.css">
		<link rel="stylesheet" href="/<?=pasta?>/build/plugin/fontawesome-5.1/css/all.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="/<?=pasta?>/assets/css/style.css">

		<title>Venda / Locação – Terra Lima Imóveis</title>
	</head>

	<body>
		<?php
			require_once('build/navbar.php');
		?>
		<div class="container-fluid" id="locacao-venda">
			<div class="container-fluid" id="navSuperior">
				<div class="row p-4">

					<div class="col-md-3 pl-4">
						<h2>venda / locação</h2>
					</div>

					<div class="col-4"></div>

					<div class="col-md-4 text-right">
						<a class="dropdown-toggle" href="#"  id="order" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							ordenar por: 
							<span class="orderBy" style="font-size: 13px;"> 
								ordem padrão 
							</span> 
						</a>
						<ul class="dropdown-menu dropdown-menuOrder" aria-labelledby="order" >
							<li class="dropdown-item dropdown-item2">ordem padrão</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="container-fluid">
			
			</div>
		</div>







	</body>


	<script type="text/javascript" src="/<?=pasta?>/build/lib/jquery/jquery-3.3.1.js"></script> <!-- jquery  -->
	<script type="text/javascript" src="/<?=pasta?>/build/lib/bootstrap-4/js/bootstrap.min.js"></script> <!-- js bootstrap -->
	<script type="text/javascript">
		$(document).ready(function(){

			$('#order').click(function(e){
				var select = $('.dropdown-menuOrder');
				if (select.hasClass('active')) {
					select.hide();
					select.removeClass('active');
				}else{
					select.show();
					select.addClass('active');
				}
			});


			$('.dropdown').mouseover(function(){
				$('.dropdown-menu1').show();
			});
			$('.dropdown').mouseout(function(){
				$('.dropdown-menu1').hide();
			});
		});
	</script>
</html>