<?php

/**
 * Populate input value
 *
 * If an input value has been set display it. If not display null rather than a warning.
 * @param string $val
 * @return string
 */
if( ! function_exists('inputValue')){
  function inputValue($val)
  {
    echo isset($val) ? $val : null;
  }
}