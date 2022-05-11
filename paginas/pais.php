<?php
    include("../cxn.php");

    // esta función se va a llamar al cargar el primer combo
    function obtenerTodosLosPaises() {
        $paises = array();
        $sql = "SELECT idpais, nombre 
                FROM paises"; 

        $db = obtenerConexion();

        // obtenemos todos los países
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase país y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
            $row['nombre'] = mb_convert_encoding($row['nombre'], 'UTF-8', mysqli_character_set_name($db));          
            $pais = new pais($row['idpais'], $row['nombre']);
            array_push($paises, $pais);
        }

        cerrarConexion($db, $result);

        // devolvemos el arreglo
        return $paises;
    }

    class pais {
        public $id;
        public $nombre;

        function __construct($id, $nombre) {
            $this->id = $id;
            $this->nombre = $nombre;
        }
    }
?>