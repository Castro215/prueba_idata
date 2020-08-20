<div class="container">
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Nombres</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group col-md-6">
      <label for="ape">Apellidos</label>
      <input type="text" class="form-control" name="ape" id="ape">
    </div>
  </div>
  <div class="form-group">
    <label for="tel">Telefono</label>
    <input type="num" class="form-control" name="tel" id="tel" placeholder="Ingrese Numero">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Correo</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group col-md-6">
      <label for="years">Edad</label>
      <input type="text" class="form-control" name="years" id="years">
    </div>
  </div>
  <input type="submit" name="guarda" class="btn btn-primary" value="Guardar">
</form>
</div>
<?php 
    if (isset($_REQUEST['guarda'])) {
      $nombre=$_POST['name'];
      $apellido=$_POST['ape'];
      $telefono=$_POST['tel'];
      $correo=$_POST['email'];
	    $años=$_POST['years'];

    $con = new mysqli("localhost", "root", "", "prueba_idata");
    $bd=$con->query("INSER INTO user (name, ape, tel, email, years) VALUES ('$nombre','$apellido','$telefono', '$correo', '$años')");}
?>