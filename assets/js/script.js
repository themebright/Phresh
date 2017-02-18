jQuery( function( $ ) {

	var $window = $( window );
	var $body = $( 'body' );
	var $siteHeaderImage = $( '.site-header-image' );
	var $navItemParent = $( '.menu-item-has-children' );

	// ------------------------------------------------------------

	var $siteHeaderImageClone = $siteHeaderImage
		.clone()
		.insertAfter( $siteHeaderImage )
		.addClass( 'site-header-image-clone' );

	var caclHeaderImageCloneSize = function() {
		var margin = Math.abs( $siteHeaderImage.height() );
		$siteHeaderImageClone.css( 'margin-top', -margin );
	};

	if ( $siteHeaderImageClone.length ) {
		caclHeaderImageCloneSize();
		$siteHeaderImage.css( 'opacity', 0 );
	}

	$window.resize( function() {
		caclHeaderImageCloneSize();
	} );

	// ------------------------------------------------------------

	$body.on( 'click', '.site-nav-toggle', function() {

		var $this = $( this );

		if ( $this.parent( 'li' ).length ) {
			$this.parent().toggleClass( '-open' );
		} else {
			$body.toggleClass( '-nav-open' );
		}

	} );

	// ------------------------------------------------------------

	$navItemParent.append( function() {

		var expandMarkup = [];

		expandMarkup.push( '<button class="site-nav-toggle">' );
		expandMarkup.push( '<span class="dashicons dashicons-arrow-up-alt2"></span>' );
		expandMarkup.push( '<span class="screen-reader-text">' );
		expandMarkup.push( phresh_i18n.expand );
		expandMarkup.push( '</span>' );
		expandMarkup.push( '</button>' );

		return expandMarkup.join( '' );

	} );

} );
