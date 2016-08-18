(function($){
  $(function(){
    $(".btn-menu").click(function(){
      $(".block__main-menu").stop().slideToggle(250);
      return false;
    });
  });
})(jQuery);