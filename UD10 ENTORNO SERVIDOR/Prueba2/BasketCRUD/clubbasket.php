<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

<?php 

include("db.php");

$conexion=$base->query("SELECT * FROM clubbasket.jugador");

$registros = $conexion->fetchAll(PDO::FETCH_OBJ);

//$registro=$base->query()->fetchAll(PDO::FETCH_OBJ);


?>


<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Posición</td>
      <td class="primera_fila">Número/Dorsal</td>
      <td class="primera_fila">Edad</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 

    <?php 
    
    foreach($registros as $jugador):
    
    
    ?>
   
		
   	<tr>
      <td><?php echo $jugador->id?></td>
      <td><?php echo $jugador->nombreJugador?></td>
      <td><?php echo $jugador->posicion?></td>
      <td><?php echo $jugador->numero?></td>
      <td><?php echo $jugador->edad?></td>
 
      <td class="bot"><input type='button' name='del' id='del' value='Borrar'></td>
      <td class='bot'><a href="api.php?id=<?php echo $jugador->id?>
       & nom=<?php echo $jugador->nombreJugador?> 
       & pos=<?php echo $jugador->posicion?>
       & num=<?php echo $jugador->numero?> 
       & age=<?php echo $jugador->edad?>">
        <input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr> 
    
    <?php 
    
    endforeach;
    
    
    ?>
    
    


	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>

<p>&nbsp;</p>
</body>
</html>