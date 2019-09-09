<?php  
include_once 'class/Triangulo.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	$obj = new Triagulo2 ( 10, 10, 10);
	//$obj -> setA ( 10 );
	//$obj -> setB ( 10 );
	//$obj -> setC ( 10 );
	$obj -> verificaSeETriangulo ( );
	?>
</body>
</html>