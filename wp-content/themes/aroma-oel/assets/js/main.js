document.addEventListener('DOMContentLoaded', function () {

	var burger  = document.querySelector('.menu-toggle');
	var closeBtn = document.querySelector('.menu-close');
	var nav     = document.getElementById('main-nav');
	var overlay = document.querySelector('.nav-overlay');
	var body    = document.body;

	function isMobile() {
		return window.matchMedia('(max-width: 959px)').matches;
	}

	function openNav() {
		nav.classList.add('is-open');
		overlay.classList.add('is-visible');
		burger.setAttribute('aria-expanded', 'true');
		body.classList.add('nav-locked');
	}

	function closeNav() {
		nav.classList.remove('is-open');
		overlay.classList.remove('is-visible');
		burger.setAttribute('aria-expanded', 'false');
		body.classList.remove('nav-locked');
		closeAllSubmenus();
	}

	if (burger && nav) {
		burger.addEventListener('click', function () {
			nav.classList.contains('is-open') ? closeNav() : openNav();
		});
	}
	if (closeBtn) closeBtn.addEventListener('click', closeNav);
	if (overlay) overlay.addEventListener('click', closeNav);

	/* Sous-menus : accordéon sur mobile, dropdown au clic sur desktop */
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

			// Sur desktop : un seul sous-menu ouvert à la fois.
			// Sur mobile : accordéon libre, plusieurs peuvent rester ouverts.
			if (!isMobile()) closeAllSubmenus(btn);

			li.classList.toggle('is-open', !isOpen);
			btn.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
		});
	});

	/* Clic en dehors = fermeture des sous-menus (desktop uniquement) */
	document.addEventListener('click', function (e) {
		if (!isMobile() && !e.target.closest('.main-nav li')) {
			closeAllSubmenus();
		}
	});

	/* Echap = tout fermer */
	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape') {
			closeAllSubmenus();
			closeNav();
		}
	});

	/* Repasser en mode desktop propre si on redimensionne la fenêtre */
	window.addEventListener('resize', function () {
		if (!isMobile()) closeNav();
	});

});