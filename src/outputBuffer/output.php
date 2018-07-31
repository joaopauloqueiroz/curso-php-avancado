<?php
// echo "<h1>TreinaWeb Cursos</h1>";
//ob_start();
// echo <<<TXT
//   Treinaweb é a principal empresa especializada em cursos online de
//   tecnologia da informação no Brasil.
// TXT;
//encerra e limpa o buffer
//ob_end_clean();
//ob_end_flush();

//passando callback para o ob_start();
// ob_start('substituir');
// echo 'Cachorros são inteligentes e engraçados';
// exit;
// echo 'Será que vai imprimir isso aqui?';

// function substituir($buffer)
// {
//     return str_replace('Cachorros', 'Gatos', $buffer);
// }

//ideal para gerar paginas estaticas
//ele vai salvar um html do phpinfo
// ob_start();

// phpinfo();

// $conteudo = ob_get_contents();

// ob_end_clean();

// $file = file_put_contents('phpinfo.html', $conteudo);

// if ($file) {
//     echo "<a href='phpinfo.html'>Link para arquivo</a>";
// } else {
//     echo "erro";
// }
//========================deflate ====================
