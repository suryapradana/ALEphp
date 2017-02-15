<?php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$transpose = new ALE('Transpose');

$transpose->process->setRowColumn(3, 3);

$transpose->process->setDataFirst([
                                    [1, 2, 5],
                                    [3, 4, 6],
                                    [8, 9, 2]
                                  ]);

foreach ($transpose->process->setALE() as $value) {
    echo implode(' ', $value);
    echo '<br>';
}
