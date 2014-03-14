<?php
  require_once 'models/Image.php';
  require_once 'models/ImageCollection.php';

  $setA = new ImageCollection($this->firstURL);
  $setB = new ImageCollection($this->secondURL);

  $combinedArray = array_intersect($setA->images, $setB->images);
?>

<?php include '_form.php'; ?>

<div class="row">
  <div id="matches" class="small-12">
    <h1>Matched <?php echo count($combinedArray); ?></h1>
  </div><!-- /#matches -->
  <div class="small-12 columns">
    <div class="row">
      <?php foreach($combinedArray as $image): ?>
        <div class="small-4 columns">
          <div data-id="<?php echo $image->hash ?>" data-match>
            <img src="<?php echo $image->src ?>" alt="<?php echo $image->title ?>" />
            <div class="title"><?php echo $image->title ?></div>
          </div>
        </div><!-- /.small-4 -->
      <?php endforeach; ?>
    </div><!-- /.row -->
  </div><!-- /.small-12 -->
</div><!-- /.row -->

<div id="site-content" class="row hide">
  <hr>
  <div id="#site1" class="large-6 columns results">
    <?php
    $imageSet = $setA;
    include '_image_list.php';
    ?>
  </div><!-- /#site1 -->

  <div id="#site2" class="large-6 columns results">
    <?php
    $imageSet = $setB;
    include '_image_list.php';
    ?>
  </div><!-- /#site2 -->
</div>


<div class="actions row ">
  <div class="small-12 columns panel text-center">
    <a href="#" class="button" data-toggle> Toggle Site Content</a>
  </div><!-- /.small-12 -->
</div><!-- /.row -->