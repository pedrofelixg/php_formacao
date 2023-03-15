<?php

$nome = 'campo <img>';

//foco em segurança para tratamento de textos: depreciado para PHP 8.2
?>

<input type="text" name="<?php echo htmlentities($nome); ?>">
