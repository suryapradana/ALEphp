<?php

namespace ALE\Exception;

/**
 * Defines ALE exception enum
 *
 * @author  Kadek Surya Pradana Gunawan
 * @author  I Gede Indra Rudyarta
 * @package ALE
 */
abstract class ALEException
{
    const UNKNOWN                     = 0;
    const FILE_NOT_FOUND              = 1;
    const FILE_EXTENSION_MISMATCH     = 2;
    const ERROR_READING_FILE          = 3;
    const INVALID_DOCUMENT_NAMESPACE  = 4;
    const FIELD_NOT_FOUND             = 5;
    const ROW_NOT_FOUND               = 6;
    const COLUMN_NOT_FOUND            = 7;
    const CELL_NOT_FOUND              = 8;
    const PROCESSTYPE_NOT_SUPPORTED   = 9;
    const MALFORMED_JSON              = 10;
}
