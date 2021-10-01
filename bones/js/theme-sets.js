( function( $ ) {

  wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$( 'body' ).css( 'background-color', newval );
		} );
	} );
	  wp.customize( 'background_textcolor', function( value ) {
		value.bind( function( newval ) {
			$( 'html' ).css( 'background_textcolor', newval );
		} );
	} );
	
} )( jQuery );