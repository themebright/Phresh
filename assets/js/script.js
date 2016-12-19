jQuery( function( $ ) {

	var $window = $( window );
	var $body = $( 'body' );
	var $siteNavToggle = $( '.site-nav-toggle' );
	var $siteHeaderSticky = $( '.site-header-sticky' );
	var $siteHeaderImage = $( '.site-header-image' );

	// ------------------------------------------------------------

	$siteNavToggle.on( 'click', function() {
		$body.toggleClass( 'site-nav-open' );
	} );

	// ------------------------------------------------------------

	if ( $siteHeaderSticky.length ) {
		$siteHeaderSticky.sticky();
	}

	// ------------------------------------------------------------

	var $siteHeaderImageClone = $siteHeaderImage
		.clone()
		.insertAfter( $siteHeaderImage )
		.addClass( 'site-header-image-clone' );

	var caclHeaderImageCloneSize = function() {
		$siteHeaderImageClone.css( 'margin-top', -Math.abs( $siteHeaderImage.height() ) );
	};

	if ( $siteHeaderImageClone.length ) {
		caclHeaderImageCloneSize();
		$siteHeaderImage.css( 'opacity', 0 );
	}

	$window.resize( function() {
		caclHeaderImageCloneSize();
	} );

} );
