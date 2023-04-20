
<?php
	include('conn.php');
	mysqli_query($conn,"delete from tmp");
	header('location: menu.php');
?>

<h2>Pedido cancelado</h2>
<p>El pedido fue cancelado, vuelve a la página de compra dando clic <a href="menu.php">aquí</a></p>