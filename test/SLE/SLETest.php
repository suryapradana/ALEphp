<?php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$SLE = new ALE('SLE');

$SLE->process->setRowColumn(3, 3);

$SLE->process->setDataScalar(2);

$SLE->process->setDataFirst([
                                  [1, 2, 5],
                                  [3, 4, 6],
                                  [8, 9, 2]
                                ]);

foreach ($SLE->process->setALE() as $value) {
    echo implode(' ', $value);
    echo '<br>';
}
