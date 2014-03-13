<?php

  try {
    $a = new ImageCollection($imageSource);
    foreach($a->images as $image){
  ?>

      <div class="row image-container">
        <div class="small-12">
          <img src="<?php echo $image->src ?>" alt="<?php echo $img->title ?>"/>
          <div class="title"><?php echo $image->title ?></div>
        </div>
      </div>

  <?php
    }
  } catch (Exception $exception) {
    echo $exception->getMessage();
  }
?>