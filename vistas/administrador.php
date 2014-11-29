<?php include("header.php");?>
<?php include("../modelos/autenticacion.php");?>
<?php include("head.php");?>	
<?php include("./BarraNavegacionadmin.php");?>			
		<div>
				 <nav>
				  <ul>
				   <li><a>ADMIN</li>
				   <li><a><?php
				   //session_start();
 include("../modelos/conexion.php");
$identificacion = $_SESSION['identificacion'];
                             
		$consulta=mysql_query("select * from usuarios where usuario_identificador='$identificacion'");
                
						while($fila=mysql_fetch_array($consulta))
						{
                                                   
							echo "<h1>".$fila['usuario_nombre']."</h1>";
						}
				   ?>
				   </a></li>
				   <li><a href="datosPsicologo.php">Datos personales</a></li>
				   <li><a href="cambiarContrasena.php">Cambiar Contraseña</a></li>
				  </ul>
				 </nav>
				</div><br>
                                		<?php include("footer.php");?>		

	
				

