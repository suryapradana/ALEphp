<?php

namespace ALE\Process;

/**
 * ALEphp class for result core of process Matrix Calculation
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
abstract class CoreProcess implements ImpProcess
{

    /**
     * Matrix Data Property
     *
     * @access  protected
     * @var     array
     */
    protected $dataRow;
    protected $dataColumn;
    protected $dataFirst;
    protected $dataSecond;
    protected $dataResult;

    /**
     * Scalar Data Property
     *
     * @access  protected
     * @var     integer
     */
    protected $dataScalar;

     /**
      * Vector Type Property
      *
      * @access  protected
      * @var     string array
      */
    protected $vectorType = array('Addition', 'Subtraction', 'Dot', 'Projection', 'Cross');

    /**
     * Construct
     *
     * @access  protected
     * @var     integer
     */
    public function __construct()
    {
        $this->dataRow;
        $this->dataColumn;
        $this->dataFirst;
        $this->dataSecond;
        $this->dataResult;
        $this->dataScalar;
        $this->vectorType;
    }

    /**
     * Adding dataRow and dataColumn to matrix
     *
     * @param   integer   $values1 An integer contains ordered value for row data
     * @param   integer   $values2 An integer contains ordered value for column data
     * @return  void
     */
    public function setRowColumn($row, $column)
    {
        $this->dataRow    = $row;
        $this->dataColumn = $column;
        return;
    }

    /**
     * Adding dataFirst to matrix
     *
     * @param   multidimensional array   $values An array contains ordered value for every data
     * @return  void
     */
    public function setDataFirst($values)
    {
        $this->dataFirst  = $values;
        return;
    }

    /**
     * Adding dataSecond to matrix
     *
     * @param   multidimensional array   $values An array contains ordered value for every data
     * @return  void
     */
    public function setDataSecond($values)
    {
        $this->dataSecond = $values;
        return;
    }

    /**
     * Adding dataScalar to Scalar matrix
     *
     * @param   integer   $values An integer contains ordered value for scalar data
     * @return  void
     */
    public function setDataScalar($value = 1)
    {
        $this->dataScalar = $value;
        return;
    }

    /**
      * Adding Vector Type to Change Processing Type of Vector calculation
      *
      * @param   string   $values An string contains ordered value for vector type
      * @return  void
      */
    public function setVectorType($type = 'Addition')
    {
        $this->vectorType = $type;
    }

    /**
     * Adding Data Vector A value to Vector calculation
     *
     * @param   integer   $valueA1 An integer contains ordered value for vector data
     * @param   integer   $valueA2 An integer contains ordered value for vector data
     * @param   integer   $valueA3 An integer contains ordered value for vector data
     * @return  void
     */
    public function setDataNonMatrixA($valueA1, $valueA2, $valueA3)
    {
        $this->dataFirst[0] = $valueA1;
        $this->dataFirst[1] = $valueA2;
        $this->dataFirst[2] = $valueA3;
    }

    /**
     * Adding Data Vector B value to Vector calculation
     *
     * @param   integer   $valueB1 An integer contains ordered value for vector data
     * @param   integer   $valueB2 An integer contains ordered value for vector data
     * @param   integer   $valueB3 An integer contains ordered value for vector data
     * @return  void
     */
    public function setDataNonMatrixB($valueB1, $valueB2, $valueB3)
    {
        $this->dataSecond[0] = $valueB1;
        $this->dataSecond[1] = $valueB2;
        $this->dataSecond[2] = $valueB3;
    }

}
