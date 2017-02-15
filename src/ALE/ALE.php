<?php

/**
 * ALE
 *
 * A PHP Library To Solve Elementary Linear Algebra Problems
 * Addition, Subtraction, multiplication, Adjoin, Eigen, Invers, Scalar,
 * System of linear equations, Transpose, Vector of Matrix
 *
 * Copyright (c) 2017 Kadek Surya Pradana Gunawan <pradana1186@gmail.com>
 * Portions Copyright (c) 2015 I Gede Indra Rudyarta <yugiindra14@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @author     Kadek Surya pradana Gunawan
 * @author     I Gede Indra Rudyarta
 * @copyright  2017 (c) Pradana
 * @license    https://www.opensource.org/licenses/mit-license
 * @link       https://www.github.com/suryapradana
 * @package    ALE
 * @version    0.1.0
 */

namespace ALE;

use ALE\Exception\ALEException;

if (!class_exists('Composer\\Autoload\\ClassLoader', false)) {
    // autoload all interfaces & classes
    spl_autoload_register(function($class_name) {
        if($class_name != 'ALE') require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, substr($class_name, strlen('ALE\\'))).'.php');
    });
}

/**
 * ALE main class
 */
class ALE
{

    /**
     * Data process property of Elementary Linear Algebra calculation types
     *
     * @access public
     * @var    integer
     */
    public $process;

    /**
     * validProcess property of Elementary Linear Algebra calculation types
     *
     * @access  protected
     * @var     string array
     */
    protected $validProcessTypes = array('Addition', 'Subtraction', 'Multiplication', 'Transpose', 'Adjoin', 'Invers', 'Eigen', 'SLE', 'Vector', 'Scalar');

    /**
     *
     * @param   string
     */
    public function __construct($processType = 'Addition')
    {
        $this->constructProcess($processType);
    }

    /**
     * Construct a ALE Process
     *
     * @param    string   $processType  Set the processType of the types which will be processed
     * @return   bool
     * @throws   Exception              If processType is neither Addition, Subtraction, Multiplication, Adjoin,
     *                                  Eigen, Invers, Scalar, SLE, Transpose, Vector
     */
    public function constructProcess($processType)
    {
        if(!in_array($processType, $this->validProcessTypes)){
            throw new \Exception('Filetype '.$processType.' is not supported', ALEException::PROCESSTYPE_NOT_SUPPORTED);
        }
        $process_class = 'ALE\\Process\\'.$processType.'Process';
        $this->process = new $process_class();
    }

}
