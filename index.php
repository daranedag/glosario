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
						<a data-toggle="collapse" data-parent="#accordion1" href="#collapse1" class="tituloUnidad">
							<span class="icono1 glyphicon glyphicon-chevron-down"></span>
							Unidad 1: Aprende el lenguaje de programación Java, su entorno y capacidades
						</a>
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse">
					<div class="panel-body1">
						<div class="panel panel-default1-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion1-1" href="#collapse1-1" class="tituloUnidad">
										<b>Mostrar Información en pantalla</b>
									</a>
								</h4>
							</div>
							<div id="collapse1-1" class="panel-collapse collapse">
								<div class="panel panel-default1-1">
									<div class"panel-group" id="contenedorUnidad1">
										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-1" href="#collapse1-1-1">
														<b> Descripción </b>
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
														<b> Uso </b>
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
														<b> Ejemplo </b>
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
										            <textarea readonly cols="100" wrap="off" style="width: 100%;">
										            	Hola a todos
														Esta linea queda debajo por el println  y esta queda al lado por el uso de print
										            </textarea>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default1-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion1-2" href="#collapse1-2" class="tituloUnidad">
										<b>Palabras clave y tipos de datos</b>
									</a>
								</h4>
							</div>
							<div id="collapse1-2" class="panel-collapse collapse">
								<div class="panel panel-default1-1">
									<div class"panel-group" id="contenedorUnidad1">
										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-2" href="#collapse1-2-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse1-2-1" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Para comenzar a programar en Java, existen, como se podrán haber dado cuenta del
													primer programa realizado que hay algunas palabras clave (en colores) que son necesarias
													para que funcione el programa. Y aquí están explicadas brevemente cada una de esas palabras:
													<table class="table table-hover1-2-1">
														<th>
															Palabra clave
														</th>
														<th>
															Descripción
														</th>
														<tbody>
														<tr>
															<td style="color: blue;">
																public
															</td>
															<td>
																El encontrarse escrita la palabra <i>public</i> implica que es accesible de diferentes clases y programas
															</td>
														</tr>
														<tr>
															<td style="color: blue;">
																static
															</td>
															<td>
																Esta palabra hace que el intercambio de información esté habilitado
															</td>
														</tr>
														<tr>
															<td style="color: blue;">
																void
															</td>
															<td>
																No habrá un valor de retorno al programa que lo invocó
															</td>
														</tr>
														<tr>
															<td>
																main
															</td>
															<td>
																<a id="tooltip1-2-1" href="#" data-toggle="tooltip" title="Esto se explicará en la Unidad 2"><b>Método</b></a> principal necesario para ejecutar cualquier programa
															</td>
															<div class="tooltip top" role="tooltip">
															  	<div class="tooltip-arrow"></div>
															  	<div class="tooltip-inner">
															    	Esto se explicará en la Unidad 2
															  	</div>-
															</div>
														</tr>
														<tr>
															<td style="color: blue;">
																class
															</td>
															<td>
																Establece una <i>Clase</i> nueva para ser utilizada
															</td>
														</tr>
														<th>
															Tipo de dato
														</th>
														<th>
															Descripción
														</th>
														<tr>
															<td style="color: blue;">
																byte
															</td>
															<td>
																Tipo de dato numérico entero que almacena 1 byte de memoria (8 bits)
															</td>
														</tr>
														<tr>
															<td style="color: blue;">
																short
															</td>
															<td>
																Tipo de dato numérico entero que almacena 2 bytes de memoria (16 bits)
															</td>
														</tr>
														<tr>
															<td style="color: blue;">
																int
															</td>
															<td>
																Tipo de dato numérico entero que almacena 4 bytes de memoria (32 bits)
															</td>
														</tr>
														<tr>
															<td style="color: blue;">
																long
															</td>
															<td>
																Tipo de dato numérico entero que almacena 8 bytes de memoria (64 bits)
															</td>
														</tr>
														<tr>
															<td style="color: blue;">
																boolean
															</td>
															<td>
																Tipo de dato lógico con valores verdadeor y falso
															</td>
														</tr>
														<tr>
															<td style="color: blue;">
																char
															</td>
															<td>
																Tipo de dato que almacena un caracter (16 bits)
															</td>
														</tr>
														<tr>
															<td style="color: blue;">
																float
															</td>
															<td>
																Tipo de dato numérico con punto flotante que lamacena 2 bytes de memoria (16 bits)
															</td>
														</tr>														
														<tr>
															<td style="color: blue;">
																double
															</td>
															<td>
																Tipo de dato numérico con punto flotante que lamacena 8 bytes de memoria (64 bits)
															</td>
														</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>

										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-2" href="#collapse1-2-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse1-2-2" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Contenido 1.2.2
												</div>
											</div>
										</div>

										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-2" href="#collapse1-2-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse1-2-3" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Contenido 1.2.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default1-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion1-3" href="#collapse1-3" class="tituloUnidad">
										<b>Ingreso de datos</b>
									</a>
								</h4>
							</div>
							<div id="collapse1-3" class="panel-collapse collapse">
								<div class="panel panel-default1-1">
									<div class"panel-group" id="contenedorUnidad1">
										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-3" href="#collapse1-3-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse1-3-1" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Contenido 1.3.1
												</div>
											</div>
										</div>

										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-3" href="#collapse1-3-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse1-3-2" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Contenido 1.3.2
												</div>
											</div>
										</div>

										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-3" href="#collapse1-3-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse1-3-3" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Contenido 1.3.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default1-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion1-4" href="#collapse1-4" class="tituloUnidad">
										<b>Operadores</b>
									</a>
								</h4>
							</div>
							<div id="collapse1-4" class="panel-collapse collapse">
								<div class="panel panel-default1-1">
									<div class"panel-group" id="contenedorUnidad1">
										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-4" href="#collapse1-4-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse1-4-1" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Contenido 1.4.1
												</div>
											</div>
										</div>

										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion1-4" href="#collapse1-4-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse1-4-2" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Contenido 1.4.2
												</div>
											</div>
										</div>

										<div class="panel panel-default1-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-4" href="#collapse1-4-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse1-4-3" class="panel-collapse collapse in">
												<div class="panel-body contenido1-1-1-1">
													Contenido 1.4.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- Fin Unidad 1 -->

	<!-- Acordeon Unidad 2 -->
		<div class="panel-group" id="accordion2">
			<div class="panel panel-default2">
		    	<div class="panel-heading" id="headerTituloUnidad2">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2" class="tituloUnidad">
		          			<span class="icono2 glyphicon glyphicon-chevron-down"></span>
		          			Unidad 2: Construye programas en Java de forma modular usando estructuras básicas y métodos
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapse2" class="panel-collapse collapse">
		      		<div class="panel-body2">
		        		<div class="panel panel-default2-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2-1" href="#collapse2-1" class="tituloUnidad">
										<b>If - Else</b>
									</a>
								</h4>
							</div>
							<div id="collapse2-1" class="panel-collapse collapse">
								<div class="panel panel-default2-1">
									<div class"panel-group" id="contenedorUnidad2">
										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-1-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-1-1" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.1.1
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-1-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-1-2" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.1.2
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-1-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-1-3" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.1.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default2-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2-2" href="#collapse2-2" class="tituloUnidad">
										<b>While</b>
									</a>
								</h4>
							</div>
							<div id="collapse2-2" class="panel-collapse collapse">
								<div class="panel panel-default2-1">
									<div class"panel-group" id="contenedorUnidad2">
										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-2-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-2-1" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.2.1
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-2-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-2-2" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.2.2
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-2-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-2-3" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.2.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default2-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2-3" href="#collapse2-3" class="tituloUnidad">
										<b>For</b>
									</a>
								</h4>
							</div>
							<div id="collapse2-3" class="panel-collapse collapse">
								<div class="panel panel-default2-1">
									<div class"panel-group" id="contenedorUnidad2">
										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-3-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-3-1" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.3.1
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-3-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-3-2" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.3.2
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-3-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-3-3" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.3.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default2-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2-4" href="#collapse2-4" class="tituloUnidad">
										<b>Clase Math</b>
									</a>
								</h4>
							</div>
							<div id="collapse2-4" class="panel-collapse collapse">
								<div class="panel panel-default2-1">
									<div class"panel-group" id="contenedorUnidad2">
										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-4-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-4-1" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.4.1
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-4-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-4-2" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.4.2
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-4-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-4-3" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Contenido 2.4.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	    		</div>
		  	</div>
		</div>
	<!-- Fin Unidad 2 -->

	<!-- Acordeon Unidad 3 -->
		<div class="panel-group" id="accordion3">
			<div class="panel panel-default3">
		    	<div class="panel-heading" id="headerTituloUnidad3">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion3" href="#collapse3" class="tituloUnidad">
		          			<span class="icono3 glyphicon glyphicon-chevron-down"></span>
		          			Unidad 3: Construye programas en Java de forma modular usando las potencialidades de la clase String
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapse3" class="panel-collapse collapse">
		      		<div class="panel-body3">
		        		<div class="panel panel-default3-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion3-1" href="#collapse3-1" class="tituloUnidad">
										<b>Caracteres especiales</b>
									</a>
								</h4>
							</div>
							<div id="collapse3-1" class="panel-collapse collapse">
								<div class="panel panel-default3-1">
									<div class"panel-group" id="contenedorUnidad3">
										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-1" href="#collapse3-1-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-1-1" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.1.1
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-1" href="#collapse3-1-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-1-2" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.1.2
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-1" href="#collapse3-1-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-1-3" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.1.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default3-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion3-2" href="#collapse3-2" class="tituloUnidad">
										<b>Casting</b>
									</a>
								</h4>
							</div>
							<div id="collapse3-2" class="panel-collapse collapse">
								<div class="panel panel-default3-1">
									<div class"panel-group" id="contenedorUnidad3">
										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-2" href="#collapse3-2-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-2-1" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.2.1
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-2" href="#collapse3-2-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-2-2" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.2.2
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-2" href="#collapse3-2-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-2-3" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.2.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default3-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion3-3" href="#collapse3-3" class="tituloUnidad">
										<b>Strings</b>
									</a>
								</h4>
							</div>
							<div id="collapse3-3" class="panel-collapse collapse">
								<div class="panel panel-default3-1">
									<div class"panel-group" id="contenedorUnidad3">
										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-1" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.3.1
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-2" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.3.2
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-3" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.3.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default3-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion3-4" href="#collapse3-4" class="tituloUnidad">
										<b>Integer y Character</b>
									</a>
								</h4>
							</div>
							<div id="collapse3-4" class="panel-collapse collapse">
								<div class="panel panel-default3-1">
									<div class"panel-group" id="contenedorUnidad3">
										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-4" href="#collapse3-4-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-4-1" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.4.1
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-4" href="#collapse3-4-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-4-2" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.4.2
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-4-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-4-3" class="panel-collapse collapse in">
												<div class="panel-body contenido3-1-1-1">
													Contenido 3.4.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	    		</div>
		  	</div>
		</div>
	<!-- Fin Unidad 3 -->

	<!-- Acordeon Unidad 4 -->
		<div class="panel-group" id="accordion4">
			<div class="panel panel-default4">
		    	<div class="panel-heading" id="headerTituloUnidad4">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion4" href="#collapse4" class="tituloUnidad">
		          			<span class="icono4 glyphicon glyphicon-chevron-down"></span>
		          			Unidad 4: Construye programas en Java usando estructuras de datos en memoria (arreglos en 1 y 2 dimensiones)
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapse4" class="panel-collapse collapse">
		      		<div class="panel-body4">
		        		<div class="panel panel-default4-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion4-1" href="#collapse4-1" class="tituloUnidad">
										<b>Datos estructurados</b>
									</a>
								</h4>
							</div>
							<div id="collapse4-1" class="panel-collapse collapse">
								<div class="panel panel-default4-1">
									<div class"panel-group" id="contenedorUnidad4">
										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-1" href="#collapse4-1-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-1-1" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.1.1
												</div>
											</div>
										</div>

										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-1" href="#collapse4-1-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-1-2" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.1.2
												</div>
											</div>
										</div>

										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-1" href="#collapse4-1-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-1-3" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.1.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default4-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion4-2" href="#collapse4-2" class="tituloUnidad">
										<b>length</b>
									</a>
								</h4>
							</div>
							<div id="collapse4-2" class="panel-collapse collapse">
								<div class="panel panel-default4-1">
									<div class"panel-group" id="contenedorUnidad4">
										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-2" href="#collapse4-2-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-2-1" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.2.1
												</div>
											</div>
										</div>

										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-2" href="#collapse4-2-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-2-2" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.3.2
												</div>
											</div>
										</div>

										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-2" href="#collapse4-2-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-2-3" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.2.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default4-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion4-3" href="#collapse4-3" class="tituloUnidad">
										<b>arrayCopy</b>
									</a>
								</h4>
							</div>
							<div id="collapse4-3" class="panel-collapse collapse">
								<div class="panel panel-default4-1">
									<div class"panel-group" id="contenedorUnidad4">
										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-3" href="#collapse4-3-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-3-1" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.3.1
												</div>
											</div>
										</div>

										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-3" href="#collapse4-3-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-3-2" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.3.2
												</div>
											</div>
										</div>

										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-3" href="#collapse4-3-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-3-3" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.3.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default4-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion4-4" href="#collapse4-4" class="tituloUnidad">
										<b>Arreglos n-dimensionales</b>
									</a>
								</h4>
							</div>
							<div id="collapse4-4" class="panel-collapse collapse">
								<div class="panel panel-default4-1">
									<div class"panel-group" id="contenedorUnidad4">
										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-4" href="#collapse4-4-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-4-1" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.4.1
												</div>
											</div>
										</div>

										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-4" href="#collapse4-4-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-4-2" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.4.2
												</div>
											</div>
										</div>

										<div class="panel panel-default4-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion4-4" href="#collapse4-4-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse4-4-3" class="panel-collapse collapse in">
												<div class="panel-body contenido4-1-1-1">
													Contenido 4.4.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	    		</div>
		  	</div>
		</div>
	<!-- Fin Unidad 4 -->

	<!-- Acordeon Unidad 5 -->
		<div class="panel-group" id="accordion5">
			<div class="panel panel-default5">
		    	<div class="panel-heading" id="headerTituloUnidad5">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion5" href="#collapse5" class="tituloUnidad">
		          			<span class="icono5 glyphicon glyphicon-chevron-down"></span>
		          			Unidad 5: Aprende a incorporar el manejo de excepciones en sus programas con Java, ayudando al mejor desempeño de éstos
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapse5" class="panel-collapse collapse">
		      		<div class="panel-body5">
		        		<div class="panel panel-default5-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion5-1" href="#collapse5-1" class="tituloUnidad">
										<b>Try - Catch</b>
									</a>
								</h4>
							</div>
							<div id="collapse5-1" class="panel-collapse collapse">
								<div class="panel panel-default5-1">
									<div class"panel-group" id="contenedorUnidad5">
										<div class="panel panel-default5-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion5-1" href="#collapse5-1-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse5-1-1" class="panel-collapse collapse in">
												<div class="panel-body contenido5-1-1-1">
													Contenido 5.1.1
												</div>
											</div>
										</div>

										<div class="panel panel-default5-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion5-1" href="#collapse5-1-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse5-1-2" class="panel-collapse collapse in">
												<div class="panel-body contenido5-1-1-1">
													Contenido 5.1.2
												</div>
											</div>
										</div>

										<div class="panel panel-default5-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion5-1" href="#collapse5-1-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse5-1-3" class="panel-collapse collapse in">
												<div class="panel-body contenido5-1-1-1">
													Contenido 5.1.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default5-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion5-2" href="#collapse5-2" class="tituloUnidad">
										<b>Throw new Exception</b>
									</a>
								</h4>
							</div>
							<div id="collapse5-2" class="panel-collapse collapse">
								<div class="panel panel-default5-1">
									<div class"panel-group" id="contenedorUnidad5">
										<div class="panel panel-default5-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion5-2" href="#collapse5-2-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse5-2-1" class="panel-collapse collapse in">
												<div class="panel-body contenido5-1-1-1">
													Contenido 5.2.1
												</div>
											</div>
										</div>

										<div class="panel panel-default5-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion5-2" href="#collapse5-2-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse5-2-2" class="panel-collapse collapse in">
												<div class="panel-body contenido5-1-1-1">
													Contenido 5.2.2
												</div>
											</div>
										</div>

										<div class="panel panel-default5-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion5-2" href="#collapse5-2-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse5-2-3" class="panel-collapse collapse in">
												<div class="panel-body contenido5-1-1-1">
													Contenido 5.2.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default5-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion5-3" href="#collapse5-3" class="tituloUnidad">
										<b>getMessage()</b>
									</a>
								</h4>
							</div>
							<div id="collapse5-3" class="panel-collapse collapse">
								<div class="panel panel-default5-1">
									<div class"panel-group" id="contenedorUnidad5">
										<div class="panel panel-default5-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion5-3" href="#collapse5-3-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse5-3-1" class="panel-collapse collapse in">
												<div class="panel-body contenido5-1-1-1">
													Contenido 5.3.1
												</div>
											</div>
										</div>

										<div class="panel panel-default5-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion5-3" href="#collapse5-3-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse5-3-2" class="panel-collapse collapse in">
												<div class="panel-body contenido5-1-1-1">
													Contenido 5.3.2
												</div>
											</div>
										</div>

										<div class="panel panel-default5-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion5-3" href="#collapse5-3-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse5-3-3" class="panel-collapse collapse in">
												<div class="panel-body contenido5-1-1-1">
													Contenido 5.3.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Borrar Quizá!!!
							<div class="panel panel-default5-1">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion5-4" href="#collapse5-4" class="tituloUnidad">
											Clase Math
										</a>
									</h4>
								</div>
								<div id="collapse5-4" class="panel-collapse collapse">
									<div class="panel-body contenido5-1-1-1">
										Contenido
									</div>
								</div>
							</div> 
						-->
					</div>
	    		</div>
		  	</div>
		</div>
	<!-- Fin Unidad 5 -->

	<!-- Acordeon Unidad 6 -->
		<div class="panel-group" id="accordion3">
			<div class="panel panel-default6">
		    	<div class="panel-heading"  id="headerTituloUnidad6">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion6" href="#collapse6" class="tituloUnidad">
		          			<span class="icono6 glyphicon glyphicon-chevron-down"></span>
		          			Unidad 6: Construye programas computacionales en Java usando Archivos de Texto
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapse6" class="panel-collapse collapse">
		      		<div class="panel-body6">
		        		<div class="panel panel-default6-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion6-1" href="#collapse6-1" class="tituloUnidad">
										<b>java.io IOException</b>
									</a>
								</h4>
							</div>
							<div id="collapse6-1" class="panel-collapse collapse">
								<div class="panel panel-default6-1">
									<div class"panel-group" id="contenedorUnidad6">
										<div class="panel panel-default6-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion6-1" href="#collapse6-1-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse6-1-1" class="panel-collapse collapse in">
												<div class="panel-body contenido6-1-1-1">
													Contenido 6.1.1
												</div>
											</div>
										</div>

										<div class="panel panel-default6-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion6-1" href="#collapse6-1-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse6-1-2" class="panel-collapse collapse in">
												<div class="panel-body contenido6-1-1-1">
													Contenido 6.1.2
												</div>
											</div>
										</div>

										<div class="panel panel-default6-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion6-1" href="#collapse6-1-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse6-1-3" class="panel-collapse collapse in">
												<div class="panel-body contenido6-1-1-1">
													Contenido 6.1.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default6-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion6-2" href="#collapse6-2" class="tituloUnidad">
										<b>File y Scanner para archivos, hasNextLine(), close()</b>
									</a>
								</h4>
							</div>
							<div id="collapse6-2" class="panel-collapse collapse">
								<div class="panel panel-default6-1">
									<div class"panel-group" id="contenedorUnidad6">
										<div class="panel panel-default6-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion6-2" href="#collapse6-2-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse6-2-1" class="panel-collapse collapse in">
												<div class="panel-body contenido6-1-1-1">
													Contenido 6.2.1
												</div>
											</div>
										</div>

										<div class="panel panel-default6-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion6-2" href="#collapse6-2-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse6-2-2" class="panel-collapse collapse in">
												<div class="panel-body contenido6-1-1-1">
													Contenido 6.2.2
												</div>
											</div>
										</div>

										<div class="panel panel-default6-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion6-2" href="#collapse6-2-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse6-2-3" class="panel-collapse collapse in">
												<div class="panel-body contenido6-1-1-1">
													Contenido 6.2.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default6-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion6-3" href="#collapse6-3" class="tituloUnidad">
										<b>PrintWriter, println, print, close</b>
									</a>
								</h4>
							</div>
							<div id="collapse6-3" class="panel-collapse collapse">
								<div class="panel panel-default6-1">
									<div class"panel-group" id="contenedorUnidad6">
										<div class="panel panel-default6-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion6-3" href="#collapse6-3-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse6-3-1" class="panel-collapse collapse in">
												<div class="panel-body contenido6-1-1-1">
													Contenido 6.3.1
												</div>
											</div>
										</div>

										<div class="panel panel-default6-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion6-3" href="#collapse6-3-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse6-3-2" class="panel-collapse collapse in">
												<div class="panel-body contenido6-1-1-1">
													Contenido 6.3.2
												</div>
											</div>
										</div>

										<div class="panel panel-default6-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion6-3" href="#collapse6-3-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse6-3-3" class="panel-collapse collapse in">
												<div class="panel-body contenido6-1-1-1">
													Contenido 6.3.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Borrar Quizá!!!
						<div class="panel panel-default6-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion6-4" href="#collapse6-4">
										Clase Math
									</a>
								</h4>
							</div>
							<div id="collapse6-4" class="panel-collapse collapse">
								<div class="panel-body contenido6-1-1-1">
									Contenido
								</div>
							</div>
						</div>
						-->
					</div>
	    		</div>
		  	</div>
		</div>
	<!-- Fin Unidad 6 -->

	<!-- Acordeon Unidad 7 -->
		<div class="panel-group" id="accordion7">
			<div class="panel panel-default7">
		    	<div class="panel-heading"  id="headerTituloUnidad7">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion7" href="#collapse7" class="tituloUnidad">
		          			<span class="icono7 glyphicon glyphicon-chevron-down"></span>
		          			Unidad 7: Construye programas computacionales en Java usando recursividad
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapse7" class="panel-collapse collapse">
		      		<div class="panel-body7">
		        		<div class="panel panel-default7-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion7-1" href="#collapse7-1" class="tituloUnidad">
										<b>Recursividad 1</b>
									</a>
								</h4>
							</div>
							<div id="collapse7-1" class="panel-collapse collapse">
								<div class="panel panel-default7-1">
									<div class"panel-group" id="contenedorUnidad7">
										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-1" href="#collapse7-1-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-1-1" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.1.1
												</div>
											</div>
										</div>

										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-1" href="#collapse7-1-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-1-2" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.1.2
												</div>
											</div>
										</div>

										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-1" href="#collapse7-1-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-1-3" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.1.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default7-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion7-2" href="#collapse7-2" class="tituloUnidad">
										<b>Recursividad 2</b>
									</a>
								</h4>
							</div>
							<div id="collapse7-2" class="panel-collapse collapse">
								<div class="panel panel-default7-1">
									<div class"panel-group" id="contenedorUnidad7">
										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-2" href="#collapse7-2-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-2-1" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.2.1
												</div>
											</div>
										</div>

										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-2" href="#collapse7-2-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-2-2" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.2.2
												</div>
											</div>
										</div>

										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-2" href="#collapse7-2-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-2-3" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.2.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default7-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion7-3" href="#collapse7-3" class="tituloUnidad">
										<b>Recursividad 3</b>
									</a>
								</h4>
							</div>
							<div id="collapse7-3" class="panel-collapse collapse">
								<div class="panel panel-default7-1">
									<div class"panel-group" id="contenedorUnidad7">
										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-3" href="#collapse7-3-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-3-1" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.3.1
												</div>
											</div>
										</div>

										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-3" href="#collapse7-3-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-3-2" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.3.2
												</div>
											</div>
										</div>

										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-3" href="#collapse7-3-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-3-3" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.3.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default7-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion7-4" href="#collapse7-4" class="tituloUnidad">
										<b>Recursividad 4</b>
									</a>
								</h4>
							</div>
							<div id="collapse7-4" class="panel-collapse collapse">
								<div class="panel panel-default7-1">
									<div class"panel-group" id="contenedorUnidad7">
										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-4" href="#collapse7-4-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-4-1" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.4.1
												</div>
											</div>
										</div>

										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-4" href="#collapse7-4-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-4-2" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.4.2
												</div>
											</div>
										</div>

										<div class="panel panel-default7-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion7-4" href="#collapse7-4-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse7-4-3" class="panel-collapse collapse in">
												<div class="panel-body contenido7-1-1-1">
													Contenido 7.4.3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	    		</div>
		  	</div>
		</div>
	<!-- Fin Unidad 7 -->


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script language="javascript" src="js/shCore.js"></script>
    <script language="javascript" src="js/shBrushJava.js"></script>
    <script language="javascript" src="js/glosario.js"></script>
</body>