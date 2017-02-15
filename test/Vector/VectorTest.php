<?php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$vector = new ALE('Vector');

$vector->process->setVectorType('Projection');

$vector->process->setDataNonMatrixA(1,2,3);

$vector->process->setDataNonMatrixB(4,3,2);

foreach ($vector->process->setALE() as $values) {
    echo $values.' ';
}
