<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Glosario INFO 023 </title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/SyntaxHighlighter.css"></link>		
	<link type="text/css" rel="stylesheet" href="css/unidades.css"></link>
</head>
<body>
	<!-- Acordeon Unidad 1 -->
	<div class="panel-group" id="accordion1">
		<div class="panel panel-default1">
			<div class="panel-heading" id="headerTituloUnidad1">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="accordion1" href="#collapse1" class="tituloUnidad">
						<span class="icono1 glyphicon glyphicon-chevron-down"></span> 
						Unidad 1: Aprende el lenguaje de programación Java, su entorno y capacidades	
					</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
				<!-- Acordeon Metodo 1.1 -->
				<div class="panel panel-default1">					
					<div class="panel-group" id="accordion1-1">
						<div class="panel panel-default1-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="accordion1-1" href="#collapse1-1" class="tituloUnidad">
									<span class="icono1-1 glyphicon glyphicon-plus"> </span>
										Mostrar información en pantalla
									</a>
								</h4>
							</div>

							<div id="collapse1-1" class="panel-collapse collapse">
								<div class="panel panel-default1-1">
									<div class="panel-group" id="contenedorUnidad1">
										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-1" href="#collapse1-1-1">
														<b>Descripción</b>
													</a>
												</h4>
											</div>
											<div id="collapse1-1-1" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Para mostrar datos en pantalla, se tiene la idea de que la información se "imprime" en la pantalla
													del dispositivo que está visualizando el programa.<br>
													Por lo mismo, los métodos utilizados para desplegar información son:
													<li>
														<b>println(argumento): </b>
														Se encarga de mostrar el argumento en pantalla y dejar el cursor en la linea siguiente
													</li>
													<li>
														<b>print(argumento): </b>
														Se encarga de mostrar el argumento en pantalla dejando el cursor en la misma linea.
													</li>
													El argumento dado a la función, puede ser una variable que contiene algún dato primitivo,
													una cadena o una combinación de ambas.
												</div>
											</div>
										</div>

										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-1" href="#collapse1-1-2">
														<b>Uso</b>
													</a>
												</h4>
											</div>
											<div id="collapse1-1-2" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Para utilizar éstos métodos no es necesario importar ninguna biblioteca externa.
													<li>
														System.out.println(argumento)
													</li>
													<li>
														System.out.print(argumento)
													</li>

												</div>
											</div>
										</div>

										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-1" href="#collapse1-1-3">
														<b>Ejemplo</b>
													</a>
												</h4>
											</div>
											<div id="collapse1-1-3" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													<pre name="code"  class="Java:nocontrols">
										                public class ejemploPrint{
										                	public static void main(String[] args){
										                		System.out.println("Hola a todos");
										                		System.out.print("Esta linea queda debajo por el println");
										                		System.out.print(" y esta queda al lado por el uso de print");
									                		}
										            				}
										            </pre>
										            <h5> Salida </h5>
										            <textarea readonly cols="100" wrap="hard" >Hola a todos
Esta linea queda debajo por el println  y esta queda al lado por el uso de print
										            </textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Acordeon Metodo 1.2 -->
				<div class="panel panel-default">
					<div class="panel-group" id="accordion1-2">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="accordion1-2" href="#collapse1-2">
										Metodo 2
									</a>
								</h4>
							</div>
							<div id="collapse1-2" class="panel-collapse collapse in">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
									labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
									nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
									esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
									in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
	<!-- Acordeon Unidad 2 -->
	<div class="panel-group" id="accordion2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="accordion2" href="#collapse2">
						Unidad 2
					</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse in">
				<div class="panel panel-default">
					<div class="panel-group" id="accordion2">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="accordion2" href="#collapse2-1">
										Metodo 1
									</a>
								</h4>
							</div>
							<div id="collapse2-1" class="panel-collapse collapse in">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
									labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
									nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
									esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
									in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script language="javascript" src="js/shCore.js"></script>
    <script language="javascript" src="js/shBrushJava.js"></script>
    <script type="text/javascript">
    	window.onload = function() {
      		dp.SyntaxHighlighter.HighlightAll("code");
    	}
	</script>
	<script type="text/javascript">
	    $('#collapse1').on('shown.bs.collapse', function() {
	    	$(".icono1").addClass('glyphicon-chevron-up').removeClass('glyphicon-chevron-down');
	  	});
	    $('#collapse1').on('hidden.bs.collapse', function() {
		    $(".icono1").addClass('glyphicon-chevron-down').removeClass('glyphicon-chevron-up');
		});
  	</script>
  	<script type="text/javascript">
  		$('#collapse1-1').on('shown.bs.collapse', function() {
	    	$(".icono1-1").addClass('glyphicon-minus').removeClass('glyphicon-plus');
	  	});
	    $('#collapse1-1').on('hidden.bs.collapse', function() {
		    $(".icono1-1").addClass('glyphicon-plus').removeClass('glyphicon-minus');
		});
		
	</script>
</body>