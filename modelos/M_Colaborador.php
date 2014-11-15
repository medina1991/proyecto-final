<?php

include("conexion.php");
class colaborador {
private $identificacion;
private $pass;
private $email;
private $nombre;
private $apellido;
private $celular;
private $materia; 
private $carrera; 
private $semestre;
private $sexo; 

function __construct($identificacion, $pass, $email, $nombre, $apellido, $celular, $materia, $carrera, $semestre, $sexo) {
    $this->identificacion = $identificacion;
    $this->pass = $pass;
    $this->email = $email;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->celular = $celular;
    $this->materia = $materia;
    $this->carrera = $carrera;
    $this->semestre = $semestre;
    $this->sexo = $sexo;
}
public function __destruct(){}	
public function getIdentificacion() {
    return $this->identificacion;
}

public function getPass() {
    return $this->pass;
}

public function getEmail() {
    return $this->email;
}

public function getNombre() {
    return $this->nombre;
}

public function getApellido() {
    return $this->apellido;
}

public function getCelular() {
    return $this->celular;
}

public function getMateria() {
    return $this->materia;
}

public function getCarrera() {
    return $this->carrera;
}

public function getSemestre() {
    return $this->semestre;
}

public function getSexo() {
    return $this->sexo;
}

public function insertar()  
		{
    $consulta="insert into colaborador(colaborador_id,colaborador_pass,colaborador_email,colaborador_nombre,colaborador_apellido,colaborador_cel,colaborador_materia,colaborador_carrera,colaborador_semestre,colaborador_sexo) values ('$this->identificacion','$this->pass','$this->email','$this->nombre','$this->apellido','$this->celular','$this->materia','$this->carrera','$this->semestre','$this->sexo')";
			
			if(mysql_query($consulta))
			{ 
				echo"<script language='javascript'> alert('El registro es un EXITO');  </script>";
				echo"<script language='javascript'>location.href=\"../vistas/menu_admin.php\"   </script>";		
			} 
			else
			{ 
				/*echo mysql_error();*/
				echo"<script language='javascript'>location.href=\"../vistas/ingresarUsuario.php\"</script>";			
			}  
	    }


}
?>
