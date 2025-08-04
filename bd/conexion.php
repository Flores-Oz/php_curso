<?php
class Conexion {
    public function __construct(
        public string $driver = "mysql",
        public string $host = "localhost",
        public string $user = "root",
        public string $pass = "",
        public string $dbName = "sunny_side",
        public string $charset = "utf8mb4"
    ) {}

    public function conexion() {
        try {
            $pdo = new PDO(
                "$this->driver:host=$this->host;dbname=$this->dbName;charset=$this->charset",
                $this->user,
                $this->pass
            );
            // Opcional: activar excepciones
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
}
?>
