<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);

require 'vendor/autoload.php';
require 'src/Buscador.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);

$cursos = $buscador->buscar('/cursos-online-programacao/php');
var_dump($cursos);
foreach ($cursos as $curso) {//php api
    echo $curso . PHP_EOL;
}
