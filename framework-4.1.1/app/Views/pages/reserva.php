<?php
		#$connection = mysqli_connect("localhost", "root", "");
		#$db = mysqli_select_db($connection, 'webapp');
		$db = mysqli_connect("localhost", "webappuser", "aq7k9K804rVcus1Z", "webapp");
		
		$query = "SELECT * FROM reserva";
		$query_run = mysqli_query($db, $query);
		
?>

<table class="table">
  <thead>
    <tr class="bg-warning">
      <th scope="col" class="text-black">ID de la reserva</th>
      <th scope="col" class="text-black">ID del usuario</th>
      <th scope="col" class="text-black">Fecha de inicio de la reserva</th>
      <th scope="col" class="text-black">Fecha de fin de la reserva</th>
    </tr>
  </thead>
  <?php
  		if($query_run){
			foreach($query_run as $row){
  ?>
				<tbody>
					<tr>
						<td class="text-white"><?php echo $row['id_reserva ']; ?></td>
						<td class="text-white"><?php echo $row['id_usuario']; ?></td>
						<td class="text-white"><?php echo $row['fecha_reserva']; ?></td>
						<td class="text-white"><?php echo $row['fecha_fin_reserva']; ?></td>
					</tr>
				</tbody>
	<?php
			}
		}
	?>
  
</table>