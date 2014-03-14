;(function($){

  // Toggles images that are visible on the sites that are scrapped.
  function toggleImages(){
    $('[data-toggle]').on('click', function(){
      $('#site-content').toggle();
      return false;
    });
  }

  // Adds the match class to the images that match.
  function highlightMatches(){
    $.each($('[data-match]'), function(key, val){
      var id = $(val).attr('data-id');
      $('[data-id="'+id+'"]').addClass('match');
    })
  }

  // run me on instantiation.
  function init(){
    toggleImages();
    highlightMatches();
  }

  return init();

})(jQuery);