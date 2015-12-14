(function($){
	
	Drupal.behaviors.externalLinks = {
		attach: function( context , settings) {

			$('a').each( function(value){
				var $this = $(this);
				var address = $this.attr('href');

				if(typeof address !== 'undefined'){

					var index = address.indexOf('http');
					if(index > -1){
						$this.attr('target' , '_blank');
						//console.log(address);
					}
				}
			});
		}
	}

	Drupal.behaviors.siteName = {
		attach: function( context , settings) {

			var $siteName = $('.name.navbar-brand');
			var name = $siteName.html();
			var words = name.split(' ');

			var html = '<span class="blue">';

			words.forEach( function(value){

				if(value != 'Magazine'){
					html = html + value + ' ';
				}else{
					html = html + '</span><span class="magazine"> ' + value + '</span>';
				}
				$siteName.html(html);
				$siteName.fadeIn();
			});
		}
	}

})(jQuery);