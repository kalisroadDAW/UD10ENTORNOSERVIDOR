<!DOCTYPE html>
<html>
<body>



<h1>actualizar<span class="subtitulo">Create Read Update Delete</span></h1>

<?php



include("db.php");


if (!isset($_POST['bot_actualizar'])){



    $id=$_GET["id"];

    $nom=$_GET["nom"];
    
    $pos=$_GET["pos"];
    
    $num=$_GET["num"];
    
    $age=$_GET["age"];
    
    //$base->query("DELETE * FROM clubbasket.jugador WHERE id=$id");
    


}else{

    $id=$_POST["id"];

    $nom=$_POST["nom"];

    $pos=$_POST["pos"];

    $num=$_POST["num"];

    $age=$_POST["age"];

    $sql = "UPDATE clubbasket.jugador SET nombreJugador=:minom, posicion=:mipos, numero=:minum, edad=:miedad WHERE id=:miid";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":miid"=>$id,":minom"=>$nom,":mipos"=>$pos,":minum"=>$num,":miedad"=>$age));

    header("Location:clubbasket.php");

}




?>

 <form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
     <table width="25%" border="0" align="center">
         <tr>
             <td></td>
             <td><label for="id"></label>
             <input type="hidden" name="id" value="<?php echo $id?>"></td>
         </tr>
         <tr>
             <td></td>
             <td><label for="nom"></label>
             <input type="text" name="nom" value=" <?php echo $nom?>"></td>
         </tr>
         <tr>
             <td></td>
             <td><label for="pos"></label>
             <input type="text" name="pos"value=" <?php echo $pos?>"></td>
         </tr>
         <tr>
             <td></td>
             <td><label for="num"></label>
             <input type="text" name="num" value=" <?php echo $num?>"></td>
         </tr>
         <tr>
             <td></td>
             <td><label for="age"></label>
             <input type="text" name="age" value=" <?php echo $age?>"></td>
         </tr>
         <tr>
         <td colspan="2"><input type='submit' name='bot_actualizar' id='bot_actualizar' value='Actualizar'></a></td>
         </tr>







     </table>




 </form>



</body>
</html>



