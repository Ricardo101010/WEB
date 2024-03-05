<?php 
include("conect_db.php");

if ($conect){
    echo "todo correcto";
}
if (isset($_POST['register'])){
        if (strlen($_POST['Name']) >= 1 && strlen($_POST['Email']) >= 1 && strlen($_POST['Phone']) >= 1 && strlen($_POST['Messenge']) >= 1){
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Phone= $_POST['Phone'];
            $Messenge= $_POST['Messenge'];
            $consulta = "INSERT INTO llamadas(nombre , correo , telefono , mensaje) VALUES ('$Name','$Email','$Phone','$Messenge')";
            $resultado = mysqli_query($conect,$consulta);
            if ($resultado){
                ?>
                <h3 class="ok">¡Te has inscripto correctamente!</h3>
                <?php
            }else {
                ?>
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
            }

        }else {
            ?>
            <h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
        }

}



?>