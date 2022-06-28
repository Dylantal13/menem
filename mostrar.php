<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jbsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.m">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<?php 
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
	    $email = $row['email'];
	    $fechareg = $row['fecha_reg'];
	    ?>
   <body>
	<div>
   <table id="example" class="table table-striped" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha Registro</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $id?></td>
                <td><?php echo $nombre?></td>
                <td><?php echo $email?></td>
                <td><?php echo $fechareg?></td>
            </tr>
		</tbody>

  <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"> </script>
</body>
</html>

	    <?php
	    }
	}
}
?>