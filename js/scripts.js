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

	});

})(jQuery, this);
