/*
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body'),
		$header = $('#header'),
		$banner = $('#banner');

	// Breakpoints.
		breakpoints({
			xlarge:	'(max-width: 1680px)',
			large:	'(max-width: 1280px)',
			medium:	'(max-width: 980px)',
			small:	'(max-width: 736px)',
			xsmall:	'(max-width: 480px)'
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Header.
		if ($banner.length > 0
		&&	$header.hasClass('alt')) {

			$window.on('resize', function() { $window.trigger('scroll'); });

			$banner.scrollex({
				bottom:		$header.outerHeight(),
				terminate:	function() { $header.removeClass('alt'); },
				enter:		function() { $header.addClass('alt'); },
				leave:		function() { $header.removeClass('alt'); }
			});

		}

	// Menu.
		var $menu = $('#menu');

		$menu._locked = false;

		$menu._lock = function() {

			if ($menu._locked)
				return false;

			$menu._locked = true;

			window.setTimeout(function() {
				$menu._locked = false;
			}, 350);

			return true;

		};

		$menu._show = function() {

			if ($menu._lock())
				$body.addClass('is-menu-visible');

		};

		$menu._hide = function() {

			if ($menu._lock())
				$body.removeClass('is-menu-visible');

		};

		$menu._toggle = function() {

			if ($menu._lock())
				$body.toggleClass('is-menu-visible');

		};

		$menu
			.appendTo($body)
			.on('click', function(event) {

				event.stopPropagation();

				// Hide.
					$menu._hide();

			})
			.find('.inner')
				.on('click', '.close', function(event) {

					event.preventDefault();
					event.stopPropagation();
					event.stopImmediatePropagation();

					// Hide.
						$menu._hide();

				})
				.on('click', function(event) {
					event.stopPropagation();
				})
				.on('click', 'a', function(event) {

					var href = $(this).attr('href');

					event.preventDefault();
					event.stopPropagation();

					// Hide.
						$menu._hide();

					// Redirect.
						window.setTimeout(function() {
							window.location.href = href;
						}, 350);

				});

		$body
			.on('click', 'a[href="#menu"]', function(event) {

				event.stopPropagation();
				event.preventDefault();

				// Toggle.
					$menu._toggle();

			})
			.on('keydown', function(event) {

				// Hide on escape.
					if (event.keyCode == 27)
						$menu._hide();

			});

})(jQuery);




/// Função para abrir o popup
function openPopup(button) {
    // Obter o ID do popup associado ao botão clicado
    var popupId = button.getAttribute('data-info');

    // Obter o texto do parágrafo dentro do artigo associado ao botão clicado
    var articleText = button.parentElement.querySelector('p').textContent;

    // Atualizar o texto do popup com o texto do parágrafo
    document.getElementById(popupId).querySelector('.popup-content p').textContent = articleText;

    // Exibir o popup associado
    document.getElementById(popupId).style.display = 'block';
}

// Adicionar evento de clique para abrir o popup para cada botão "Saiba mais"
document.querySelectorAll('.special').forEach(function(button) {
    button.addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link

        // Verificar se o popup já está aberto
        var popupId = button.getAttribute('data-info');
        var popup = document.getElementById(popupId);
        if (popup.style.display === 'block') {
            return; // Não fazer nada se o popup já estiver aberto
        }

        // Abrir o popup
        openPopup(button);
    });
});

// Adicionar evento de clique para fechar cada popup ao clicar no botão de fechar
document.querySelectorAll('.popup .close').forEach(function(closeButton) {
    closeButton.addEventListener('click', function() {
        // Ocultar o popup quando o botão de fechar é clicado
        this.closest('.popup').style.display = 'none';
    });
});

// Adicionar evento de clique para fechar o popup ao clicar fora do conteúdo
document.querySelectorAll('.popup').forEach(function(popup) {
    popup.addEventListener('click', function(event) {
        if (event.target === this) {
            this.style.display = 'none';
        }
    });
});












/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// CURSOR

let x1 = 0, y1 = 0;
const dist_to_draw = 50;
const delay = 1000;
const fsize = ['1.1rem', '1.4rem', '.8rem', '1.7rem'];
const colors = [
  '#E23636',
  '#F9F3EE',
  '#E1F8DC',
  '#B8AFE6',
  '#AEE1CD',
  '#5EB0E5'
];

const rand = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
const selRand = (o) => o[rand(0, o.length - 1)];
const distanceTo = (x1, y1, x2, y2) => Math.sqrt((Math.pow(x2 - x1, 2)) + (Math.pow(y2 - y1, 2)));
const shouldDraw = (x, y) => (distanceTo(x1, y1, x, y) >= dist_to_draw &&
                              x >= 0 && x <= document.documentElement.clientWidth &&
                              y >= 0 && y <= document.documentElement.scrollHeight);

const addStr = (x, y) => {
  const str = document.createElement("div");
  str.innerHTML = '&#10022;';
  str.className = 'star';
  str.style.top = `${y + window.scrollY + rand(-20,20)}px`; // Ajuste para considerar a rolagem vertical
  str.style.left = `${x}px`;
  str.style.color = selRand(colors);
  str.style.fontSize = selRand(fsize);
  document.body.appendChild(str);

  const fs = 10 + 5 * parseFloat(getComputedStyle(str).fontSize);
  
  str.animate({
    translate: `0 ${(y + fs + window.scrollY) > document.documentElement.scrollHeight ? document.documentElement.scrollHeight - y - window.scrollY : fs}px`, // Ajuste para considerar a rolagem vertical
    opacity: 0,
    transform: `rotateX(${rand(1, 500)}deg) rotateY(${rand(1, 500)}deg)`
  }, {
    duration: delay,
    fill: 'forwards'
  });

  setTimeout(() => {
    str.remove();
  }, delay);
};

addEventListener("mousemove", (e) => {
  const {clientX, clientY} = e;
  if(shouldDraw(clientX, clientY)){
    addStr(clientX, clientY);
    x1 = clientX;
    y1 = clientY;
  }
});

// Selecionar todos os botões "Saiba mais"
document.querySelectorAll('#four .special').forEach(function(button) {
    button.addEventListener('click', function() {
        // Exibir o popup
        document.getElementById('popup').style.display = 'block';
        
        // Obter as informações específicas do botão clicado e atualizar o texto do popup
        var info = button.getAttribute('data-info');
        document.getElementById('popup-text').textContent = info;
    });
});

// Selecionar o elemento de fechamento do popup e adicionar um evento de clique
document.querySelector('#popup .close').addEventListener('click', function() {
    // Ocultar o popup
    document.getElementById('popup').style.display = 'none';
});
