<?php
	function saudar(string $quem = "Desconhecido"): void {
		echo "Ola, $quem";
	}

	function calcular(float $n1, float $n2, string $operacao = "+"): float {
		if ($operacao === "+")
			return $n1 + $n2;
		else
			"ERRO: operacao nao reconhecida";
	}
