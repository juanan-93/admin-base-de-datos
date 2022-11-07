
<?php

namespace app\Controllers;

require_once 'Models.php';

use app\Models\Abogado;

class AbogadoController {

    protected $abogado;

    public function __construct(){  

        $this->abogado = new Abogado();
    }

    public function index()
    {
        return $this->abogado->index();
    }

    public function show($abogado_id){
        return $this->abogado->show($

abogado_id  );
    }

}

?>