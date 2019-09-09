<?php  
// classe triângulo
class Triagulo {

	protected $a;
	protected $b;
	protected $c;

	public function __construct ( $a = 0, $b = 0, $c = 0 ) {
		$this -> a = $a;
		$this -> b = $b;
		$this -> c = $c;
	}

	public function getA ( ) {
		return $this -> a;
	}

	public function setA ( $a ) {
		$this -> a = $a;
	}

	public function getB ( ) {
		return $this -> b;
	}

	public function setB ( $b ) {
		$this -> b = $b;
	}

	public function getC ( ) {
		return $this -> c;
	}

	public function setC ( $c ) {
		$this -> c = $c;
	}

	public function verificaSeETriangulo ( ) {
		$flag = false;
		if ( ( $this -> a < $this -> b + $this -> c ) AND ( $this -> b < $this -> a + $this -> c ) 
			AND ( $this -> c < $this -> a + $this -> b ) ) {
				$flag = true;
		}
		return $flag;
	}
}

class Triagulo2 extends Triagulo {
	public function verificaSeETriangulo ( ) {
		$flag = parent::verificaSeETriangulo ( );
		if ( $flag == true ) {
				$msg = "Os valores informados representam um triângulo";
		} else {
			$msg = "Os valores informados não representam um triângulo";
		}
		echo $msg;
	}
}
?>