<?php
class funciones{
	private $vector = array();
	private $ultimoDirectorio="*";
	public function obtenerListadoDirectorio($directorio){

		if ( $gestor = opendir( $directorio ) ){
			while ( false !== ( $entrada = readdir( $gestor ) ) ){
						if ( $entrada!="." && $entrada!=".." ){
							if( is_dir($entrada) && !(in_array($this->ultimoDirectorio, $this->vector) ) ){
								$this->ultimoDirectorio = $entrada;
								$this->vector[$entrada]=array();
								$this->obtenerListadoDirectorio($entrada);
							}else{
								$this->vector[$this->ultimoDirectorio][] = $entrada;
							}
				}
			}
			$this->ultimoDirectorio = "*";
		}
		krsort($this->vector);
		return $this->vector;
	}
}
//$o = new funciones();
//echo "<pre>".print_r($o->obtenerListadoDirectorio("."),true)."</pre>";
?>