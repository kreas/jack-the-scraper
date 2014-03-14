<?php

class Image {
  public function __construct($image, $url)
  {
    $this->src = $this->correctURL($image->src, $url);
    $this->title = $image->alt;
    $this->hash = $this->createMD5Hash();
  }

  /**
   * @return string returns the md5 has as the string of an object. This is used for matching.
   */
  public function __toString()
  {
    return $this->hash;
  }

  /**
   * Correct URL
   *
   * Shapes the given url for an object into something that is usable in the application.
   * For example. //cdn.image.... becomes http://cdn.image...
   *
   * @param $file
   * @param $url
   * @return string
   */
  private function correctURL($file, $url)
  {
    if(preg_match('/^https?:/', $file)){
      return $file;
    }elseif(preg_match('/^\/\/.*$/', $file)){
      return 'http:' . $file;
    }elseif(preg_match('/^\/(\d|\w)/', $file)){
      return $url . $file;
    }
  }

  /**
   * Generates a MD5 Hash based on the image, this is used to compare it to other images and identification
   * @return string
   */
  private function createMD5Hash()
  {
    return md5_file($this->src);
  }
}