<?php

namespace ALE\Process;

/**
 * ALEphp Process Interface for set interface function
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
interface ImpProcess
{
    public function setRowColumn($row, $column);
    public function setDataFirst($values);
    public function setDataSecond($values);
    public function setDataScalar($values);
    public function setVectorType($values);
    public function setDataNonMatrixA($valueA1, $valueA2, $valueA3);
    public function setDataNonMatrixB($valueB1, $valueB2, $valueB3);
    public function setALE();
    //public function setDeterminan();
}
