/**
 * mainMenu.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
import classie from 'classie';
const Snap = require(`imports-loader?this=>window,fix=>module.exports=0!snapsvg/dist/snap.svg.js`);

(function() {

	let bodyEl = document.body;
    let content = document.querySelector( '.content-wrap' );
	let	openbtn = document.getElementById( 'open-button' );
	let	closebtn = document.getElementById( 'close-button' );
	let	isOpen = false;

	let	morphEl = document.getElementById( 'morph-shape' );
	let	s = Snap( morphEl.querySelector( 'svg' ) );

	let path = s.select( 'path' );
    let initialPath = path.attr('d');
    let pathOpen = morphEl.getAttribute( 'data-morph-open' );
    let isAnimating = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}

	function toggleMenu() {
		if( isAnimating ) return false;
		isAnimating = true;
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
			// animate path
			setTimeout( function() {
				// reset path
				path.attr( 'd', initialPath );
				isAnimating = false; 
			}, 300 );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
			// animate path
			path.animate( { 'path' : pathOpen }, 400, mina.easeinout, function() { isAnimating = false; } );
		}
		isOpen = !isOpen;
	}

	init();

})();