<?php

namespace app\Models;

require_once 'databaseconnect.php';

use PDO;
use core\Connection;

class Table extends Connection {

    public function index() {

        $query =  "SELECT * FROM abogados WHERE activo = 1";
               
        $stmt = $this->pdo->prepare($query);
        $result = $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function show($abogado_id) {

        $query =  "SELECT * FROM abogados WHERE id = $abogado_id";
               
        $stmt = $this->pdo->prepare($query);
        $result = $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>