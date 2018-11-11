<?php

function specialSum($k, $n)
{
    $data = array();

    for ($i = 0; $i <= $k; $i++) {
        for ($j = 0; $j <= $n; $j++) {
            if (!array_key_exists($i.':'.$j, $data)) {
                $data[$i.':'.$j] = calculate($i, $j, $data);
            }
        }
    }

    $sum = 0;
    for ($m = 1; $m <= $n; $m++) {
        $sum += $data[($k - 1) . ':' . $m];
    }
    echo number_format($sum, 0, '', '');

}

function calculate($i, $j, &$data)
{
    if ($i == 0) {
        return $j;
    }
    if ($j == 1) {
        return 1;
    }
    if ($i == 1) {
        return (array_sum(range(1, $j)));
    }
    $sum = 0;
    for ($l = 1; $l <= $j; $l++) {
        if (array_key_exists(($i - 1) . ':' . ($l), $data)) {
            $sum += $data[($i - 1) . ':' . ($l)];
        }
    }
    return $sum;
}

specialSum(100,100);