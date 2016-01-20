<?php 
// Buscar em Largura
class BuscaLargura extends Grafos
{
	protected $fila;
	protected $visitado;
	protected $matriz;
	protected $num_vertices;
	protected $posicao;

	function __construct( $arestas, $vertices )
	{
		$this->matriz 		= $arestas;
		$this->num_vertices = $vertices;

		for ($i=0; $i < $this->num_vertices; $i++) { 
			$this->visitado->$i = 0;
		}
	}

	public function buscar_em_largura($origem)
	{
		$this->adicionar_a_fila($origem);
		$this->visitado->$origem = 1;

		while (!$this->fila_vazia()) {
			$v 		= $this->fila[0];
			$adj 	= $this->primeiro_adjacente($v);
			echo ($v == $origem) ? $v : ' -> ' . $v;
			while ($adj != -1) {
				if ($this->visitado->$adj == 0) {
					$this->adicionar_a_fila($adj);
					$this->visitado->$adj = 1;
				}
				$adj = $this->proximo_adjacente($v);
			}
			$this->retirar_da_fila();
		}
	}

	protected function adicionar_a_fila($v)
	{
		$i = $this->fila_vazia() ? 0 : count($this->fila) + 1;
		$this->fila[ $i ] = $v;
	}

	protected function fila_vazia()
	{
		return (count($this->fila) > 0) ? false : true;
	}

	protected function retirar_da_fila()
	{
		array_shift($this->fila);
	}

	protected function primeiro_adjacente($v)
	{
		$this->posicao->$v = -1;

		return $this->proximo_adjacente($v);
	}

	protected function proximo_adjacente($v)
	{
		$this->posicao->$v++;
		$pos = $this->posicao->$v;

		for ($i=$pos; $i < $this->num_vertices; $i++) { 
			if ( $this->matriz->$v->$i > 0) {
				$this->posicao->$v++;

				return $i;
			}
		}

		return -1;
	}
}
?>