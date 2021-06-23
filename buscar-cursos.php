#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

//require 'src/Buscador.php';
//<namespace>->mapeamento de src-><classe que o Namespace esta carregando>
use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);

$cursos = $buscador->buscar('/cursos-online-programacao/php');
echo "<pre>";

foreach ($cursos as $curso) {//arrays de strings para carregar o array
     exibeMensagem($curso);//conteudo da pagina
}
