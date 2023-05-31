<?php
            if($_POST){
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $email = $_POST['email'];

                $host = "localhost";
                $usuario = "root";
                $clave = "";
                $base = "usuarios";
            
                $conexion = new mysqli($host, $usuario, $clave, $base);
                if ($conexion->connect_error){
                    die("Connection failed: ".$conexion->connect_error);
                } 

                $sql = "INSERT INTO usuario (nombre, apellido, email)
                values ('$nombre', '$apellido', '$email')";

                if ($conexion->query($sql) === TRUE){
                    echo "Nuevo registro exitoso";
                } else {
                    echo "Error: " .$sql. "<br>" .$conexion->error;
                }

                $conexion->close();
            }

            ?>