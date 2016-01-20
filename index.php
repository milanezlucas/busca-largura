<?php 
require_once 'Grafos.php';
require_once 'BuscaLargura.php';

$grafo = new Grafos(10);

// A B C D E F G H I J
// 0 1 2 3 4 5 6 7 8 9
$grafo->insere_aresta(0, 1);
$grafo->insere_aresta(0, 2);
$grafo->insere_aresta(1, 2);
$grafo->insere_aresta(1, 4);
$grafo->insere_aresta(1, 5);
$grafo->insere_aresta(2, 0);
$grafo->insere_aresta(2, 1);
$grafo->insere_aresta(2, 5);
$grafo->insere_aresta(2, 3);
$grafo->insere_aresta(3, 2);
$grafo->insere_aresta(3, 8);
$grafo->insere_aresta(4, 1);
$grafo->insere_aresta(4, 7);
$grafo->insere_aresta(4, 6);
$grafo->insere_aresta(5, 2);
$grafo->insere_aresta(5, 1);
$grafo->insere_aresta(6, 4);
$grafo->insere_aresta(6, 7);
$grafo->insere_aresta(6, 9);
$grafo->insere_aresta(7, 4);
$grafo->insere_aresta(7, 6);
$grafo->insere_aresta(8, 9);
$grafo->insere_aresta(8, 3);
$grafo->insere_aresta(9, 8);
$grafo->insere_aresta(9, 6);

$busca_largura = new BuscaLargura( $grafo->pegar_arestas(), $grafo->pegar_num_vertices() );
$busca_largura->buscar_em_largura(1);
?>