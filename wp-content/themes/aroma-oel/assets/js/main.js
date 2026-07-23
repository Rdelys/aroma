document.addEventListener('DOMContentLoaded', function () {

	var header  = document.querySelector('.site-header');
	var burger  = document.querySelector('.menu-toggle');
	var closeBtn = document.querySelector('.menu-close');
	var nav     = document.getElementById('main-nav');
	var overlay = document.querySelector('.nav-overlay');
	var body    = document.body;

	function isMobile() {
		return window.matchMedia('(max-width: 959px)').matches;
	}

	/* ===== Header transparent -> solide au scroll (accueil uniquement) ===== */
	if (header && header.classList.contains('site-header--transparent')) {
		var SCROLL_THRESHOLD = 60;

		function updateHeaderOnScroll() {
			if (window.scrollY > SCROLL_THRESHOLD) {
				header.classList.add('is-scrolled');
			} else {
				header.classList.remove('is-scrolled');
			}
		}
		updateHeaderOnScroll();
		window.addEventListener('scroll', updateHeaderOnScroll, { passive: true });
	}

	/* ===== Menu mobile (burger) ===== */
	function openNav() {
		nav.classList.add('is-open');
		overlay.classList.add('is-visible');
		burger.setAttribute('aria-expanded', 'true');
		body.classList.add('nav-locked');
		if (header) header.classList.add('force-open'); // reste solide tant que le panneau est ouvert
	}

	function closeNav() {
		nav.classList.remove('is-open');
		overlay.classList.remove('is-visible');
		burger.setAttribute('aria-expanded', 'false');
		body.classList.remove('nav-locked');
		if (header) header.classList.remove('force-open');
		closeAllSubmenus();
	}

	if (burger && nav) {
		burger.addEventListener('click', function () {
			nav.classList.contains('is-open') ? closeNav() : openNav();
		});
	}
	if (closeBtn) closeBtn.addEventListener('click', closeNav);
	if (overlay) overlay.addEventListener('click', closeNav);

	/* ===== Sous-menus : accordéon mobile / dropdown clic desktop ===== */
	var toggles = document.querySelectorAll('.submenu-toggle');

	function closeAllSubmenus(except) {
		toggles.forEach(function (btn) {
			if (btn === except) return;
			btn.setAttribute('aria-expanded', 'false');
			btn.closest('li').classList.remove('is-open');
		});
	}

	toggles.forEach(function (btn) {
		btn.addEventListener('click', function (e) {
			e.preventDefault();
			e.stopPropagation();
			var li = btn.closest('li');
			var isOpen = li.classList.contains('is-open');
			if (!isMobile()) closeAllSubmenus(btn);
			li.classList.toggle('is-open', !isOpen);
			btn.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
		});
	});

	document.addEventListener('click', function (e) {
		if (!isMobile() && !e.target.closest('.main-nav li')) {
			closeAllSubmenus();
		}
	});

	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape') {
			closeAllSubmenus();
			closeNav();
		}
	});

	window.addEventListener('resize', function () {
		if (!isMobile()) closeNav();
	});

});
