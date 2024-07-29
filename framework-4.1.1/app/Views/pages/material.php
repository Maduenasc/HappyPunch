<?php
		#$connection = mysqli_connect("localhost", "root", "");
		#$db = mysqli_select_db($connection, 'webapp');
		$db = mysqli_connect("localhost", "webappuser", "aq7k9K804rVcus1Z", "webapp");
		
		$query = "SELECT * FROM equipo";
		$query_run = mysqli_query($db, $query);
		
?>

<table class="table">
  <thead>
    <tr class="bg-warning">
      <th scope="col" class="text-black">ID</th>
      <th scope="col" class="text-black">Equipo disponible</th>
      <th scope="col" class="text-black">Nombre del equipo</th>
      <th scope="col" class="text-black">Descripción</th>
    </tr>
  </thead>
  <?php
  		if($query_run){
			foreach($query_run as $row){
  ?>
				<tbody>
					<tr>
						<td class="text-white"><?php echo $row['id_equipo']; ?></td>
						<td class="text-white"><?php echo $row['num_equipo']; ?></td>
						<td class="text-white"><?php echo $row['nombre_equipo']; ?></td>
						<td class="text-white"><?php echo $row['Descripción']; ?></td>
					</tr>
				</tbody>
	<?php
			}
		}else{
			echo "No hay equipo disponible";
		}
	?>
  
</table>