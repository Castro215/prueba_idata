<?php 
    include 'head.php';
    $con = new mysqli("localhost", "root", "", "prueba_idata");
    $bd=$con->query("SELECT * FROM user");
    while ($validar=mysqli_fetch_array($bd)) {
?>

<div>
						<table border="1">
							<tr>
								<td name="idTable">Id</td>
								<td>Nombre</td>
								<td>Apellido</td>
								<td>Telefono</td>
								<td>Correo</td>
                                <td>Edad</td>
                                <td>Acciones</td>
							</tr>
							<?php foreach ($bd as $validar){ ?>
							<tr>
								<td><?php echo $validar['id'] ?></td>
								<td><?php echo $validar['name'] ?></td>
								<td><?php echo $validar['ape']; ?></td>
								<td><?php echo $validar['tel'] ?></td>
								<td><?php echo $validar['email'] ?></td>
                                <td><?php echo $validar['years'] ?></td>
                                <td><button name="elimina" type="button">Eliminar</button></td>
						</tr>
                            <?php }}?>
		</table>
	</div>

<?php 

    if (isset($_REQUEST['elimina'])) {
    $con = new mysqli("localhost", "root", "", "prueba_idata");
    $bd=$con->query("DELETE user WHERE id='$_REQUEST[idTable]'");
    }
?>