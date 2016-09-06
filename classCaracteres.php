<?php
class Caracteres {

	public function mostrar(){
		//Iniciar conexión
		$bd= new connexio();
		//Sql
		$result=$bd->query("SELECT * FROM parrafo ORDER BY Id DESC");
		//Array
		$parrafo=array();
		$i=0;
		//Bucle para rellenar la array
		while ($row = $result->fetch_object()) {
			$i++;
			$parrafo[]=array("Num"=>$i,"Id"=>$row->Id,"Texto"=>$row->texto);
		}
		//Imprimir el array parrafo en un json
		$imprime= json_encode($parrafo);
		// Retorno de json
		return $imprime;
		//Cerrar base de datos y sql
		$bd->cerrarconexion($bd,$result);

	}

	public function insertar($texto){
		//Iniciar conexión
		$bd = new connexio();
		$sql = "INSERT INTO parrafo (texto) VALUES ('".$texto."')";
  
        if($bd->query($sql)) return true;
        else return false;
        $bd->close();

	}

}