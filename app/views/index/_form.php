<!--<header class=" row">-->
<!--  <div class="small-12 columns">-->
<!--    <h1>Image Comparison Tool</h1>-->
<!--    <p>Add 2 URLs in the text fields below to see if the pages contain any of the same images.</p>-->
<!--  </div><!-- /.small-12 -->
<!--</header><!-- /.row -->

<form action="/" method="post">
  <fieldset class="row panel">
    <div class="small-12 columns">
      <label for="firstURL">First Url</label>
      <input type="text" name="firstURL" id="firstURL" value="<?php echo $firstURL ?>"/>
    </div><!-- /.small-12 -->
    <div class="small-12 columns">
      <label for="secondURL">Second Url</label>
      <input type="text" name="secondURL" id="secondURL" value="<?php echo $secondURL ?>"/>
    </div><!-- /.small-12 -->
    <div class="small-12 columns text-right">
      <a href="/" class="button secondary small">Clear</a> &nbsp;
      <button class="button small">Go</button>
    </div><!-- /.small-12 -->
  </fieldset>
</form>