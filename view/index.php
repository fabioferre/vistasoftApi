<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Venda / Locação – Terra Lima Imóveis</title>
		<link rel="shortcut icon" href="http://novoterralima.com/wp-content/uploads/2017/10/icon_terralima.png">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
		
		<link rel="stylesheet" type="text/css" href="/<?=pasta?>/build/lib/bootstrap-4/css/bootstrap.min.css">
		<link rel="stylesheet" href="/<?=pasta?>/build/plugin/fontawesome-5.1/css/all.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" rel="stylesheet"/>

		<style type="text/css">
			body{
				font-family: 'Montserrat', sans-serif;;
				background: #f2ecdd;
				overflow-x: hidden;
				text-transform: uppercase;
			}
			h2{
				color: #d68b5c;
				font-size: 24px;
			}

			h3{
				font-weight: 400;
				font-size: 16px;
				line-height: 24px;
				color: #9c8590;
			}
			.hide{
				display: none;
			}
			
			.bg-default{
				background: #f8f5ec;
			}

			.navbar-light .navbar-nav .nav-link{
				color: #db9970;
				font-size: 14px;
				letter-spacing: 0.1px;
				line-height: 85px;
				padding: 0 15px;
			}

			.dropdown-menu{
				width: 250px;
			}
			.dropdown-item1{
			 	color: #996633;
			}
			.dropdown-item1:hover{
				color: 	rgba(153, 102, 51,0.5);
				background: none;
			}

			.dropdown-menuOrder{
				font-size: 15px;
				color: grey;
			}

			.dropdown-item2:hover,.select2-results__options > li{
				background: #e6fff2;
			}

			#navSuperior a{
				color: #9b9b9b;
				vertical-align: middle;
				font-weight: 400;
				font-size: 15px;
				text-decoration: none;
			}

			
			.painel{
				background: #f8f5ec;
			}
			
			i{
				color: #7f8685;
				font-size: 16px;
			}

		</style>
	</head>

	<body>
			<header class="container-fluid bg-default" style="border-top: 1px solid #dddddd;">
				<div class="col-md-12 pt-2 ">
					<a class="navbar-brand " href="#"><img src="img/logo_site.png" style="width: 233px; margin-left:34px;"></a>
				</div>
			</header>

			<nav class="navbar navbar-expand-lg navbar-light bg-default">
				<div class="col-md-2"></div>

			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHome" aria-controls="navbarHome" aria-expanded="false" aria-label="Toggle navigation">
			       <span class="navbar-toggler-icon"></span>
			    </button>
			    
			    <div class="collapse navbar-collapse ml-4" id="navbarHome">
			        <ul class="navbar-nav mr-auto" style="margin-left: 4px;">

			            <li class="nav-item">
			                <a class="nav-link" href="http://novoterralima.com/empresa/" >
			                   sobre nós
			                </a>
			            </li>

			            
						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								portfólio
							</a>
							<div class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown">
								<a class="dropdown-item dropdown-item1 " href="#">locação</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item dropdown-item1" href="#">venda</a>
							</div>
						</li>

			            <li class="nav-item ">
			                <a class="nav-link" href="#">
			                    corretores
			                </a>
			            </li>

			            <li class="nav-item">
			                <a class="nav-link" href="#">
			                    fale conosco
			                </a>
			            </li>
			            
			            <li class="nav-item">
			                <a class="nav-link" href="#" >
			                    cadastre seu imóvel
			                </a>
			            </li>

			            <li class="nav-item">
			                <a class="nav-link" href="#" >
			                    mapa
			                </a>
			            </li>

			            <li class="nav-item ">
			                <a class="nav-link" href="#" >
			                    blog
			                </a>
			            </li>
			        </ul>
			    </div>
			</nav>

			<div class="container-fluid">
				<div class="container" id="navSuperior">
					<div class="row p-4">
						<div class="col-md-5">
							<h2>venda / locação</h2>
						</div>

						<div class="col-2"></div>

						<div class="col-md-5">
							 
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

				<div class="container">
					<div class="row p-2 ">
						<div class="col-md-3 painel p-3">
							<h3>encontre seu imóvel </h3>
							<form>
								<div class="form-group">
									<select class="custom-select" style="border:1px solid #ddd; box-shadow: none; border-radius: 0px;">
										<option>dsads</option>
										<option>dsadsss</option>
										<option>dsadsssss</option>
									</select>
								</div>
							</form>
							<br>
							<br>
							<br>
						</div>

						<div class="col-md-8 m-4" style="border: 1px solid red">
							dsds
						</div>
					</div>
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