<?php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$eigen = new ALE('Eigen');

$eigen->process->setDataFirst([
                                [3, 4],
                                [5, 2]
                              ]);

$eigen->process->setALE();
