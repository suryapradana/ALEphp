<?php

namespace ALE\Process;

/**
 * ALEphp class for result Additional Matrix
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
class AdditionProcess extends CoreProcess implements ImpProcess
{

    /**
     * Set result value of the matrix calculation
     *
     * @return   array int $this->dataResult
     */
    public function setALE()
    {

        /**
         * Addition Matrix Calculation
         */
        for ($i=0; $i<$this->dataRow; $i++) {
            for ($j=0; $j<$this->dataColumn; $j++) {

                //Move value from dataFirst to variable assistance ($a)
                $a[$i][$j] = $this->dataFirst[$i][$j];

                //Move value from dataSecond to variable assistance ($b)
                $b[$i][$j] = $this->dataSecond[$i][$j];

                //calculate all data from variable $a added variable $b
                $this->dataResult[$i][$j] = $a[$i][$j] + $b[$i][$j];
            }
        }

        return $this->dataResult;
    }

}
