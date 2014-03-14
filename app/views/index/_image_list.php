<h5 class="text-center"><?php echo $imageSet->siteTitle ?></h5>

<?php foreach($imageSet->images as $image): ?>

  <div data-id="<?php echo $image->hash ?>" class="image-container">
    <img src="<?php echo $image->src ?>" alt="<?php echo $image->title ?>" />
    <span class="title"><?php echo $image->title ?></span>
  </div> <!-- /.small-12 -->

<?php endforeach; ?>