<?php

namespace ALE\Process;

/**
 * ALEphp class for result Transpose Matrix
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
class TransposeProcess extends CoreProcess implements ImpProcess
{

    /**
     * Set result value of the matrix calculation
     *
     * @return   array int $this->dataResult
     */
    public function setALE()
    {

        /**
         * Transpose Matrix Calculation
         */
        for ($i=0; $i<$this->dataRow; $i++){
            for ($j=0; $j<$this->dataColumn; $j++){
                $this->dataResult[$j][$i] = $this->dataFirst[$i][$j];
            }
        }

        return $this->dataResult;
    }

}
