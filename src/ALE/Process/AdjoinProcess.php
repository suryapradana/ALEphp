<?php

namespace ALE\Process;

/**
 * ALEphp class for result Adjoin Matrix
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
class AdjoinProcess extends CoreProcess implements ImpProcess
{

    /**
     * Set result value of the matrix calculation
     *
     * @return   array int $this->dataResult
     */
    public function setALE()
    {
        /**
         * Adjoin Matrix Calculation
         */
        for($i=0; $i<$this->dataRow; $i++) {
            for($j=0; $j<$this->dataColumn; $j++) {

                for($k=0; $k<$this->dataColumn; $k++) {
                    if ($i < $k) {
                        for($l=0; $l<$this->dataColumn; $l++) {
                            if ($j < $l) {
                              $b[$k-1][$l-1]  = $this->dataFirst[$k][$l];
                            }
                            else {
                              $b[$k-1][$l]    = $this->dataFirst[$k][$l];
                            }
                        }
                    }
                    else {
                        for($l=0;$l<$this->dataColumn;$l++) {
                            if ($j < $l) {
                              $b[$k][$l-1]  = $this->dataFirst[$k][$l];
                            }
                            else {
                              $b[$k][$l]    = $this->dataFirst[$k][$l];
                            }
                        }
                    }
                }
                $min = 1;
                $total = 1;
                for($x=0; $x<$this->dataRow-1; $x++) {
                    $lead1 = $b[$x][$x];
                    for($y=0; $y<$this->dataRow-1; $y++) {
                        if ($b[$x][$x] == 0) {
                            if ($b[$y][$x] != 0) {
                                for($k=0; $k<$this->dataColumn-1; $k++) {
                                    $temp      = $b[$x][$k];
                                    $b[$x][$k] = $b[$y][$k];
                                    $b[$y][$k] = $temp;
                                }
                                $min = $min * (-1);
                            }
                        }
                    }
                    for($m=0; $m<$this->dataRow-1; $m++) {
                        $lead0 = $b[$m][$x];
                        if ($x < $m) {
                            for($n=0; $n<$this->dataColumn-1; $n++) {
                                $b[$m][$n] = $b[$m][$n] - ( ($b[$x][$n] * $lead0) / $lead1 );
                            }
                        }
                    }
                    $total = $total * $b[$x][$x];
                }
                if ($min != 1) {
                    $total = $total * (-1);
                }
                $power = $i + $j;
                $kal = $power % 2;
                if ($kal == 1) {
                    $c[$i][$j] = $total * (-1);
                }
                else {
                    $c[$i][$j] = $total;
                }

            }
        }

        for ($i=0; $i<$this->dataRow; $i++) {
            for ($j=0; $j<$this->dataColumn; $j++) {
                $this->dataResult[$j][$i] = $c[$i][$j];
            }
        }

        return $this->dataResult;
    }

}
