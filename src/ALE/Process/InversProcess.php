<?php

namespace ALE\Process;

/**
 * ALEphp class for result Invers Matrix
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
class InversProcess extends CoreProcess implements ImpProcess
{

    /**
     * Data Determinan Variable
     *
     * @access  protected
     * @var     integer
     */
    protected $dataDeterminan;

    /**
     * Set result value of the matrix calculation
     *
     * @return   array int $this->dataResult
     */
    public function setALE()
    {
        error_reporting(0);

        for ($i=0; $i<$this->dataRow; $i++) {
            for ($j=0; $j<$this->dataColumn; $j++) {
                $b[$i][$j] = $this->dataFirst[$i][$j];
                $c[$i][$j] = $this->dataFirst[$i][$j];
            }
        }
        $ColumnTemp = ( $this->dataColumn + $this->dataColumn ) + 1;
        $ext = $this->dataColumn + 1;
        for($i=0; $i<$this->dataRow; $i++) {
            for ($j=$ext; $j<$ColumnTemp; $j++) {
                if($i == ($j - $ext)) {
                    $this->dataFirst[$i][$j] = 1;
                }
                else {
                    $this->dataFirst[$i][$j] = 0;
                }
            }
        }

        /**
         * Invers Matrix Calculation
         */
        for($i=0; $i<$this->dataRow; $i++) {

            //Exchange Line
            for($j=0; $j<$this->dataRow; $j++) {
                if ($this->dataFirst[$i][$i] == 0) {
                    if($this->dataFirst[$j][$i] != 0) {
                        for($k=0; $k<$ColumnTemp; $k++) {
                            $temp                    = $this->dataFirst[$i][$k];
                            $this->dataFirst[$i][$k] = $this->dataFirst[$j][$k];
                            $this->dataFirst[$j][$k] = $temp;
                        }
                    }
                }
            }
            $lead1 = $this->dataFirst[$i][$i];

            //Divider Matrix
            for($l=0; $l<$ColumnTemp; $l++) {
                $this->dataFirst[$i][$l] = $this->dataFirst[$i][$l] / $lead1;
            }

            //Besides The Introduction Of Identity Matrix
            for($m=0; $m<$this->dataRow; $m++) {
                $lead0 = $this->dataFirst[$m][$i];
                if($i < $m) {
                    for($n=0; $n<$ColumnTemp; $n++) {
                        $this->dataFirst[$m][$n] = $this->dataFirst[$m][$n] - ( $this->dataFirst[$i][$n] * $lead0 );
                    }
                }
                else if($m < $i) {
                    for($n=0; $n<$ColumnTemp; $n++) {
                        $this->dataFirst[$m][$n] = $this->dataFirst[$m][$n] - ( $this->dataFirst[$i][$n] * $lead0 );
                    }
                }
            }

        }

        /***************************************************************************************/

        /**
         * Determinan Matrix Calculation
         */
        $min = 1;
        $this->dataDeterminan = 1;

        //Exchange Row
        for($i=0; $i<$this->dataRow; $i++) {
            $lead1 = $b[$i][$i];
              for($j=0; $j<$this->dataRow; $j++) {
                if($b[$i][$i] == 0) {
                    if($b[$j][$i] != 0) {
                        for($k=0; $k<$this->dataColumn; $k++) {
                            $temp = $b[$i][$k];
                            $b[$i][$k] = $b[$j][$k];
                            $b[$j][$k] = $temp;
                        }
                        $min = $min * (-1);
                    }
                }
            }
            for($m=0; $m<$this->dataRow; $m++) {
                $lead0 = $b[$m][$i];
                if($i < $m) {
                    for($n=0; $n<$this->dataColumn; $n++) {
                        $b[$m][$n] = $b[$m][$n] - ( ($b[$i][$n] * $lead0) / $lead1 );
                    }
                }
            }
            $this->dataDeterminan = $this->dataDeterminan * $b[$i][$i];
        }

        if ($min != 1) {
            $this->dataDeterminan = $this->dataDeterminan * ( -1 );
        }

        //Return Invers Matrix
        for($i=0; $i<$this->dataRow; $i++) {
            for($j=$this->dataColumn + 1; $j<$ColumnTemp; $j++) {
                $this->dataResult[$i][$j] = number_format($this->dataFirst[$i][$j],2);
            }
        }

        return $this->dataResult;
    }

    /**
     * Set value of the specified cell
     *
     * @param    int $dataDeterminan
     * @return   int $dataDeterminan
     */
    //public function setDeterminan()
    //{
          /* Return Determinan Value START */
          //return $this->dataDeterminan;
          /* Return Determinan Value END */
    //}

}
