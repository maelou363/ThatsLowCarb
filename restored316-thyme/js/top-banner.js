/* MIT: https://github.com/js-cookie/js-cookie */
!function(e){var n=!1;if("function"==typeof define&&define.amd&&(define(e),n=!0),"object"==typeof exports&&(module.exports=e(),n=!0),!n){var o=window.Cookies,t=window.Cookies=e();t.noConflict=function(){return window.Cookies=o,t}}}(function(){function e(){for(var e=0,n={};e<arguments.length;e++){var o=arguments[e];for(var t in o)n[t]=o[t]}return n}function n(o){function t(n,r,i){var c;if("undefined"!=typeof document){if(arguments.length>1){if("number"==typeof(i=e({path:"/"},t.defaults,i)).expires){var a=new Date;a.setMilliseconds(a.getMilliseconds()+864e5*i.expires),i.expires=a}i.expires=i.expires?i.expires.toUTCString():"";try{c=JSON.stringify(r),/^[\{\[]/.test(c)&&(r=c)}catch(e){}r=o.write?o.write(r,n):encodeURIComponent(String(r)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),n=(n=(n=encodeURIComponent(String(n))).replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent)).replace(/[\(\)]/g,escape);var f="";for(var s in i)i[s]&&(f+="; "+s,!0!==i[s]&&(f+="="+i[s]));return document.cookie=n+"="+r+f}n||(c={});for(var p=document.cookie?document.cookie.split("; "):[],d=/(%[0-9A-Z]{2})+/g,u=0;u<p.length;u++){var l=p[u].split("="),C=l.slice(1).join("=");'"'===C.charAt(0)&&(C=C.slice(1,-1));try{var g=l[0].replace(d,decodeURIComponent);if(C=o.read?o.read(C,g):o(C,g)||C.replace(d,decodeURIComponent),this.json)try{C=JSON.parse(C)}catch(e){}if(n===g){c=C;break}n||(c[g]=C)}catch(e){}}return c}}return t.set=t,t.get=function(e){return t.call(t,e)},t.getJSON=function(){return t.apply({json:!0},[].slice.call(arguments))},t.defaults={},t.remove=function(n,o){t(n,"",e(o,{expires:-1}))},t.withConverter=n,t}return n(function(){})});

(function($, Cookies) {
	var socialnav = false;
	var socialnavtop = 0;
	var $body = $( 'body' );
	
	if( $( '.nav-social' ).length ) {
		socialnav = true;
		socialnavtop = $( '.nav-social' ).offset().top;
	}
	
	// Alway show top banner in Customizer.
	$( document ).ready( function() {

		if ( $body.hasClass( 'customizer-preview' ) ) {
			$body.removeClass( 'top-banner-hidden' );
			$body.addClass( 'top-banner-visible' );
			showBanner();
		}
		
	});
	
	// Stick the social nav at the top of the screen
	$( window ).scroll(function(){
		
		scrolltop = $(window).scrollTop();
		bannerheight = $( '.thyme-top-banner' ).outerHeight();
		
		if( socialnav && scrolltop < bannerheight )
			$( '.top-banner-visible .nav-social' ).css({ "top" : (socialnavtop - scrolltop) + "px" });

	});

	// Show if no cookie set.
	if ( ! Cookies.get( 'top-banner-hidden' ) ) {

		$( document ).ready( function() {

			// Replace body class.
			if ( $body.hasClass( 'top-banner-hidden' ) ) {
				$body.removeClass( 'top-banner-hidden' );
				$body.addClass( 'top-banner-visible' );
			}

			// Show banner.
			showBanner();

			// Set cookie when closing.
			closeBanner();
		});
	}

	function showBanner() {
		$( '.thyme-top-banner' ).fadeIn(function() {
			$(this).children('#thyme-top-banner-close').animate({
				opacity: 1
			}, 1000);
			
			bannerheight = $( '.thyme-top-banner' ).outerHeight();
			scrolltop = $( window ).scrollTop();
			
			if( socialnav ) {
				socialnavtop = $( '.nav-social' ).offset().top - 28;
		
				if( scrolltop > bannerheight ) {
					$( '.nav-social' ).css({ "top" : "0px" });
					$( '.admin-bar .nav-social' ).css({ "top" : "22px" });
					socialnavtop = bannerheight;
					if ( $body.hasClass( 'admin-bar' ) ) {
						socialnavtop += 28;
					}
				}
			}
			
		});
	}

	function closeBanner() {
		$( '#thyme-top-banner-close' ).click(function() {
			
			bannerheight = $( '.thyme-top-banner' ).outerHeight();
			
			$(this).parent().slideUp(function() {
				$body.removeClass( 'top-banner-visible' );
				$body.addClass( 'top-banner-hidden' );
			});
			Cookies.set( 'top-banner-hidden', 'true', { expires: 7 } );
			
			if( socialnav ) {
				$( '.nav-social' ).css({ "top" : (socialnavtop - bannerheight) + "px" });
				socialnavtop = $( '.nav-social' ).offset().top - 28;
			}
			
		});
	}

})(jQuery, Cookies);
