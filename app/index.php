<?php
  require '../vendor/autoload.php';
  require 'helpers/application_helper.php';
  require 'models/image.php';
  require 'models/image_collection.php';

  $secondURL = postParam($_POST['secondURL']);
  $firstURL = postParam($_POST['firstURL']);

  include 'views/includes/header.php';
  include 'views/index/_form.php';

  if($_POST){
    include 'views/index/_results.php';
  }

  include 'views/includes/footer.php';
