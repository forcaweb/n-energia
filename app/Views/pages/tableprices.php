<?php

$monthtoday = date('m', time());
$monthtoday = number_format($monthtoday) - 1;
$months = Array(
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
);
$desc = Array(
  'descricao' => ['1,50', '2,75', '4,35', '5,45', '7,05', '8,45'],
  'producao_mensal' => ['172', '344', '556', '688', '903', '1075'],
  'valor' => ['12650', '14250', '21890', '25870', '31980', '32490']
);
