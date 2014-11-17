<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <link rel=stylesheet href="../css/pc1.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <header>
                <div id="titulo">
                    <div id="logo">
                    </div>
                    <h1>Universidad Distrital Francisco Jose de Caldas</h1>

                </div>
                <div style="clear:both;"></div>
            </header>
            <section>
                <div id="contieneblog">

                    <aside id="articuloss">
                        <div>
                            <article  contenteditable="true">
                                <h3>Administrador desde  esta sección usted puede editar los datos de cualquier Colaborador</h3><br>
                                <?php
                                include("../modelos/conexion.php");


                                $colaborador_cedula = $_GET['cedula_colaborador'];

                                $consulta = mysql_query("select *from colaborador where (colaborador_id='$colaborador_cedula')");

                                if ($row = mysql_fetch_array($consulta)) {

                                    $colaborador_nombre = $row['colaborador_nombre'];
                                    $colaborador_apellido = $row['colaborador_apellido'];

                                    $colaborador_correo = $row['colaborador_email'];
                                    $colaborador_ciudad = $row['colaborador_cel'];
                                    $colaborador_carrera = $row['colaborador_carrera'];
                                }
                                ?>

                                <h3>EDITAR DATOS DE COLABORADOR</h3><br>
                                <form name="form" method="post" action="../controladores/C_Colaborador.php" > 
                                    <table align="center">
                                        <tr>
                                            <td class="registr">Identificación</td>
                                            <td class="registr"><input type="text" name="usuario" title="usuario" readonly="readonly" value=''></td>
                                        </tr>
                                        <tr>
                                            <td class="registr">Nombre</td>
                                            <td class="registr"><input type="text" name="nombre" title="nombre" value='<?php echo  $colaborador_nombre; ?>'></td>
                                        </tr>
                                        <tr>
                                            <td class="registr">Apellido</td>
                                            <td class="registr"><input type="text" name="apellido" title="apellido" value='<?php echo $colaborador_apellido; ?>'></td>
                                        </tr>
                                        <tr>
                                            <td class="registr">Correo</td>
                                            <td class="registr"><input type="text" name="correo" title="correo" value='<?php echo $colaborador_correo; ?>'></td>
                                        </tr>
                                        <tr>
                                            <td class="registr">Login</td>
                                            <td class="registr"><input type="password" name="login" title="login" readonly="readonly" value='<?php echo $colaborador_ciudad; ?>'></td>
                                        </tr>
                                          
                                        <script language="JavaScript">function modificarColaborador() {
                                                document.form.txtoperacion.value = 'modificarColaborador';
                                            }</script>    
                                        <td colspan="2" align="center" class="registr"> <input type="submit" name="Submit" value="Actualizar Datos Colaborador" onClick="modificarColaborador()" >
                                            <input type='hidden' name='txtoperacion' value='des'>
                                        </td></td>
                                        </tr>
                                    </table>
                                </form> 					
                        </div>
                    </aside>
                    <div style="clear:both"></div>
                </div>
            </section>
            <div style="clear:both"></div>
            <footer>
                <h6>Universidad Distrital Francisco Jose de Caldas</h6>
            </footer>
        </div>
    </body>
</html>
