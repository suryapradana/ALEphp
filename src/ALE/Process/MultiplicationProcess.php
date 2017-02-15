<?php

namespace ALE\Process;

/**
 * ALEphp class for result additional matrix
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
class MultiplicationProcess extends CoreProcess implements ImpProcess
{

    /**
     * Set result value of the matrix calculation
     *
     * @return   array int $this->dataResult
     */
    public function setALE()
    {

        /**
         * Multiplication Matrix Calculation
         */
        for ($i=0; $i<$this->dataRow; $i++) {
            for ($j=0; $j<$this->dataColumn; $j++) {
                for ($k=0; $k<$this->dataColumn; $k++) {

                  //Check dataResult has been defined or not
                    if (!isset($this->dataResult[$i][$j])) {
                        $this->dataResult[$i][$j] = ( $this->dataFirst[$i][$k] * $this->dataSecond[$k][$j] );
                    }
                    else {
                        $this->dataResult[$i][$j] = $this->dataResult[$i][$j] + ( $this->dataFirst[$i][$k] * $this->dataSecond[$k][$j] );
                    }

                }
            }
        }

        return $this->dataResult;
    }

}
