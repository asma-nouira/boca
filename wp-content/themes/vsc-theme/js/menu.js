/**
 * File menu.js.
 *
 * Handles the full-screen menu overlay and the language switcher in the header.
 */
( function () {
	var toggle = document.getElementById( 'menu-toggle' );
	var close = document.getElementById( 'menu-close' );
	var nav = document.getElementById( 'site-navigation' );
	var body = document.body;

	if ( ! toggle || ! close || ! nav ) {
		return;
	}

	function openMenu() {
		body.classList.add( 'menu-is-open' );
		nav.setAttribute( 'aria-hidden', 'false' );
		toggle.setAttribute( 'aria-expanded', 'true' );
		close.focus();
	}

	function closeMenu() {
		body.classList.remove( 'menu-is-open' );
		nav.setAttribute( 'aria-hidden', 'true' );
		toggle.setAttribute( 'aria-expanded', 'false' );
		toggle.focus();
	}

	toggle.addEventListener( 'click', function () {
		if ( body.classList.contains( 'menu-is-open' ) ) {
			closeMenu();
		} else {
			openMenu();
		}
	} );

	close.addEventListener( 'click', closeMenu );

	nav.addEventListener( 'click', function ( event ) {
		if ( event.target.tagName === 'A' ) {
			closeMenu();
		}
	} );

	document.addEventListener( 'keydown', function ( event ) {
		if ( event.key === 'Escape' && body.classList.contains( 'menu-is-open' ) ) {
			closeMenu();
		}
	} );

	var langToggle = document.getElementById( 'lang-switcher-toggle' );
	var langMenu = document.getElementById( 'lang-switcher-menu' );

	if ( langToggle && langMenu ) {
		langToggle.addEventListener( 'click', function () {
			var expanded = langToggle.getAttribute( 'aria-expanded' ) === 'true';
			langToggle.setAttribute( 'aria-expanded', String( ! expanded ) );
			langMenu.classList.toggle( 'is-open', ! expanded );
		} );

		document.addEventListener( 'click', function ( event ) {
			if ( ! langToggle.contains( event.target ) && ! langMenu.contains( event.target ) ) {
				langToggle.setAttribute( 'aria-expanded', 'false' );
				langMenu.classList.remove( 'is-open' );
			}
		} );
	}
} )();
