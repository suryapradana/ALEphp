<?php

namespace ALE\Process;

/**
 * ALEphp class for result Vector Matrix
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
class VectorProcess extends CoreProcess implements ImpProcess
{

    /**
     * Set result value of the matrix calculation
     *
     * @return   array int $this->dataResult
     */
    public function setALE()
    {

        /**
         * Vector Matrix Calculation
         */

        //Addition
        if($this->vectorType === 'Addition') {
            $this->dataResult[0] = $this->dataFirst[0] + $this->dataSecond[0];
            $this->dataResult[1] = $this->dataFirst[1] + $this->dataSecond[1];
            $this->dataResult[2] = $this->dataFirst[2] + $this->dataSecond[2];
            return $this->dataResult;
        }

        //Subtraction
        elseif ($this->vectorType === 'Subtraction') {
            $this->dataResult[0] = $this->dataFirst[0] - $this->dataSecond[0];
            $this->dataResult[1] = $this->dataFirst[1] - $this->dataSecond[1];
            $this->dataResult[2] = $this->dataFirst[2] - $this->dataSecond[2];
            return $this->dataResult;
        }

        //Dot Product
        elseif ($this->vectorType === 'Dot') {
            $c1     = $this->dataFirst[0] * $this->dataSecond[0];
            $c2     = $this->dataFirst[1] * $this->dataSecond[1];
            $c3     = $this->dataFirst[2] * $this->dataSecond[2];
            return $this->dataResult  = $c1 + $c2 + $c3;
        }

        //Orthogonal Projection
        elseif ($this->vectorType === 'Projection') {
            $c1 = $this->dataFirst[0] * $this->dataSecond[0];
            $c2 = $this->dataFirst[1] * $this->dataSecond[1];
            $c3 = $this->dataFirst[2] * $this->dataSecond[2];

            //Set Divider
            $numerator    = $c1 + $c2 + $c3;
            $denominator  = ( $this->dataSecond[0] * $this->dataSecond[0] ) + ( $this->dataSecond[1] * $this->dataSecond[1] ) + ( $this->dataSecond[2] * $this->dataSecond[2] );
            $divider      = $numerator / $denominator;

            //Set Divider Multiplied Result of dataSecond
            $this->dataResult[0] = ( $divider * $this->dataSecond[0] );
            $this->dataResult[1] = ( $divider * $this->dataSecond[1] );
            $this->dataResult[2] = ( $divider * $this->dataSecond[2] );

            return $this->dataResult;
        }

        //Cross Product
        elseif ($this->vectorType === 'Cross') {
            $this->dataResult[0] =   ( $this->dataFirst[1] * $this->dataSecond[2] ) - ( $this->dataFirst[2] * $this->dataSecond[1] );
            $this->dataResult[1] = ( ( $this->dataFirst[2] * $this->dataSecond[0] ) - ( $this->dataFirst[0] * $this->dataSecond[2] ) );
            $this->dataResult[2] =   ( $this->dataFirst[0] * $this->dataSecond[1] ) - ( $this->dataFirst[1] * $this->dataSecond[0] );

            if($this->dataResult[1] < 0) {
                $operator[0] = '-';
            }
            else {
                $operator[0] = '+';
            }

            if($this->dataResult[2] < 0) {
                $operator[1] = '-';
            }
            else {
                $operator[1] = '+';
            }
            return $this->dataResult;
        }

    }

}
