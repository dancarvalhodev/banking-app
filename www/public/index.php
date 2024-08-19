<?php
$saldo = 200;

$notasDisponiveis = [
	100,
	50,
	20,
	10
];

$notasSacadas = [];

while($saldo != 0) {
    foreach ($notasDisponiveis as $nota) {
        if($saldo >= $nota) {
            $saldo -= $nota;
            $notasSacadas[] = $nota;
	    }
    }
}

foreach ($notasSacadas as $sacada) {
    echo 'Nota de valor: ' . $sacada . '</br>';
}
