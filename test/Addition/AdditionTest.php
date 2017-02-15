<?php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$additional = new ALE('Addition');

$additional->process->setRowColumn(3, 3);

$additional->process->setDataFirst([
                                      [1, 2, 5],
                                      [3, 4, 6],
                                      [8, 9, 2]
                                    ]);

$additional->process->setDataSecond([
                                      [5, 6, 4],
                                      [7, 3, 6],
                                      [4, 6, 2]
                                    ]);

foreach ($additional->process->setALE() as $value) {
    echo implode(' ', $value);
    echo '<br>';
}
