<?php
setlocale (LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
echo strftime("%A:%B");

echo "<br>";

//codigo da pergunta no site
setlocale(LC_ALL, 'pt_BR', 'pt_BR.UTF-8','Portuguese');
echo strftime( '%A, %d de %B de %Y', strtotime( date( 'Y-m-d' ) ) );
//não ficou em portugue
 ?>
