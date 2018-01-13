<?php 

require_once "../conexion/conexion.php";

class login extends Conexion{

	private $id;
	private $password;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->password = "";

	} //Fin del constructor


function login($usuario, $password){

       //Evito inyecciones sql

		//con htmlentities evito caracteres especiales
		$usuario_seguro = htmlentities($usuario);
        $password_seguro = htmlentities($password);

        $usuario_real = mysqli_real_escape_string($this->db, $usuario_seguro);
        $password_real= mysqli_real_escape_string($this->db, $password_seguro);

        //Igualo los atributos de la clase con los recibidos en el método

		$this->id = $usuario_real;
		$this->password = hash("sha256", $password_real);

		//Consulta
		$sql = $this->db->query("SELECT * FROM alumno WHERE id_alumno = '".$this->id."' AND clave = '".$this->password."' ");
		$sql2 = $this->db->query("SELECT * FROM profesores WHERE id_profesor = '".$this->id."' AND clave = '".$this->password."' ");
		$sql3 = $this->db->query("SELECT * FROM administrador WHERE id_administrador = '".$this->id."' AND clave = '".$this->password."' AND estado  = 'Activo'");


		//Verifico si encuentra un usuario igual

		if ($sql->num_rows > 0) { 

			$row = $sql->fetch_assoc(); //En la variable row guardaré todos los datos del usuario que encontró 

			session_start(); //Creo una sesión

     		$_SESSION['logged-in'] = true; //Y una variable que me ayudará para saber si está logeado o no

     		//Guardo en variables de sesión los datos del usuario

			$_SESSION['alumno']= $usuario;
     		return 1;

		}else if ($sql2->num_rows > 0) { 

			$row = $sql2->fetch_assoc(); //En la variable row guardaré todos los datos del usuario que encontró 

			session_start(); //Creo una sesión

     		$_SESSION['logged-in'] = true; //Y una variable que me ayudará para saber si está logeado o no

     		//Guardo en variables de sesión los datos del usuario
     		$_SESSION["profesor"]= $usuario;
     		return 2;

		}else if ($sql3->num_rows > 0) { 

			$row = $sql3->fetch_assoc(); //En la variable row guardaré todos los datos del usuario que encontró 

			session_start(); //Creo una sesión

     		$_SESSION['logged-in'] = true; //Y una variable que me ayudará para saber si está logeado o no

     		//Guardo en variables de sesión los datos del usuario
     		$_SESSION["admin"]= $usuario;
     		return 3;

		}else{

			return 4;

		}

	} //Fin de login


}

 ?>
