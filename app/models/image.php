<?php

class Image {
  public function __construct($image)
  {
    $this->src = $this->correctURL($image->src);
    $this->title = $image->alt;
    $this->hash = $this->createMD5Hash();
  }

  public function __toString()
  {
    return $this->hash;
  }

  private function correctURL($file)
  {
    if(preg_match('/http/', $file)){
      return $file;
    }else{
      return 'http:' . $file;
    }
  }

  private function createMD5Hash()
  {
    return md5_file($this->src);
  }
}