(function($){

	Drupal.behaviors.facebook = {
		attach: function( context , settings) {
			window.fbAsyncInit = function() {
				FB.init({
				  appId      : '168382040195552',
				  xfbml      : true,
				  version    : 'v2.5'
				});
			};

			(function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
				 if (d.getElementById(id)) {return;}
				 js = d.createElement(s); js.id = id;
				 js.src = "//connect.facebook.net/en_US/sdk.js";
				 fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		}
	}

	Drupal.behaviors.externalLinks = {
		attach: function( context , settings) {

			$('a').each( function(value){
				var $this = $(this);
				var address = $this.attr('href');

				if(typeof address !== 'undefined'){

					var index = address.indexOf('http');
					if(index > -1){
						$this.attr('target' , '_blank');
					}
				}
			});
		}
	}

	Drupal.behaviors.socialNetworks = {
		attach: function( context , settings) {

			$.ajax({
			  url: "/sites/all/themes/seatheme/html/social.html",
			  context: document.body
			}).done(function(data) {
				$('#social-networks').html(data);
				console.log(data);
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