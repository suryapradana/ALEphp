<?php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$invers = new ALE('Invers');

$invers->process->setRowColumn(3, 3);

$invers->process->setDataFirst([
                                  [1, 2, 5],
                                  [3, 4, 6],
                                  [8, 9, 2]
                              ]);

foreach ($invers->process->setALE() as $value) {
    echo implode(' ', $value);
    echo '<br>';
}

//echo $invers->process->setDeterminan();
