<?php

namespace ALE\Process;

/**
 * ALEphp class for result Eigen Matrix
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
class EigenProcess extends CoreProcess implements ImpProcess
{

    /**
     * Set result value of the matrix calculation
     *
     * @return   array int $this->dataResult
     */
    public function setALE()
    {
        //Default dataRow and dataColumn
        $this->dataRow    = 2;
        $this->dataColumn = 2;

        /**
         * Eigen Matrix Calculation
         */
        for ($i=0; $i<$this->dataRow; $i++){
            for ($j=0; $j<$this->dataColumn; $j++){
                $b[$i][$j] = $this->dataFirst[$i][$j];
                $c[$i][$j] = $this->dataFirst[$i][$j];
            }
        }

        $artificial = 1;
        $bTemp = $this->dataFirst[0][0] + $this->dataFirst[1][1];
        $cTemp = ( $this->dataFirst[0][0] * $this->dataFirst[1][1] ) - ( $this->dataFirst[1][0] * $this->dataFirst[0][1] );
        $dTemp = ( $bTemp * $bTemp ) -4 * $artificial * $cTemp;

        if ($dTemp > 0) {
            $eigen[0] = -1 * ( ( -1 * ($bTemp) + ( sqrt($dTemp) ) ) / 2 * $artificial );
            $eigen[1] = -1 * ( ( -1 * ($bTemp) - ( sqrt($dTemp) ) ) / 2 * $artificial );
            $bat = 1;
        }
        elseif ($dTemp == 0) {
            $eigen[0] = -1 * ( $bTemp / 2 * $artificial );
            $bat = 0;
        }
        else {
            $bat = 3;
        }

        if($bat == 3) {
            echo 'Have No Solution !!!';
        }
        else {
            for($x=0; $x<=$bat; $x++) {
                $s = $x+1;
                echo '&lambda;'.$s.' = '.$eigen[$x].' , ';
            }
        }

        //return $this->dataResult;
    }

}
