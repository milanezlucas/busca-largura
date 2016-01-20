<?php 
// Grafos
class Grafos
{
	protected $num_vertices;
	protected $matriz;

	function __construct( $n_vertices )
	{
		$this->num_vertices = $n_vertices;
	}

	public function insere_aresta($v1, $v2, $peso = 1)
	{
		$this->matriz->$v1->$v2 = $peso;
		$this->matriz->$v2->$v1 = $peso;
	}

	public function pegar_arestas()
	{
		return $this->matriz;
	}

	public function pegar_num_vertices()
	{
		return $this->num_vertices;
	}
}
?>