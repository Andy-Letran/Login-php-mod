<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","system");

$consulta="SELECT*FROM users where username='$usuario' and password='$contraseña'";
//$consulta="SELECT Count(*)FROM users where username='loquesea' and password='loquesea'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("Index.php");
    ?>
    
    <div class="alert alert-danger mx-auto" role="alert" style="position:absolute; top:560px; ">
 error en la autenticacion de datos
</div>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
