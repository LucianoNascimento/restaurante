<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function registro(Request $request){

        //JEITO PHP DE FAZER INSERÇÃO NA BASE DE DADOS
//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
//            // Obtener los valores del formulario
//            $nombre = $_POST["nombre"];
//            //$usuario = $_POST["usuario"];
//            $Edad = $_POST["Edad"];
//            $correo = $_POST["correo"];
//            $numero = $_POST["numero"];
//            $contrasena = password_hash($_POST['contrasena'],PASSWORD_BCRYPT);
//
//            // Insertar los valores en la base de datos
//            $sql = "INSERT INTO `tbl_registro_usuario` (nombre,Edad, correo,contrasena) VALUES ('$nombre', '$Edad', '$correo','$contrasena')";
//
//            if (mysqli_query($conn, $sql)) {
//                echo "<script>alert('REGISTRO EXITOSO');</script>";
//                header("location: ../index.php");
//            } else {
//                echo "Error al registrar: " . mysqli_error($conn);
//            }
//        }
    }

}
