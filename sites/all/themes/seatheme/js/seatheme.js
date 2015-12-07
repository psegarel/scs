(function($){

	Drupal.behaviors.siteName = {
		attach: function( context , settings) {

			var $siteName = $('.name.navbar-brand');
			var name = $siteName.html();
			var words = name.split(' ');

			var html = '<span class="blue">';

			words.forEach( function(value){

				if(value != 'Magazine'){
					html = html + value;
				}else{
					html = html + '</span> ' + value;
				}
				$siteName.html(html);
				$siteName.fadeIn();
			});
		}
	}

})(jQuery);