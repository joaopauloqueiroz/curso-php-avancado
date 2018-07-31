<?php
/**
 *Tipos de retorno do verbo HTTP
 * 1XX (iniciado em 1 ) - Indica um resultado informativo
 * 2xx (iniciado em 2 ) - Indica sucesso
 * 3xx (iniciado em 3 ) - Instrução para redirecionamento
 * 4xx (iniciado em 4 ) - Indica erro do clinete
 * 5xx (iniciado em 5 ) - Indica erro do servidor
 */

 
// header('HTTP/1.1 503 Unavailable');
// exit('Pagina em manutenção');
http_response_code(404);
exit('Not Found');
