var Phresh = {

	toggleNav: function() {
		jQuery( 'body' ).toggleClass( 'site-nav-open' );
	}

}

jQuery( function( $ ) {

	$( '.site-nav-toggle' ).on( 'click', function() {
		Phresh.toggleNav();
	} );

} );
