# ALEphp

http://github.com/suryapradana

Easily To Solve Elementary Linear Algebra Problems Between Addition, Subtraction, Multiplication, Adjoin, Eigen, Invers, Scalar, System of linear equations, Transpose, Vector of Matrix


----------


## Features

* Available Elementary Linear Algebra Calculation:
    * Addition
    * Subtraction
    * Multiplication
    * Adjoin
    * Eigen
    * Invers
    * Scalar
    * System of linear equations
    * Transpose
    * Vector


----------


## Installation

```sh
composer require suryapradana/alephp
```

----------


## Usage


##### Addition

```php

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
```

##### Vector

```php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$vector = new ALE('Vector');

$vector->process->setVectorType('Projection');

$vector->process->setDataNonMatrixA(1,2,3);

$vector->process->setDataNonMatrixB(4,3,2);

foreach ($vector->process->setALE() as $values) {
    echo $values.' ';
}
```

##### Eigen

```php

use ALE\ALE;

require_once('../../src/ALE/ALE.php');

$eigen = new ALE('Eigen');

$eigen->process->setDataFirst([
                                [3, 4],
                                [5, 2]
                              ]);

$eigen->process->setALE();
```


----------


## License

ALEphp is released under the MIT Licence. See the bundled LICENSE file for details.
