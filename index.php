<?php

    require_once 'Controller.php';

    use app\Controllers\AbogadoController;

    $abogado = new AbogadoController();
    $abogados = $abogado->index();
?>

 <?php foreach($abogados as $abogado): ?>

                 <a href="ficha.php?abogado=<?php echo $abogado['id'] ?>Ver ficha</a>

  <?php endforeach; ?>