jQuery(document).ready(function($){
	$('#search-icon').click(function(){
		$('#search-input').toggle( "slide", {direction: "left"} );
	});

  $('.icone-comment').click(function(){
    $('#'+$(this).data('textarea')).slideUp().removeClass('hidden').slideDown();
  });
});
