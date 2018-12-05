(function ($, root, undefined) {

	$(function () {

		'use strict';

		$('.nav-toggle').click(function () {
			$('.nav').toggleClass('is-active');
			$('.nav-overlay').toggle();
		})

		$('<button class="sub-nav-toggle"></button>').click(function (e) {
			$(this).next().slideToggle();
			$(this).parent().toggleClass('is-open');
		}).insertAfter('.nav > ul > .menu-item > a');

		// $('.nav ul > .menu-item > a').insert

		// DOM ready, take it away

	});

})(jQuery, this);
