<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test Document</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/css/normalize.css"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/css/foundation.min.css"/>
  <link rel="stylesheet" href="/assets/stylesheets/main.css"/>
</head>
<body>


  <?php foreach($this->flashes() as $flash=>$messages): ?>
    <div data-alert class="alert-box warning text-center">
      <?php foreach($messages as $message) { echo $message; } ?>
      <a href="#" class="close">&times;</a>
    </div>
  <?php endforeach ?>

  <div class="wrapper">
    <?php $this->yieldView(); ?>
  </div><!-- /.wrapper -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/js/foundation.min.js" type="text/javascript"></script>

  <script src="assets/javascripts/site.js" type="text/javascript"></script>
  <script>
    $(document).foundation();
  </script>
</body>
