<?php

namespace ALE\Process;

/**
 * ALEphp class for result SLE Matrix
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
class SLEProcess extends CoreProcess implements ImpProcess
{

    /**
     * Set result value of the matrix calculation
     *
     * @return   array int $this->dataResult
     */
    public function setALE()
    {
        //Set variable of SLE
        if(isset($this->dataSLE = 03)) {
            $x = 2;
            $y = 3;
        }
        else {
            $x = 1;
            $y = 2;
        }

        for($i=0; $i<=$x; $i++) {
            for($j=0; $j<=$y; $j++) {
                $a[$i][$j] = $_POST[$i.$j];
                $b[$i][$j] = $_POST[$i.$j];
            }
        }

        /**
         * SLE Matrix Calculation
         */
        for($i=0; $i<=$x; $i++) {

            //Exchange Line
            for($j=0; $j<=$x; $j++) {
                if ($a[$i][$i] == 0) {
                    if($a[$j][$i] != 0) {
                        for($k=0;$k<=$y;$k++) {
                            $temp      = $a[$i][$k];
                            $a[$i][$k] = $a[$j][$k];
                            $a[$j][$k] = $temp;
                        }
                    }
                }
            }
            $lead1 = $a[$i][$i];

            //Divider Matrix
            for($l=0;$l<=$y;$l++) {
                $a[$i][$l] = $a[$i][$l] / $lead1;
            }

            //Besides The Introduction Of Identity Matrix
            for($m=0;$m<=$x;$m++) {
                $lead0=$a[$m][$i];
                if($i<$m){
                    for($n=0;$n<=$y;$n++) {
                        $a[$m][$n] = $a[$m][$n] - ( $a[$i][$n] * $lead0 );
                    }
                }
                elseif($m<$i) {
                    for($n=0;$n<=$y;$n++) {
                        $a[$m][$n] = $a[$m][$n] - ( $a[$i][$n] * $lead0 );
                    }
                }
            }

        }

        return $this->dataResult;
    }

}
