<form action="/" method="post">
  <fieldset class="row panel">
    <div class="small-12 columns">
      <label for="firstURL">First Url</label>
      <input type="text" name="firstURL" id="firstURL" value="<?php inputValue($this->firstURL); ?>"/>
    </div><!-- /.small-12 -->
    <div class="small-12 columns">
      <label for="secondURL">Second Url</label>
      <input type="text" name="secondURL" id="secondURL" value="<?php  inputValue($this->secondURL); ?>"/>
    </div><!-- /.small-12 -->
    <div class="small-12 columns text-right">
      <a href="/" class="button secondary small">Clear</a> &nbsp;
      <button class="button small">Go</button>
    </div><!-- /.small-12 -->
  </fieldset>
</form>