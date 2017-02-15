<?php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$scalar = new ALE('Scalar');

$scalar->process->setRowColumn(3, 3);

$scalar->process->setDataScalar(2);

$scalar->process->setDataFirst([
                                  [1, 2, 5],
                                  [3, 4, 6],
                                  [8, 9, 2]
                                ]);

foreach ($scalar->process->setALE() as $value) {
    echo implode(' ', $value);
    echo '<br>';
}
