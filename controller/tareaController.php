<?php
// Incluimos el modelo y la conexión a la base de datos
require_once 'models/TareaModel.php';
require_once 'config/Database.php';

class TareaController {
    private $db;
    private $tareaModel;

    // Constructor: abre conexión y carga el modelo
    public function __construct() {
        $database = new Database();          // Crea objeto Database
        $this->db = $database->getConnection(); // Obtiene conexión PDO
        $this->tareaModel = new tareaModel($this->db); // Crea el modelo
    }

    // Mostrar todas las tareas
    public function index() {
        $tareas = $this->tareaModel->leer(); // Llama al modelo
        include 'views/home.php';            // Muestra las tareas en la vista
    }

    // Mostrar formulario para crear una nueva tarea
    public function crear() {
        include 'views/crear.php';
    }

    // Guardar nueva tarea en la BD
    public function guardar() {
        if ($_POST) {  // Si vienen datos por formulario
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];

            // Intentamos crear la tarea
            if ($this->tareaModel->crear($titulo, $descripcion)) {
                header("Location: index.php?accion=index"); // Redirige a la lista
                exit;
            } else {
                echo "Error al crear la tarea.";
            }
        }
    }

    // Mostrar formulario de edición
    public function editar() {
        if (isset($_GET['id'])) {       // Si se pasa un ID en la URL
            $id = $_GET['id'];
            $tarea = $this->tareaModel->leerUno($id); // Busca la tarea
            if ($tarea) {
                include 'views/editar.php'; // Carga vista con datos
            } else {
                echo "Tarea no encontrada.";
            }
        }
    }

    // Actualizar la tarea en la BD
    public function actualizar() {
        if ($_POST) {   // Si se envía formulario
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $estado = $_POST['estado'];

            // Llama al modelo para actualizar
            if ($this->tareaModel->actualizar($id, $titulo, $descripcion, $estado)) {
                header("Location: index.php?accion=index"); // Redirige al listado
                exit;
            } else {
                echo "No se pudo actualizar la tarea.";
            }
        }
    }

    // Eliminar tarea
    public function eliminar() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($this->tareaModel->eliminar($id)) {
                header("Location: index.php?accion=index");
                exit;
            } else {
                echo "Error al eliminar la tarea.";
            }
        } else {
            echo "ID no especificado.";
        }
    }
}
