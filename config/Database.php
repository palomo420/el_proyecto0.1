<?php
class Database {
    private $host = "localhost";   // Servidor de la BD
    private $db_name = "mi_base";  // Nombre de la base de datos
    private $username = "root";    // Usuario de MySQL
    private $password = "";        // Contraseña
    public $conn;

    // Método para obtener la conexión
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8"); // Soporte de acentos
        } catch (PDOException $exception) {
            echo "Error en la conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
