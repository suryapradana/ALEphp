<?php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$multiplication = new ALE('Multiplication');

$multiplication->process->setRowColumn(3, 3);

$multiplication->process->setDataFirst([
                                          [1, 2, 5],
                                          [3, 4, 6],
                                          [8, 9, 2]
                                        ]);

$multiplication->process->setDataSecond([
                                          [5, 6, 4],
                                          [7, 3, 6],
                                          [4, 6, 2]
                                        ]);

foreach ($multiplication->process->setALE() as $value) {
    echo implode(' ', $value);
    echo '<br>';
}
