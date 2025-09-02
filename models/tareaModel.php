<?php
class TareaModel {
    private $conn;
    private $table_name = "tareas";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Leer todas las tareas
    public function leer() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Leer  por ID
    public function leerUno($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear tarea
    public function crear($titulo, $descripcion) {
        $query = "INSERT INTO " . $this->table_name . " (titulo, descripcion, estado) 
                  VALUES (:titulo, :descripcion, 'pendiente')";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descripcion", $descripcion);

        return $stmt->execute();
    }

    // Actualizar tarea
    public function actualizar($id, $titulo, $descripcion, $estado) {
        $query = "UPDATE " . $this->table_name . " 
                  SET titulo = :titulo, descripcion = :descripcion, estado = :estado 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descripcion", $descripcion);
        $stmt->bindParam(":estado", $estado);

        return $stmt->execute();
    }

    // Eliminar tarea
    public function eliminar($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
