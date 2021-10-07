<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Realizar Conexion a BD
// Realizar consulta SQL
class visitas {

    public $matricula;
    public $nombre;
    public $sexo;

    public function __construct($matricula, $nombre, $sexo) {
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->sexo = $sexo;
    }

    public static function consultar() {
        include ('conexion.php');
        $consulta = "select * from alumnos";
        echo ('<br>');
        // echo ($consulta);
        $resultado = mysqli_query($mysqli, $consulta);
        if (!$resultado) {
            echo 'No pudo Realizar la consulta a la base de datos';
            exit;
        }
        $lalumnos = [];
        while ($visitas = mysqli_fetch_array($resultado)) {
            $lalumnos[] = new visitas($visitas['matricula'], $visitas['nombre'], $visitas['sexo']);
        }
        return $lalumnos;
    }
	
	   public static function login($_user, $_password) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('SELECT user, password  FROM user WHERE user = ? and password = ?');
        $stmt->bind_param('ss', $_user, $_password);
        $stmt->execute();

        $resultado = $stmt->get_result();
        while ($filasql = mysqli_fetch_array($resultado)) {
            // Imprimir por Arreglo Asociado
            echo $filasql['user'] . ' ';
            echo $filasql['password'] . ' ';
            
            // initialize session variables
            session_start();
           // $_SESSION['loggedDataTime']   = datatime();

            $_SESSION['loggedUserName'] = $filasql['user'] ;
  
        }
        $acceso = false;
        if ($stmt->affected_rows == 1) {
            $acceso = true;
        }
        $mysqli->close();
        return $acceso;
    }

}

?>
