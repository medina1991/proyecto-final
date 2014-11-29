<?php
include("conexion.php");

	class usuario{
		private $cedula;
		private $nombre;
		private $apellido;
		private $email;
		private $login;
		private $permiso;
		
                function __construct($cedula, $nombre, $apellido, $email, $login, $permiso) {
                    $this->cedula = $cedula;
                    $this->nombre = $nombre;
                    $this->apellido = $apellido;
                    $this->email = $email;
                    $this->login = $login;
                    $this->permiso = $permiso;
                }

                public function __destruct(){}	
		public function get_cedula()
		{return $this->cedula;}
		public function get_nombre()
		{return $this->nombre;}
	    public function get_apellido()
		{return $this->apellido;}	
		public function get_email()
		{return $this->email;}
		public function get_login()
		{return $this->login;}
		public function get_permiso()
		{return $this->permiso;}


		public function verificar()
		{	
session_start();		
$consulta= mysql_query("select*from usuarios where usuario_identificador='$this->cedula' and usuario_contrasena='$this->login'");
		
				if($fila=mysql_fetch_array($consulta))
				{
					$_SESSION['autenticado']= "SI";
					$_SESSION['identificacion']=$fila['usuario_identificador'];

					if($fila['usuario_permisos']=='colaborador')
					{
			 			header("location: ../vistas/colaborador.php");
					}
					else if($fila['usuario_permisos']=='aspirante')
					{
						header("location: ../vistas/aspirante.php");
					}
                                        else if($fila['usuario_permisos']=='administrador')
					{
			 			header("location: ../vistas/administrador.php");
                                                echo"<script language='javascript'> alert('Administrador');  </script>";
					}
					                                        
                                        else
					{
						header("location: ../index.php");
                                                echo"<script language='javascript'> alert('Error de Inicio');  </script>";
					}
				}
									
				else
				{ 
					header("location: ../index.php");}
		}

///////////////////////////////////////////
	
}
?>