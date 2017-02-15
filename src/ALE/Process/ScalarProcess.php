<?php

namespace ALE\Process;

/**
 * ALEphp class for result Scalar Matrix
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
class ScalarProcess extends CoreProcess implements ImpProcess
{

    /**
     * Set result value of the matrix calculation
     *
     * @return   array int $this->dataResult
     */
    public function setALE()
    {

        /**
         * Scalar Matrix Calculation
         */
        for ($i=0; $i<$this->dataRow; $i++) {
            for ($j=0; $j<$this->dataColumn; $j++) {

                //Calculate all data from matrix multiplied data of scalar
                $this->dataFirst[$i][$j]  = $this->dataFirst[$i][$j] * $this->dataScalar;

                //Move value from dataFirst to dataResult
                $this->dataResult[$i][$j] = $this->dataFirst[$i][$j];
            }
        }

        return $this->dataResult;
    }

}
