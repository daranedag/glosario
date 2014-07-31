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
	<link rel="shortcut icon" type="image/x-icon" href="img/indice.jpg">
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
										            <h4> Salida </h4>
										            <code>
										            	Hola a todos <br>
														Esta linea queda debajo por el println  y esta queda al lado por el uso de print
										            </code>
										            <!--
										            <textarea readonly cols="100" wrap="off" style="width: 100%;">
										            	Hola a todos
														Esta linea queda debajo por el println  y esta queda al lado por el uso de print
										            </textarea>
										            -->
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
															  	</div>
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
																Tipo de dato numérico con punto flotante que almacena 2 bytes de memoria (16 bits)
															</td>
														</tr>														
														<tr>
															<td style="color: blue;">
																double
															</td>
															<td>
																Tipo de dato numérico con punto flotante que almacena 8 bytes de memoria (64 bits)
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
													Ver sección Ingreso de datos
												</div>
											</div>
										</div>
									<!--
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
									-->
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
													<p>
														Para poder ingresar datos a través del teclado cuando ejecutamos un programa en Java, se utilizará la clase <i>Scanner</i>,
														y para ello es necesario importarla desde la biblioteca de utilidades de Java que se llama <i>util</i>.
														Luego se debe crear una instancia de la clase <i>Scanner</i> y asignarle el valor correspondiente para que acepte los datos desde el 
														teclado como entrada utilizando <i>System.in</i>
													</p>
													<p>
														Además, al momento de pedir un dato, se debe conocer qué tipo de dato se va a pedir al usuario. Como se vio en el punto anterior
														se pueden pedir diferentes tipos de datos como los siguientes:
														<table class="table table-hover1-2-1">
															<th>
																Instrucción
															</th>
															<th>
																Descripción
															</th>
															<tbody>
																<tr>
																	<td style="color: black;">
																		nextByte()
																	</td>
																	<td>
																		Acepta un numero entero de tamaño de un byte
																	</td>
																</tr>
																<tr>
																	<td style="color: black;">
																		nextShort()
																	</td>
																	<td>
																		Acepta un numero entero de hasta dos bytes
																	</td>
																</tr>
																<tr>
																	<td style="color: black;">
																		nextInt()
																	</td>
																	<td>
																		Acepta un numero entero de hasta cuatro bytes. Este es el más usado
																	</td>
																</tr>
																<tr>
																	<td style="color: black;">
																		nextLong()
																	</td>
																	<td>
																		Acepta un numero entero de hasta ocho bytes.
																	</td>																	
																</tr>
																<tr>
																	<td style="color: black;">
																		nextBoolean()
																	</td>
																	<td>
																		Acepta un valor lógico: <em style="color:blue">true</em> / <em style="color:blue">false</em>
																	</td>
																</tr>
																<tr>
																	<td style="color: black;">
																		nextFloat()
																	</td>
																	<td>
																		Acepta un numero con punto flotanto de hasta dos bytes
																	</td>
																</tr>
																<tr>
																	<td style="color: black;">
																		nextDouble()
																	</td>
																	<td>
																		Acepta un numero con punto flotanto de hasta ocho bytes
																	</td>
																</tr>

																<tr>
																	<td style="color: black;">
																		next()
																	</td>
																	<td>
																		Acepta una cadena de entrada hasta el primer separador encontrado
																	</td>
																</tr>
																<tr>
																	<td style="color: black;">
																		nextLine()
																	</td>
																	<td>
																		Acepta una cadena de entrada hasta el salto de linea producido al presionar la tecla Intro
																	</td>
																</tr>															
															</tbody>
														</table>
													</p>
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
													<p>
														Para importar la biblioteca mencionada:
														<li> 
															<b>import java.util.Scanner;</b>              Se importa solo la Biblioteca Scanner
														</li>
														o bien
														<li> 
															<b>import java.util.*; </b>           Se importa toda la Biblioteca de java.util
														</li>
													</p>
													<p>
														Para crear la instancia de la clase Scanner y asignar el valor correspondiente para recibir datos desde el teclado:
														<li> 
															<b>Scanner keyboard = new Scanner(System.in)</b> 
														</li>
													</p>
													<p>
														Para pedir un dato al usuario (número entero para este caso):
														<li>
															<b> keyboard.nextInt() </b> 
														</li>
														Para pedir una cadena de caracteres o <i>String</i> al usuario:
														<li>
															<b> keyboard.nextLine() </b>
														</li>
														Según la necesidad se pueden utilizar los otros metodos vistos en la descripción.
													</p>
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
													<pre name="code"  class="Java:nocontrols">
														import java.util.Scanner;   //importar biblioteca
														public class ejemploEntrada{  // nueva clase publica llamada ejemploEntrada
															public static void main(String[] args){	//metodo principal para ejecutar el programa
																//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
																Scanner keyboard = new Scanner(System.in);
																System.out.print("Ingrese un numero: ");
																int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
																System.out.println("El numero ingresado fue: "+num);
															}
														}
													</pre>
													<h4> Salida </h4>
													<code>
														Ingrese un numero:
													</code>
													<td>
														<a id="tooltip1-3-1" href="#" data-toggle="tooltip" title="Este fue el número ingresado" style="color: black">
															5<br>
														</a>
													</td>
													<div class="tooltip top" role="tooltip">
													  	<div class="tooltip-arrow"></div>
													  	<div class="tooltip-inner">
													    	Este fue el número ingresado
													  	</div>
													</div>
													<code>
														El numero ingresado fue:
													</code>5
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
													Los operadores son símbolos o caracteres reservados para realizar operaciones:
													<table class="table table-hover1-2-1">
														<th style="text-align: center">
															Tipo
														</th>														
														<th style="text-align: center">
															Operación
														</th>
														<th style="text-align: center">
															Símbolo
														</th>
														<th style="text-align: center">
															Descripción
														</th>
														<th style="text-align: center">
															Uso
														</th>
														<tbody>
															<tr>
																<td rowspan="6" style="text-align: center; vertical-align: middle">
																	Aritméticos
																</td>
															</tr>
															<tr>
																<td style="text-align: center;"> 
																	Adición
																</td>
																<td style="text-align: center;">
																	+
																</td>
																<td style="text-align: center;">
																	Suma dos elementos
																</td>
																<td style="text-align: center;">
																	a + b
																</td>
															</tr>
															<tr>
																<td style="text-align: center;" >
																	Sustracción
																</td>
																<td style="text-align: center;">
																	-
																</td>
																<td style="text-align: center;">
																	Resta dos elementos
																</td>
																<td style="text-align: center;">
																	a - b
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Producto
																</td>
																<td style="text-align: center;">
																	*
																</td>
																<td style="text-align: center;">
																	Multiplica dos elementos
																</td>
																<td style="text-align: center;">
																	a * b
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Cuociente
																</td>
																<td style="text-align: center;">
																	/
																</td>
																<td style="text-align: center;">
																	Divide dos elementos
																</td>
																<td style="text-align: center;">
																	a / b
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Módulo
																</td>
																<td style="text-align: center;">
																	%
																</td>
																<td style="text-align: center;">
																	Calcula el resto de la división entera entre dos numeros
																</td>
																<td style="text-align: center;">
																	a % b
																</td>
															</tr>
															<tr>
																<td rowspan="7" style="text-align: center; vertical-align: middle">
																	Comparativos
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Mayor que
																</td>
																<td style="text-align: center;">
																	>
																</td>
																<td style="text-align: center;">
																	Verdadero si el elemento de la izquierda es mayor
																</td>
																<td style="text-align: center;">
																	a > b
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Menor que
																</td>
																<td style="text-align: center;">
																	<
																</td>
																<td style="text-align: center;">
																	Verdadero si el elemento de la izquierda es menor
																</td>
																<td style="text-align: center;">
																	a < b
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Mayor o igual que
																</td>
																<td style="text-align: center;">
																	>=
																</td>
																<td style="text-align: center;">
																	Verdadero si el elemento de la izquierda es mayor o igual
																</td>
																<td style="text-align: center;">
																	a >= b
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Menor o igual que
																</td>
																<td style="text-align: center;">
																	<=
																</td>
																<td style="text-align: center;">
																	Verdadero si el elemento de la izquierda es menor o igual
																</td>
																<td style="text-align: center;">
																	a <= b
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Distinto que
																</td>
																<td style="text-align: center;">
																	!=
																</td>
																<td style="text-align: center;">
																	Verdadero si el elemento de la izquierda es distinto
																</td>
																<td style="text-align: center;">
																	a != b
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Igual que
																</td>
																<td style="text-align: center;">
																	==
																</td>
																<td style="text-align: center;">
																	Verdadero si el elemento de la izquierda es igual
																</td>
																<td style="text-align: center;">
																	a == b
																</td>
															</tr>
															<tr>
																<td rowspan="5" style="text-align: center; vertical-align: middle">
																	Lógicos
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Y (AND)
																</td>
																<td style="text-align: center;">
																	&&
																</td>
																<td style="text-align: center;">
																	Verdadero si la primera y la segunda expresión lógica se cumplen
																</td>
																<td style="text-align: center;">
																	Condición A && Condición B
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	O (OR)
																</td>
																<td style="text-align: center;">
																	||
																</td>
																<td style="text-align: center;">
																	Verdadero si la primera o la segunda expresión lógica se cumple
																</td>
																<td style="text-align: center;">
																	Condición A || Condición B
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Negación (NOT)
																</td>
																<td style="text-align: center;">
																	!
																</td>
																<td style="text-align: center;">
																	Niega una expresión lógica
																</td>
																<td style="text-align: center;">
																	!Condición A
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Ó exclusivo (XOR)
																</td>
																<td style="text-align: center;">
																	^
																</td>
																<td style="text-align: center;">
																	Verdadero si se cumple una de las expresiones lógicas pero no ambas ni ninguna.
																</td>
																<td style="text-align: center;">
																	Condición A ^ Condición B
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!--
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
										-->
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
													Estructura de control basado en una toma de decisiones simple, es decir, si se cumple
													la condicion dada, se realiza un conjunto de instrucciones. 
													En caso de que no ocurra tal condición, se realiza otro conjunto de instrucciones.
													Para recordar, se utilizará el siguiente diagrama de flujo estructurado:<br>
													<div align="center">
														<img src="img/if-else.png" class="img-responsive" alt="Responsive image">
													</div>
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
													<p>Para utilizar esta estructura de control se debe expresar la condición como una expresión booleana que tome
													los valores true o false según se necesite:<br>													
														if (condicion){<br>
														<p class="indented">
															instruccion1;<br>
															instruccion2;<br>
															...<br>
															instruccionM;<br>
														</p>
														}<br>
														else{<br>
														<p class="indented">
															instrucciónA;<br>
															instrucciónB;<br>
															...<br>
															instrucciónZ;<br>
														</p>
														}
													</p>
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
													<pre name="code"  class="Java:nocontrols">
														import java.util.Scanner;   //importar biblioteca
														public class ejemploIf{  // nueva clase publica llamada ejemploIf
															public static void main(String[] args){	//metodo principal para ejecutar el programa
																//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
																Scanner keyboard = new Scanner(System.in);
																System.out.print("Ingrese un numero: ");
																int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
																if(num % 2 == 0){  	// condición se encuentra entre parentesis
																	// Instrucciones a realizar si se cumple la condición
																	System.out.println("El numero ingresado es PAR");	
																}
																else{		//negación de la condición del if
																	// Instrucciones a realizar de no cumplirse la condición
																	System.out.println("El numero ingresado es IMPAR");
																}																
															}
														}
													</pre>
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
													Estructura de control iterativa, es decir, cíclica; que realizará las instrucciones dadas
													mientras la condición dada se cumpla.
													Dependiendo de la condición dada pueden darse el caso de iteraciones infinitas, por lo que 
													se sugiere revisar las condiciones lógicas.
													Para recordar, se utilizará el siguiente diagrama de flujo estructurado:
													<div align="center">
														<img src="img/while.png" class="img-responsive" alt="Responsive image">
													</div>													
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
													<p>Para utilizar esta estructura de control se debe expresar la condición como una expresión booleana que tome
													los valores true o false según se necesite: <br>
													while (condicion){
													<p class="indented">
														instruccion1;<br>
														instruccion2;<br>
														...<br>
														instruccionM;<br>
													</p>													
													}
													</p>												
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
													<pre name="code"  class="Java:nocontrols">
														import java.util.Scanner;   //importar biblioteca
														public class ejemploWhile{  // nueva clase publica llamada ejemploWhile
															public static void main(String[] args){	//metodo principal para ejecutar el programa
																//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
																Scanner keyboard = new Scanner(System.in);
																System.out.print("Ingrese un numero: ");
																int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
																//validación para que el numero ingresado por el usuario sea positivo, es decir, rechaza los negativos
																while(num <= 0){
																	//instrucciones que se ejecutan mientras el numero ingresado por el usuario sea 0 o negativo
																	System.out.print("Error...el numero debe ser positivo\n Ingrese un numero: ");
																	num = keyboard.nextInt();
																}
																System.out.println("Numero ingresado correctamente");														
															}
														}
													</pre>
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
													Estructura de control repetitiva, que a diferencia de <i>while</i> se conoce la cantidad de veces a repetir
													las instrucciones dadas.<br>
													Para recordar, se utilizará el siguiente diagrama de flujo estructurado:
													<div align="center">
														<img src="img/for.png" class="img-responsive" alt="Responsive image">
													</div>
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
													<p>Para utilizar esta estructura de control se deben expresar las variables numéricas asociadas a valores conocidos
													y además esos valores deben ir de acuerdo al salto especificado:<br>													
														for(int i=0; i< 10; i++){<br>
														<p class="indented">
															instruccion1;<br>
															instruccion2;<br>
															...<br>
															instruccionM;<br>
														</p>
														}
													</p>													
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
													<pre name="code"  class="Java:nocontrols">
														import java.util.Scanner;   //importar biblioteca
														public class ejemploFor{  // nueva clase publica llamada ejemploFor
															public static void main(String[] args){	//metodo principal para ejecutar el programa
																//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
																Scanner keyboard = new Scanner(System.in);
																System.out.print("Ingrese un numero: ");
																int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
																for(int i=0; i < num; i++){
																	//instrucciones que se ejecutaran las veces que diga el usuario al ingresar el numero
																	System.out.println("INFO 023-Programación");
																}															
															}
														}
													</pre>
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
													Como bien indica su nombre en inglés, ésta clase contiene todos los métodos asociados a funciones
													matemáticas que no están consideradas como básicas. Por ejemplo: coseno, raiz cuadrada, tangente, etc.
													Para utilizar esta clase es necesario llamar cada función con el comando:<br>
													<b>Math</b>.funcion
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
													A continuación se detallan los métodos más utilizados de la clase Math, su descripción y un pequeño ejemplo de uso
													<table class="table table-hover2-4-1">
														<th style="text-align: center;">
															Función
														</th>
														<th style="text-align: center;">
															Instrucción
														</th>
														<th style="text-align: center;">
															Descripción
														</th>
														<th style="text-align: center;">
															Uso y Ejemplo
														</th>
														<tbody>
															<tr>
																<td style="text-align: center;">
																	Número Pi
																</td>
																<td style="text-align: center;">
																	Math.PI
																</td>
																<td style="text-align: center;">
																	Valor de tipo <i>double</i> que es más cercano que cualquier otro al valor de pi, <br>la relación de la circunferencia de un círculo con su diámetro
																</td>
																<td style="text-align: center;">
																	double r = 5.3;<br>
																	double perimetro = 2 * Math.PI * r;
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Número e
																</td>
																<td style="text-align: center;">
																	Math.E
																</td>
																<td style="text-align: center;">
																	Valor de tipo <i>double</i> que es más cercano que cualquier otro al valor de <i>e</i>, <br>la base de los logaritmos naturales
																</td>
																<td style="text-align: center;">
																	double resultado = 4 * Math.E;
																</td>
															</tr>																													
															<tr>
																<td style="text-align: center;">
																	Valor absoluto
																</td>
																<td style="text-align: center;">
																	Math.abs(<a id="tooltip2-4-1" href="#" data-toggle="tooltip" title="Puede ser de tipo double, int, long o float"><b>a</b></a>)
																</td>
																<div class="tooltip top" role="tooltip">
																  	<div class="tooltip-arrow"></div>
																  	<div class="tooltip-inner">
																    	Puede ser de tipo double, int, long o float
																  	</div>
																</div>
																</td>
																<td style="text-align: center;">
																	Retorna el valor absoluto del argumento dado según el tipo especificado.
																</td>
																<td style="text-align: center;">
																	int x = -3;<br>
																	int positivo = Math.abs(x);
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Raíz cúbica
																</td>
																<td style="text-align: center;">
																	Math.cbrt(double a)
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna la raíz cúbica del número especificado como double.
																</td>
																<td style="text-align: center;">
																	double resultado = Math.cbrt(8);
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Coseno
																</td>
																<td style="text-align: center;">
																	Math.cos(double a)
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna el coseno trigonométrico de un ángulo en <b>radianes</b>.
																</td>
																<td style="text-align: center;">
																	double resultado = Math.cos(Math.PI/2);
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	<i>e</i> elevado a 
																</td>
																<td style="text-align: center;">
																	Math.exp(double a)
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna el número de Euler elevado a la potencia del valor double especificado.
																</td>
																<td style="text-align: center;">
																	double x = 0.5;<br>
																	double resultado = Math.exp(x);
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Logaritmo natural
																</td>
																<td style="text-align: center;">
																	Math.log(double a)
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna el logaritmo natural (base <i>e</i>) de un valor tipo double
																</td>
																<td style="text-align: center;">
																	double logaritmo = Math.log(3.1415);
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Logaritmo en base 10
																</td>
																<td style="text-align: center;">
																	Math.log10(double a)
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna el logaritmo en base 10 de un valor tipo double.
																</td>
																<td style="text-align: center;">
																	double resultado = Math.log10(100);
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Potencia
																</td>
																<td style="text-align: center;">
																	Math.pow(double a, double b)
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna el valor del primer argumento elevado a la potencia del segundo argumento
																</td>
																<td style="text-align: center;">
																	double potencia = Math.pow(2,10);
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Aleatorio
																</td>
																<td style="text-align: center;">
																	Math.random()
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna un valor de tipo double de signo positivo, mayor o igual a 0.0 y menor que 1.0
																</td>
																<td style="text-align: center;">
																	double aleatorio = Math.random();
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Seno
																</td>
																<td style="text-align: center;">
																	Math.sin(double a)
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna el seno trigonométrico de un ángulo en <b>radianes</b>.
																</td>
																<td style="text-align: center;">
																	double resultado = Math.sin(720);
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Raíz cuadrada
																</td>
																<td style="text-align: center;">
																	Math.sqrt(double a)
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna el valor positivo y correctamente redondeado de la raíz cuadrada de un valor de tipo double
																</td>
																<td style="text-align: center;">
																	double raiz = Math.sqrt(100);
																</td>
															</tr>
															<tr>
																<td style="text-align: center;">
																	Tangente
																</td>
																<td style="text-align: center;">
																	Math.tan(double a)
																</td>																
																</td>
																<td style="text-align: center;">
																	Retorna la tangente trigonométrica de un ángulo en <b>radianes</b>.
																</td>
																<td style="text-align: center;">
																	double resultado = Math.tan(90);
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!--
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
										-->
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default2-1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2-5" href="#collapse2-5" class="tituloUnidad">
										<b>Clase Random</b>
									</a>
								</h4>
							</div>
							<div id="collapse2-5" class="panel-collapse collapse">
								<div class="panel panel-default2-1">
									<div class"panel-group" id="contenedorUnidad2">
										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-5" href="#collapse2-5-1">
														<b> Descripción </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-5-1" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Tal como índica su nombre inglés, ésta clase se utiliza para la generación de números aleatorios de manera más
													directa y fácil.
													Para utilizarla se debe importar la biblioteca correspondiente:<br>
													<b>import java.util.Random;</b> y luego crear una instancia de la clase Random de la siguiente manera:<br>
													<b> Random variable = new Random();</b> <br>
													Posteriormente usar alguno de los métodos listados y descritos en la siguiente sección.
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-5-2">
														<b> Uso </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-5-2" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													<table class="table table-hover2-4-1">														
														<th style="text-align: center;">
															Instrucción
														</th>
														<th style="text-align: center;">
															Descripción
														</th>														
														<tbody>
															<tr>
																<td style="text-align: center;">
																	variable.nextInt();
																</td>
																<td style="text-align: center;">
																	Retorna un valor entero pseudoaleatorio, uniformemente distribuido de la secuencia del generador de números aleatorios.
																</td>
															</tr>
																<td style="text-align: center;">
																	variable.nextInt(int n)
																</td>
																<td style="text-align: center;">
																	Retorna un valor entero pseudoaleatorio, uniformemente distribuido entre 0 (inclusive) y el valor especificado (exclusive).
																</td>
															</tr>
																<td style="text-align: center;">
																	variable.nextDouble()
																</td>
																<td style="text-align: center;">
																	Retorna un valor double pseudoaleatorio, uniformemente distribuido entre 0.0 y 1.0
																</td>
															</tr>
																<td style="text-align: center;">
																	variable.nextFloat()
																</td>
																<td style="text-align: center;">
																	Retorna un valor float pseudoaleatorio, uniformemente distribuido entre 0.0 y 1.0
																</td>
															</tr>
																<td style="text-align: center;">
																	variable.nextLong()
																</td>
																<td style="text-align: center;">
																	Retorna un valor long pseudoaleatorio, uniformemente distribuido de la secuencia del generador de números aleatorios.
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>

										<div class="panel panel-default2-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion2-1" href="#collapse2-5-3">
														<b> Ejemplo </b>
													</a>
												</h4>
											</div>
											<div id="collapse2-5-3" class="panel-collapse collapse in">
												<div class="panel-body contenido2-1-1-1">
													Para el ejemplo se utilizará la función nextInt(int n) ya que se puede hacer interactivo para el usuario
													<pre name="code"  class="Java:nocontrols">
														import java.util.Scanner;   //importar biblioteca
														import java.util.Random;
														public class ejemploRandom{  // nueva clase publica llamada ejemploRandom
															public static void main(String[] args){	//metodo principal para ejecutar el programa
																//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
																Scanner keyboard = new Scanner(System.in);
																Random variable = new Random();
																System.out.print("Ingrese un numero: ");
																int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
																int oculto = variable.nextInt(num);
																System.out.println("Solo tienes una oportunidad para adivinar el número secreto...");
																System.out.print("Ingresa un numero: ");
																num = keyboard.nextInt();
																if(num == oculto){
																	System.out.println("Ganaste!!");
																}
																else{
																	System.out.println("Perdiste!!");
																}
															}
														}
													</pre>
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
													<table class="table table-hover2-4-1">														
														<th style="text-align: center;">
															Caracter
														</th>
														<th style="text-align: center;">
															Descripción
														</th>														
														<tbody>
															<tr>
																<td style="text-align: center;">
																	\n
																</td>
																<td style="text-align: center;">
																	"Linefeed" o Salto de linea, se utiliza para escribir una cadena en lineas diferentes
																</td>
															</tr>
																<td style="text-align: center;">
																	\t
																</td>
																<td style="text-align: center;">
																	"Tab", se utiliza para separar una cadena, una cantidad de 4 u 8 espacios
																</td>
															</tr>
																<td style="text-align: center;">
																	\b
																</td>
																<td style="text-align: center;">
																	"Backspace" o Retroceso, se utiliza para retroceder el cursor un caracter y sobreescribir el contenido
																</td>
															</tr>
																<td style="text-align: center;">
																	\r
																</td>
																<td style="text-align: center;">
																	"Carriage Return", se utiliza para dejar el cursor al principio de la misma linea que se está escribiendo (sobreescribe)
																</td>
															</tr>
																<td style="text-align: center;">
																	\f
																</td>
																<td style="text-align: center;">
																	"Form Feed", se utiliza para forzar la impresión en una pagina nueva
																</td>
															</tr>
															</tr>
																<td style="text-align: center;">
																	\'
																</td>
																<td style="text-align: center;">
																	Se utiliza para mostrar una comilla simple en la cadena
																</td>
															</tr>
															</tr>
																<td style="text-align: center;">
																	\"
																</td>
																<td style="text-align: center;">
																	Se utiliza para mostrar una comilla en la cadena
																</td>
															</tr>
															</tr>
																<td style="text-align: center;">
																	\\
																</td>
																<td style="text-align: center;">
																	Se utiliza para mostrar un backslash simple en la cadena
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!--
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
										-->

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
													<pre name="code"  class="Java:nocontrols">
														public class ejemploCaracteresEspeciales{
															public static void main(String args[]){
																String frase = "hola a todos los amigos";
																String frase2 = "y a los que no lo son, también";
																//Uso de \n
																System.out.println(frase +"\n"+frase2);
																//Uso de \b
																System.out.println(frase +"\b\b\b"+frase2);
																//uso de \t
																System.out.println(frase +"\t\t"+frase2);
																//Uso de \r
																System.out.println(frase +"\r"+frase2);
																//Para agregar comillas "..."
																System.out.println("\""+frase+"\"");
																//Para agregar comillas simples '...'
																System.out.println("\'"+frase2+"\'");
																//Para agregar backslash \...\
																System.out.println("\\"+frase+"\\");
																//Uso de \f
																System.out.println(frase +"\f\f"+frase2);
															}
														}
													</pre>
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
													<p>Casteo, casting o conversión de tipos de datos es un procedimiento para transformar una variable
													de un tipo a otro siempre y cuando haya una relación directa entre ellas.<br> Existen 2 tipos de casting: </p>
													<p>
														<b> Casteo Implícito </b>
														<p class="indented">
															Este casteo radica en que no se necesita escribir código para que se lleve a cabo.
															Ocurre cuanso se coloca un valor pequeño dentro de un contenedor grande.															
														</p>
														<b> Casteo Explícito </b>
														<p class="indented">
															Se produce cuando se se coloca un valor grande en un contenedor pequeño.
															Es posible que ocurra una perdida de datos y deben realizarse a través de codigo fuente y como dice su nombre, 
															de forma explícita.															
														</p>
													</p>
													<p>
														Para clarificar aún más la conversión de tipos de datos entre sí, se deja la siguiente imagen
														<div align="center">
															<img src="img/casting.png" class="img-responsive" alt="Responsive image">
														</div>
													</p>

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
													<p>
														<b> Casteo Implícito </b>
														<p class="indented">
															int N = 8;   //int tiene 4 bytes <br>
															long M = N;   //long tiene 8 bytes
														</p>
														<b> Casteo Explícito </b><														<p class="indented">
															double A = 64.2; // 8 bytes <br>
															float B = A;  // Error... hay perdida de precisión <br>
															Para solucionarlo: <br>
															float B = (float)A; //De esta forma un dato de 8 bytes encaja en uno de 4
														</p>
													</p>
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
													<pre name="code"  class="Java:nocontrols">
														import java.util.*;
														public class ejemploCasteo{
															public static void main(String args[]){
																Random aleatorio = new Random();   //generar numeros aleatorios
																int numero = 67 + aleatorio.nextInt(94);	// genera numero aleatorio entre 67 y 94 para obtener un caracter de mayusculas
																char oculto = (char)numero;		// casting explicito para transformar el numero en un caracter
																System.out.println(oculto);		//mostrar caracter

																char otro = oculto;		//toma el numero anterior
																int numero2 = otro;		//casting implicito
																System.out.println(numero2);	//mostrar numero
															}
														}
													</pre>
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
										<b>Métodos de la clase String</b>
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
														<b> length() </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-1" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Retorna la cantidad de caracteres que tiene la cadena
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">
															import java.util.*;
															public class ejemploLength{
																public static void main(String args[]){
																	Scanner teclado = new Scanner(System.in);
																	System.out.print("Ingrese una frase: ");
																	String ingreso = teclado.nextLine();
																	int largo = ingreso.length();
																	System.out.println("El texto ingresado tiene: "+largo+" caracteres");
																}
															}
														</pre>
													</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-2">
														<b> equals(Objeto) </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-2" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Compara esta cadena con el objeto especificado. El resultado es verdadero si y solo si el argumento
														no es nulo y es una cadena que representa la misma secuencia de caracteres que esta cadena.
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">
															public class ejemploEquals{
																public static void main(String args[]){
																	String cadena1 = "hola";
																	String cadena2 = "hOlA";
																	if(cadena1.equals(cadena2)){
																		System.out.println("Las cadenas son iguales");
																	}
																	else{
																		System.out.println("Las cadenas NO son iguales");
																	}
																}
															}
														</pre>
													</p>	
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-3">
														<b> equalsIgnoreCase(cadena) </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-3" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Compara una cadena con otra sin considerar mayusculas o minusculas.
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">														
															public class ejemploEqualsIgnoreCase{
																public static void main(String args[]){
																	String cadena1 = "hola";
																	String cadena2 = "hOlA";
																	if(cadena1.equalsIgnoreCase(cadena2)){
																		System.out.println("Las cadenas dicen lo mismo");
																	}
																	else{
																		System.out.println("Las cadenas NO dicen lo mismo");
																	}
																}
															}
														</pre>
														Se sugiere cambiar los valores de cadena1 o cadena2 y probar un caso en el que no digan lo mismo
													</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-4">
														<b> charAt(posicion) </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-4" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Retorna el caracter de la cadena que se encuentra en la posición indicada.
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">														
															import java.util.*;
															public class ejemploCharAt{
																public static void main(String args[]){
																	Scanner teclado = new Scanner(System.in);
																	Random aleatorio = new Random();
																	System.out.print("Ingrese una frase: ");
																	String ingreso = teclado.nextLine();
																	int largo = ingreso.length();
																	int posicion = aleatorio.nextInt(largo);
																	char oculto = ingreso.charAt(posicion);
																	System.out.println("En la frase ingresada, el caracter: \'"+oculto+"\' se encontraba en la posicion:"+posicion);
																}
															}
														</pre>
													</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-5">
														<b> indexOf(caracter) </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-5" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Retorna la primera ocurrencia del caracter dado como argumento, si el caracter no se encuentra en la cadena, el valor retornado es -1.
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">														
															import java.util.*;
															public class ejemploIndexOf{
																public static void main(String args[]){
																	Scanner teclado = new Scanner(System.in);
																	System.out.print("Ingrese una frase: ");
																	String ingreso = teclado.nextLine();
																	char buscar = 'a';
																	int encontrado = ingreso.indexOf(buscar);
																	System.out.println("La primera ocurrencia del caracter \'"+buscar+"\' se encuentra en la posición: "+encontrado);
																}
															}
														</pre>
														Se sugiere cambiar el caracter a buscar para ver otros resultados
													</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-6">
														<b> substring(posicion1, posicion2) </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-6" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Retorna una subcadena desde la posicion1 incluida hasta la posicion2 excluida.
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">
															import java.util.*;
															public class ejemploSubstring{
																public static void main(String args[]){
																	Scanner teclado = new Scanner(System.in);
																	Random aleatorio = new Random();
																	System.out.print("Ingrese una frase: ");
																	String ingreso = teclado.nextLine();
																	int largo = ingreso.length();		//largo de la cadena ingresada
																	int num = aleatorio.nextInt(largo-1);	//generacion aleatoria de un numero
																	int num2 = aleatorio.nextInt(largo-1);
																	while (num2 < num){		//Este while es para evitar que num2 sea mayor que num
																		num2= aleatorio.nextInt(largo-1);
																	}
																	String nuevo = ingreso.substring(num, num2);	//uso de substring con los numeros generados
																	System.out.println("La frase ingresada fue: "+ingreso);
																	System.out.println("La frase cortada aleatoriamente fue: "+ nuevo);
																}
															}
														</pre>
													</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-7">
														<b> lastIndexOf(caracter) </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-7" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Retorna la posición de la última ocurrencia en la cadena del caracter dado.
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">
															import java.util.*;
															public class ejemploLastIndexOf{
																public static void main(String args[]){
																	Scanner teclado = new Scanner(System.in);
																	System.out.print("Ingrese una frase: ");
																	String ingreso = teclado.nextLine();
																	char buscar = 'a';
																	int encontrado = ingreso.lastIndexOf(buscar);
																	System.out.println("La ultima ocurrencia del caracter \'"+buscar+"\' se encuentra en la posición: "+encontrado);
																}
															}
														</pre>
													</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-8">
														<b> trim() </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-8" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Retorna una copia de la cadena sin los espacios en blanco al principio y al final de la cadena.
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">
															public class ejemploTrim{
																public static void main(String args[]){
																	String frase = "        esta es una frase con muchos espacios en sus extremos             ";
																	String nueva = frase.trim();
																	System.out.println("Primera frase: "+frase);
																	System.out.println("Nueva frase: "+nueva+"\n pero ahora ya no tiene esos espacios porque usamos trim");
																}
															}
														</pre>
													</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-9">
														<b> toLowerCase(), toUpperCase() </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-9" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Transforma toda la cadena ya sea a minusculas (toLowerCase()) o a mayusculas (toUpperCase()).
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">
															public class ejemploLowerUpper{
																public static void main(String args[]){
																	String frase = "eSTa eS uNa FRaSe Que TieNe LaS VoCaLeS eN MiNuSCuLaS";
																	System.out.println("Asi se ve con el metodo toLowerCase(): "+ frase.toLowerCase());
																	System.out.println("Asi se ve con el metodo toUpperCase(): "+ frase.toUpperCase());		
																}
															}
														</pre>
													</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default3-1-1">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="accordion3-3" href="#collapse3-3-10">
														<b> concat(cadena) </b>
													</a>
												</h4>
											</div>
											<div id="collapse3-3-10" class="panel-collapse collapse">
												<div class="panel-body contenido3-1-1-1">
													<p>
														Concatena la cadena especificada al final de esta cadena. Se usará en vez del '+'.
													</p>
													<p>
														<pre name="code"  class="Java:nocontrols">
															public class ejemploConcat{
																public static void main(String args[]){
																	String frase1 = "Esto va al principio";
																	String frase2 = " y esto va después de lo anterior...";
																	System.out.println(frase1.concat(frase2));
																}
															}
														</pre>
													</p>
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
													<p> 
														De la clase Integer se utilizarán los siguientes métodos:
													</p>
													<p>
														<b> valueOf() </b>
														<p class="indented">
															Éste metodo retorna el ordinal del caracter dado como parámetro
															Para utilizarlo, la instrucción se escribe de la siguiente forma:<br>
																<i> Integer.valueOf(caracter); </i><br>
														</p>
														<p>
															<b> Ejemplo </b>
															<pre name="code"  class="Java:nocontrols">
																public class ejemploValueOf{
																	public static void main(String args[]){
																		char f1 = '1';  //notar que el 1 aqui está como caracter
																		int valor = Integer.valueOf(f1);  //aqui se guarda el ordinal del caracter 1
																		System.out.println(valor);  
																	}
																}
															</pre>
														</p>
													</p>

													<p>
														<b> parseInt() </b>
														<p class="indented">
															Éste metodo retorna el valor numérico de la cadena dada como parámetro
															Para utilizarlo, la instrucción se escribe de la siguiente forma:<br>
																<i> Integer.parseInt(cadena); </i><br>
														</p>
														<p>
															<b> Ejemplo </b>
															<pre name="code"  class="Java:nocontrols">
																public class ejemploParseInt{
																	public static void main(String args[]){
																		String f1 = "123";  //notar que el 123 aqui está como cadena
																		int valor = Integer.parseInt(f1);  //aqui se transforma esa cadena en numero si es posible
																		System.out.println(valor); 
																		valor++;
																		System.out.println(valor);  
																	}}
															</pre>
														</p>
													</p>

													<p>
														<b> toString() </b>
														<p class="indented">
															Éste metodo retorna el valor como cadena de la clase que corresponda, ya que este método
															existe tanto en la clase Character como en la clase Integer y se utiliza para poder usar el print y concat con los datos transformados
															Para utilizarlo, la instrucción se escribe de la siguiente forma:<br>
																<i> Integer.toString(numero); </i><br>
																<i> Character.toString(caracter); </i><br>
														</p>
														<p>
															<b> Ejemplo </b>
															<pre name="code"  class="Java:nocontrols">
																public class ejemploToString{
																	public static void main(String args[]){
																		int a = 2134;
																		char b = 'D';
																		String cadena = "Los datos son: ";
																		cadena = cadena.concat(Integer.toString(a)).concat(" y ademas ").concat(Character.toString(b));
																		System.out.println(cadena);
																	}
																}
															</pre>
														</p>
													</p>
												</div>
											</div>
										</div>
										<!--
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
										</div> -->
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
													<p>
														Hasta el momento, hemos trabajado con varios tipos de datos: byte, short, int, long, float, double, char y boolean (que son 
														los <i>tipos de datos primitivos</i>); además de
														utilizar las clases String, Integer, Character, Random y Scanner.
														Para introducir el concepto de arreglos de datos, debemos comprender que trabajaremos con conjuntos de datos, es decir, con
														una estructura que me permite guardar muchos elementos de un mismo tipo.
													</p>
													<p>	
														<div align="center">
															<img src="img/datos-estructurados.png" class="img-responsive" alt="Responsive image">
														</div>
													</p>
													<p>
														Estos tipos estructurados de datos se llaman 'Arreglos', y se pueden realizar diversas operaciones sobre ellos, además de que
														prestan una gran utilidad en variadas situaciones.
													</p>
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
													<p>
														Para declarar un arreglo, lo primero que debo tener claro, es de qué tipo de dato será mi arreglo, ya que sólo se me permite guardar datos
														de un mismo tipo.
														Si quiero un arreglo de enteros lo declararé de la siguiente forma: int [ ] miArregloDeInt;<br>
														Si fuera de booleanos: boolean[ ] nombreArreglo;<br>
														Y dado que los arreglos para utilizarse con datos, se les asigna una cantidad fija de memoria, debemos conocer cuántos datos tendrá como máximo nuestro arreglo.
														Al saberlo, creamos el espacio en memoria con el comando <i>new</i><br>
														Para el caso del arreglo de enteros con 7 "casillas" se utuliza así:<br>
														miArregloDeInt = new int [7];<br>
														Si fuera el caso de los booleanos con 4 elementos:<br>
														nombreArreglo = new boolean[4];<br>
														Si conocemos todo lo necesario, podemos declarar y asignar valores en una sola linea:<br>
														int [] miArreglo = new int[7];<br>
														Con esto, tenemos una estructura en memoria representada en la siguiente imagen
													</p>
													<p>	
														<div align="center">
															<img src="img/datos-estructurados2.png" class="img-responsive" alt="Responsive image">
														</div>
													</p>
													<p>
														Como se ve, está la estructura pero está vacía...y corresponde ingresarle datos:<br>
													</p>
													<p class="indented">
														miArreglo[0] = 17;<br>
														miArreglo[1] = 73;<br>
														miArreglo[2] = 32;<br>
														miArreglo[3] = 26;<br>
														miArreglo[4] = 64;<br>
														miArreglo[5] = 48;<br>
														miArreglo[6] = 87;
													</p>
													<p>	
														En color verde se muestran las posiciones del arreglo
														<div align="center">
															<img src="img/datos-estructurados3.png" class="img-responsive" alt="Responsive image">
														</div>
													</p>
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
													<pre name="code"  class="Java:nocontrols">
														import java.util.*;
														public class ejemploDatosEstructurados{
															public static void main(String args[]){
																Random aleatorio = new Random();
																Scanner teclado = new Scanner(System.in);
																System.out.print("Ingrese cantidad de elementos: ");
																int n = teclado.nextInt();
																int[] Arr = new int[n];  //Declaracion y asignacion de memoria del arreglo

																for(int i=0; i < n; i++){
																	Arr[i] = aleatorio.nextInt(50);  //Se llena el arreglo con numeros aleatorios entre 0 y 50
																}

																//Se muestra el arreglo
																System.out.println("El arreglo generado es: ");
																for(int i=0; i < n; i++){
																	System.out.print(Arr[i]);
																	System.out.print("\t");			
																}
															}
														}
													</pre>
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
													Similarmente al metodo de la clase String (length()), para calcular el largo de un arreglo se utiliza la misma palabra pero sin paréntesis al final.
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
													<p>
														Esta es otra forma de definir un arreglo directamente:<br>
														int[ ] arr = {54,23,12,44,776,23,6};<br>
														int largo = arr.length;
													</p>
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
													<pre name="code"  class="Java:nocontrols">
														import java.util.*;
														public class ejemploLength2{
															public static void main(String args[]){
																Random aleatorio = new Random();
																Scanner teclado = new Scanner(System.in);
																int num = aleatorio.nextInt(6);
																int[] arr= new int[num];
																for(int i=0; i < num; i++){
																	System.out.print("Ingrese numero: ");
																	arr[i] = teclado.nextInt();
																}
																int largo = arr.length;  //en este caso, num = largo
																System.out.println("El arreglo resultante fue: ");
																for(int i=0; i < largo; i++){
																	System.out.print(arr[i]);
																	System.out.print("\t");
																}
																System.out.println();
																System.out.print("El largo del arreglo es: ");
																System.out.println(largo);
															}
														}
													</pre>
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
													Este metodo es utilizado para copiar correctamente un arreglo en otro espacio en memoria, ya que hacer una igualdad, sólo
													termina por referenciar al mismo espacio en memoria con nombres diferentes.
													Copia un arreglo de la fuente indicada, comenzando desde la posición especificada, a la posición especificada del arreglo de destino.
													Para utilizarlo es necesario importar la biblioteca lang
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
													import java.lang.*;<br>
													System.arraycopy(Object src, int srcPos, Object dest, int destPos, int length);<br>
													Para usar este metodo es necesario conocer los parámetros de este:
													<li>
														Object src: Arreglo fuente
													</li>
													<li>
														int srcPos: Posición inicial en el arreglo fuente
													</li>
													<li>
														Object dest: Arreglo de destino
													</li>
													<li>
														int destPos: Posición inicial en el arreglo de destino
													</li>
													<li>
														int length: Número de elementos del arreglo a ser copiados
													</li>
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
													<pre name="code"  class="Java:nocontrols">
														import java.lang.*;
														public class ejemploArrayCopy{
															public static void main(String args[]){
																int[] arr = {54,23,657,23,67,894,2,1,234};
																int[] otro = {9,7,5,3,1,2,6,4,6,7,5,2};

																System.out.println("Arreglo antes de copiar");
																for(int i=0; i < otro.length; i++){
																	System.out.print(otro[i]);
																	System.out.print("\t");			
																}
																//se copian 6 elementos, desde la posicion 0 de arr
																//pero se copian desde la posicion 3 de otro
																System.arraycopy(arr,0,otro,3,arr.length-3); 

																System.out.println();
																System.out.println("Arreglo copiado: ");
																for(int i=0; i < otro.length; i++){
																	System.out.print(otro[i]);
																	System.out.print("\t");			
																}
																System.out.println();
															}
														}
													</pre>
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
<footer>
	<div align="center">
		<img src="img/creative-commons.png" class="img-responsive" alt="Responsive image">
	</div>
</footer>