<?php

/**
 * postParam
 *
 * @param $param if the param is set return it if not return an empty string
 */
if( ! function_exists('postParam')){

  function postParam($param)
  {
    if(isset($param)){
      return $param;
    } else {
      return "";
    }
  }

}
