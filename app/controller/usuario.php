<?php

session_start();

require_once '../config/conexion.php';

// Clase Usuario que extiende de la clase Conexion
class Usuario extends Conexion {

    // Obtener la lista de usuarios, excluyendo al usuario en sesión
    public function obtener_usuarios() {
        $consulta = $this->obtener_conexion()->prepare("SELECT * FROM t_usuario WHERE id_usuario != :id");
        $consulta->bindParam(':id', $_SESSION['usuario']['id_usuario']);
        $consulta->execute();
        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($datos);
    }
    public function mostrar_datos() {
        $id = $_POST['id_usuario'];
        $consulta = $this->obtener_conexion()->prepare("SELECT * FROM t_usuario WHERE id_usuario = :id");
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($datos);
    }

    // Obtener información del usuario en sesión
    public function obtener_informacion() {
        $consulta = $this->obtener_conexion()->prepare("SELECT * FROM t_usuario WHERE id_usuario = :id");
        $consulta->bindParam(':id', $_SESSION['usuario']['id_usuario']);
        $consulta->execute();
        $datos = $consulta->fetch(PDO::FETCH_ASSOC);
        echo json_encode($datos);
    }

    // Registrar un nuevo usuario
    public function registrar_usuario() {
        if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['usuario']) && !empty($_POST['password'])) {
            
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];

            if (is_numeric($nombre) || is_numeric($apellido)) {
                echo json_encode([0, "No puedes ingresar números en nombre o apellido"]);
            } else {
                $insercion = $this->obtener_conexion()->prepare("INSERT INTO t_usuario (nombre, apellido, usuario, password) 
                    VALUES (:nombre, :apellido, :usuario, :password)");
                
                $insercion->bindParam(':nombre', $nombre);
                $insercion->bindParam(':apellido', $apellido);
                $insercion->bindParam(':usuario', $usuario);
                $password_hashed = password_hash($password, PASSWORD_BCRYPT);
                $insercion->bindParam(':password', $password_hashed);
                $insercion->execute();

                echo json_encode($insercion ? [1, "Usuario registrado"] : [0, "Usuario no registrado"]);
            }
        } else {
            echo json_encode([0, "No puedes dejar campos vacíos"]);
        }
    }

    // Eliminar un usuario
    public function eliminar_usuario() {
        $id = $_POST['id_usuario'];
        if (!empty($id)) {
            $eliminar = $this->obtener_conexion()->prepare("DELETE FROM t_usuario WHERE id_usuario = :id");
            $eliminar->bindParam(':id', $id);
            $eliminar->execute();
    
            echo json_encode($eliminar ? [1, "Usuario eliminado correctamente"] : [0, "Error al eliminar"]);
        } else {
            echo json_encode([0, "ID de usuario no válido"]);
        }
    }

    // Actualizar los datos del usuario
    public function actualizar_usuario() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_usuario = $_POST['id_usuario'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $password = $_POST['password'];
            $metodo = $_POST['metodo'];

            // Verifica que se ha enviado el método correcto
            if ($metodo == 'actualizar_datos') {
                // Si la contraseña no está vacía, se hace un hash de la nueva contraseña
                if (!empty($password)) {
                    $password = password_hash($password, PASSWORD_BCRYPT);
                } else {
                    // Si la contraseña está vacía, no se cambia
                    $password = null;
                }

                // Prepara la consulta para actualizar los datos
                if ($password) {
                    $sql = "UPDATE t_usuario SET nombre = ?, apellido = ?, password = ? WHERE id_usuario = ?";
                    $stmt = $this->obtener_conexion()->prepare($sql);
                    $stmt->bindParam(1, $nombre);
                    $stmt->bindParam(2, $apellido);
                    $stmt->bindParam(3, $password);
                    $stmt->bindParam(4, $id_usuario);
                } else {
                    $sql = "UPDATE t_usuario SET nombre = ?, apellido = ? WHERE id_usuario = ?";
                    $stmt = $this->obtener_conexion()->prepare($sql);
                    $stmt->bindParam(1, $nombre);
                    $stmt->bindParam(2, $apellido);
                    $stmt->bindParam(3, $id_usuario);
                }

               if ($stmt->execute()) {
                    echo json_encode([1, "Datos actualizados correctamente."]);
                } else {
                    echo json_encode([0, "Error al actualizar los datos."]);
                }
            } else {
                echo json_encode([0, "Método no reconocido."]);
            }
        } else {
            echo json_encode([0, "Petición no válida."]);
        }
    }
}

// Procesar el método solicitado
$consulta = new Usuario();
if (isset($_POST['metodo']) && method_exists($consulta, $_POST['metodo'])) {
    $metodo = $_POST['metodo'];
    $consulta->$metodo();
} else {
    echo json_encode([0, "Método no válido"]);
}

// Cierra la conexión a la base de datos
$consulta->cerrar_conexion();
?>
