<?php
  require 'helpers/application_helper.php';
  require 'models/image.php';
  require 'models/image_collection.php';

  $secondURL = postParam($_POST['secondURL']);
  $firstURL = postParam($_POST['firstURL']);

  include '_form.php';
  include '_results.php';