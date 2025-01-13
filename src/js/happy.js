var $ = jQuery;
const mediaQueryMax991px = window.matchMedia("(max-width: 991px)");
const mediaQueryMax767px = window.matchMedia("(max-width: 767px)");

// scroll to hash on click
$("a[href*='#']").on("click", function (e) {
	let hrefID = $(this).attr("href").substring(1);
	// console.log();
	if (document.querySelector(`[id="${hrefID}"]`)) {
		document.querySelector(`[id="${hrefID}"]`).click();
	}

	e.preventDefault();
	var $self = $(this);

	if ($("#" + $self.attr("href").split("#").pop()).length) {
		$("html, body").animate({
				scrollTop: $("#" + $self.attr("href").split("#").pop()).offset().top - 140,
			},
			500
		);
	} else {
		window.location = window.location.origin + $(this).attr("href");
	}
});

// scroll to hash if in url
// $(document).ready(function () {
// 	if (window.location.hash && $(window.location.hash)) {
// 		let hrefID = window.location.hash.substring(1);

// 		if (document.querySelector(`[id="${hrefID}"]`)) {
// 			document.querySelector(`[id="${hrefID}"]`).click();
// 		}

// 		window.setTimeout(function () {
// 			$("html, body").animate({
// 					scrollTop: $(window.location.hash).offset().top - 140,
// 				},
// 				2000
// 			);
// 		}, 250);
// 	}
// });

// $(window).on("load", function () {
// 	if (window.location.hash && $(window.location.hash).length) {
// 		let hrefID = window.location.hash.substring(1);

// 		// Kliknięcie w element z ID, jeśli istnieje
// 		if (document.querySelector(`[id="${hrefID}"]`)) {
// 			document.querySelector(`[id="${hrefID}"]`).click();
// 		}

// 		// Poczekanie na pełne załadowanie, a potem przewinięcie
// 		window.setTimeout(function () {
// 			$("html, body").animate({
// 					scrollTop: $(window.location.hash).offset().top - 140,
// 				},
// 				2000
// 			);
// 		}, 250);
// 	}
// });


// $(window).on("load", function () {
// 	if (window.location.hash && $(window.location.hash).length) {
// 		let hrefID = window.location.hash.substring(1);

// 		if (document.querySelector(`[id="${hrefID}"]`)) {
// 			document.querySelector(`[id="${hrefID}"]`).click();
// 		}

// 		// Czekaj, aż wysokość dokumentu przestanie się zmieniać
// 		let lastHeight = document.body.scrollHeight;
// 		let checkHeight = setInterval(function () {
// 			let currentHeight = document.body.scrollHeight;

// 			if (currentHeight === lastHeight) {
// 				clearInterval(checkHeight);

// 				// Rozpocznij przewijanie po ustabilizowaniu się wysokości strony
// 				$("html, body").animate({
// 						scrollTop: $(window.location.hash).offset().top - 140,
// 					},
// 					2000
// 				);
// 			} else {
// 				lastHeight = currentHeight;
// 			}
// 		}, 100); // Sprawdzaj co 100ms
// 	}
// });


// $(document).ready(function () {
// 	// Wyłącz domyślne przewijanie przeglądarki
// 	console.log('scrolling')
// 	if (window.location.hash) {
// 		event.preventDefault(); // Zablokuj domyślne przewijanie
// 		history.replaceState(null, null, ' '); // Usuń hash z adresu
// 	}

// 	// Ręczne przewijanie po załadowaniu strony
// 	$(window).on('load', function () {
// 		if (window.location.hash && $(window.location.hash).length) {
// 			let hrefID = window.location.hash.substring(1);

// 			// Kliknięcie w element, jeśli istnieje
// 			if (document.querySelector(`[id="${hrefID}"]`)) {
// 				document.querySelector(`[id="${hrefID}"]`).click();
// 			}

// 			// Przewiń do elementu
// 			setTimeout(function () {
// 				$('html, body').animate({
// 						scrollTop: $(window.location.hash).offset().top - 140,
// 					},
// 					2000
// 				);
// 			}, 250);
// 		}
// 	});
// });



// $(window).on('load', function () {
// 	// Pobierz parametr scroll z adresu URL
// 	const urlParams = new URLSearchParams(window.location.search);
// 	const scrollToID = urlParams.get('scroll'); // Pobiera wartość parametru ?scroll

// 	// Jeśli parametr istnieje i element o podanym ID istnieje
// 	if (scrollToID && document.querySelector(`#${scrollToID}`)) {
// 		let targetElement = document.querySelector(`#${scrollToID}`);

// 		// Kliknij w element, jeśli potrzebne
// 		if (targetElement) {
// 			targetElement.click();
// 		}

// 		// Przewiń do elementu
// 		setTimeout(function () {
// 			$('html, body').animate({
// 					scrollTop: $(targetElement).offset().top - 140,
// 				},
// 				2000
// 			);
// 		}, 250);
// 	}
// });



// https://stackoverflow.com/questions/17134823/detect-element-style-changes-with-javascript

const Observe = (sel, opt, cb) => {
	const Obs = new MutationObserver((m) => [...m].forEach(cb));
	document.querySelectorAll(sel).forEach((el) => Obs.observe(el, opt));
};

// Observe(".wppopups-whole", {
//     attributesList: ["style"], // Only the "style" attribute
//     attributeOldValue: true, // Report also the oldValue
// }, (m) => {
//     console.log(m); // Mutation object
// });

const loadVideo = () => {
	$(function () {
		$("video:not(.working-video__video) source").each(function () {
			var sourceFile = $(this).attr("data-src");
			$(this).attr("src", sourceFile);
			var video = this.parentElement;
			video.load();
			video.play();
		});
	});
};

if (document.querySelector("video")) {
	//lazyLoadVideo();
	$(document).ready(function () {
		loadVideo();
	});
}




const formValidationHandler = () => {
	const name = document.querySelector('.form-validation [data-input-name="imie-i-nazwisko"] input');
	const nameHolder = document.querySelector('.form-validation [data-input-name="imie-i-nazwisko"]');

	const email = document.querySelector('.form-validation [data-input-name="email"] input');
	const emailHolder = document.querySelector('.form-validation [data-input-name="email"]');
	const number = document.querySelector('.form-validation [data-input-name="tel"] input');
	const numberHolder = document.querySelector('.form-validation [data-input-name="tel"]');

	const question = document.querySelector('.form-validation [data-input-name="message"] textarea');
	const questionHolder = document.querySelector('.form-validation [data-input-name="message"]');
	console.log(question);

	let nameState = false;
	let emailState = false;
	let questionState = false;
	let numberState = false;

	document.querySelectorAll('.form__input-container').forEach(el => {
		el.classList.remove('validated');
	});
	number.value = '';
	question.value = '';

	$('#file-name-container-inner').empty();

	name.value = '';
	email.value = '';
	if (question) {
		question.value = '';
	}

	const sendButton = document.querySelector('.form__send');

	const validateEmail = email => {
		var regex =
			/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return regex.test(String(email).toLowerCase());
	};

	if (nameHolder) {
		if (name.value != '') {
			nameHolder.classList.add('validated');
			nameState = true;
		}
	} else {
		nameState = true;
	}

	if (emailHolder) {
		if (validateEmail(email.value)) {
			emailHolder.classList.add('validated');
			emailState = true;
		}
	} else {
		emailState = true;
	}


	if (numberHolder && number) {
		if (number.value != '') {
			telefonNumber = parseInt(number.value);
		}
	} else {
		numberState = false;
	}


	if (questionHolder) {
		if (question.value != '') {
			questionHolder.classList.add('validated');
			questionState = true;
		}
	} else {
		questionState = true;
	}
	if (nameHolder) {
		name.addEventListener('input', function (e) {
			if (e.target.value != '') {
				nameHolder.classList.add('validated');
				nameState = true;
			} else {
				nameHolder.classList.remove('validated');
				nameState = false;
			}
		});
	}

	if (emailHolder) {
		email.addEventListener('input', function (e) {
			if (validateEmail(e.target.value)) {
				emailHolder.classList.add('validated');
				emailState = true;
			} else {
				emailHolder.classList.remove('validated');
				emailState = false;
			}
		});
	}

	if (questionHolder) {
		question.addEventListener('input', function (e) {
			if (e.target.value != '') {
				questionHolder.classList.add('validated');
				questionState = true;
			} else {
				questionHolder.classList.remove('validated');
				questionState = false;
			}
		});
	}




	var options = {
		onComplete: function (cep) {
			// console.log('CEP Completed!:' + cep);
			numberHolder.classList.add('validated');
			numberState = true;
			console.log('complete');
			// checkValidation();
		},
		onKeyPress: function (cep, event, currentField, options) {
			if (number.value.length > 10) {
				numberHolder.classList.add('validated');
				numberState = true;
			} else {
				numberHolder.classList.remove('validated');
				numberState = false;
			}

			// console.log('keypress')
			// checkValidation();
		},
		onChange: function (cep) {
			if (number.value.length > 10) {
				numberHolder.classList.add('validated');
				numberState = true;
			} else {
				numberHolder.classList.remove('validated');
				numberState = false;
			}
			// numberHolder.classList.remove('validated')
			// numberState = false;
			// console.log('change')
			// checkValidation();
		},
		onInvalid: function (val, e, f, invalid, options) {
			numberHolder.classList.remove('validated');
			numberState = false;
			console.log('invalid');
			// checkValidation();
		},
	};

	jQuery(`.form-validation [data-input-name="tel"] input`).mask('999-999-999-999-999', options);

	const clearFormAfterSend = () => {
		// let wpcf7Elm = document.querySelector('.contact-form__contact-box>div.wpcf7');
		let wpcf7Elm =
			document.querySelector('.contact-form__contact-box>div.wpcf7') ||
			document.querySelector('.contact-page-form__contact-box>div.wpcf7') ||
			document.querySelector('.application__application-box>div.wpcf7');
		wpcf7Elm.addEventListener(
			'wpcf7mailsent',
			function (event) {
				nameState = false;
				emailState = false;
				questionState = false;

				document.querySelectorAll('.form__input-container').forEach(el => {
					el.classList.remove('validated');
				});

				$('#file-name-container-inner').empty();
			},
			false
		);
	};

	clearFormAfterSend();

	const handleFormSendMessage = () => {
		const messageSentContainer = document.querySelector('.form__message-sent');
		let wpcf7Elm =
			document.querySelector('.contact-form__contact-box>div.wpcf7') ||
			document.querySelector('.contact-page-form__contact-box>div.wpcf7') ||
			document.querySelector('.application__application-box>div.wpcf7');

		wpcf7Elm.addEventListener(
			'wpcf7mailsent',
			function (event) {
				messageSentContainer.classList.add('active');

				setTimeout(() => {
					messageSentContainer.classList.remove('active');
				}, 4000);
			},
			false
		);
	};
	handleFormSendMessage();
};

const formNegativeValidation = () => {
	$('.form-validation .form__input-container').each(function () {
		let $thisContainer = $(this);

		const observer = new MutationObserver(function (mutationsList) {
			mutationsList.forEach(function (mutation) {
				if (mutation.addedNodes.length > 0) {
					if ($thisContainer.find('.wpcf7-not-valid-tip').length !== 0) {
						$thisContainer.addClass('not-validated');
					}
				}

				if (mutation.removedNodes.length > 0) {
					if ($thisContainer.find('.wpcf7-not-valid-tip').length === 0) {
						$thisContainer.removeClass('not-validated');
					}
				}
			});
		});

		observer.observe(this, {
			childList: true,
			subtree: true,
		});

		$(this)
			.find('input, textarea')
			.on('input', function () {
				if ($thisContainer.hasClass('validated')) {
					$thisContainer.removeClass('not-validated');
				}
			});
	});
};

$(document).ready(function () {
	formNegativeValidation();
});


const readMoreHandler = () => {
	const hiddenText = document.querySelector('.hidden-text') || document.querySelector('.hidden-text-application-form');
	const readBtn =
		document.querySelector('.read-more-form') ||
		document.querySelector('.read-more-application-form') ||
		document.querySelector('.read-more-contact-form');

	readBtn.addEventListener('click', () => {
		hiddenText.classList.toggle('show-text');

		setTimeout(() => {
			if (hiddenText.classList.contains('show-text')) {
				readBtn.innerHTML = 'Czytaj mniej';
			} else {
				readBtn.innerHTML = '*..Czytaj więcej';

			}

		}, 0)

	})
}

// const catchConversionOnButton = () => {

// 	var wpcf7Elm = document.querySelector('#contact-form .wpcf7');

// 	if (wpcf7Elm) {
// 		const currentURL = window.location.href;

// 		wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
// 			gtag_report_conversion(currentURL);
// 		}, false);

// 	}

// 	var contactPageForm = document.querySelector('.contact-page-form .wpcf7');

// 	if (contactPageForm) {
// 		const currentURL = window.location.href;

// 		contactPageForm.addEventListener('wpcf7mailsent', function (event) {
// 			gtag_report_conversion(currentURL);
// 		}, false);

// 	}

// }

const catchConversionOnButton = () => {
	const addEventListenerToForm = (selector) => {
		const formElement = document.querySelector(selector);
		if (formElement) {
			const currentURL = window.location.href;
			formElement.addEventListener('wpcf7mailsent', () => {
				gtag_report_conversion(currentURL);
				gtag('event', 'generate_lead', {
					event_category: 'Lead Form',
					event_label: 'Contact Form Submission',
					page_url: currentURL,
				});
			}, false);
		}
	};

	// Dodajemy nasłuch na wskazane formularze
	addEventListenerToForm('#contact-form .wpcf7');
	addEventListenerToForm('.contact-page-form .wpcf7');
};



document.addEventListener('DOMContentLoaded', function () {
	if (
		document.querySelector('.page-template-home') ||
		document.querySelector('.page-template-contact') ||
		document.querySelector('.page-template-about-us') ||
		document.querySelector('.page-template-solutions') ||
		document.querySelector('.error404') ||
		document.querySelector('.page-template-career') ||
		document.querySelector('.page-template-services')
	) {
		formValidationHandler();
		formNegativeValidation();
		readMoreHandler();
		catchConversionOnButton();
	}
});


if (document.querySelector(`div.intro__bottom`)) {
	document.addEventListener("DOMContentLoaded", function () {
		const introSliderInit = () => {
			const introSlider = new Splide(".splide.intro__bottom", {
				type: "slide",
				autoplay: true,
				interval: 2000,
				resetProgress: true,
				pagination: false,
				arrows: false,
				mediaQuery: 'min',
				autoWidth: true,
				gap: 16,
				breakpoints: {
					1080: {
						destroy: true,
					},

				},
			});
			introSlider.mount();

		};




		function calculateCompanyYearDifference() {
			// Create a Date object for January 1, 2024
			const targetDate = new Date('2010-01-01');

			// Get today's date
			const today = new Date();

			// Calculate the difference in years
			const yearDifference = today.getFullYear() - targetDate.getFullYear();

			// Select the element with the class 'item' that contains the text '0 lat'
			const itemElements = document.querySelectorAll('.intro__bottom-elem-up');

			itemElements.forEach(element => {
				// Check if the element contains '0 lat' and replace it with the calculated age
				if (element && element.textContent.includes('0 lat')) {
					element.textContent = element.textContent.replace('0 lat', `${yearDifference} lat`);
				}
			});
		}
		calculateCompanyYearDifference();
		introSliderInit();


	});
}

if (document.body.classList.contains('home') || document.body.classList.contains('page-template-services') || document.body.classList.contains('page-template-about-us')) {
	document.addEventListener("DOMContentLoaded", function () {

		const circleMove = document.querySelector(".trust .circle-move");
		const testCircles = document.querySelectorAll(".trust .box-logo");
		let activeCircleIndex = null; // Zmienna przechowująca numer najechanego box-logo

		let collisionInterval;
		let resumeTimeout;

		function updateCircleAnimation() {
			if (!circleMove) return;

			const wrapper = document.querySelector(".trust .carousel-wrapper");
			const wrapperDiameter = wrapper.offsetWidth;
			const circleRadius = wrapperDiameter / 2;

			circleMove.style.animation = `moveCircle 18s linear infinite`;

			const keyframes = `
				@keyframes moveCircle {
					0% {
						transform: translate(-50%, -50%) rotate(0deg) translateX(${circleRadius}px);
					}
					100% {
						transform: translate(-50%, -50%) rotate(360deg) translateX(${circleRadius}px);
					}
				}
			`;

			let styleSheet = document.querySelector("#dynamic-animations");
			if (!styleSheet) {
				styleSheet = document.createElement("style");
				styleSheet.id = "dynamic-animations";
				document.head.appendChild(styleSheet);
			}

			styleSheet.innerHTML = keyframes;
		}

		function detectCollision() {
			// console.log('dzialam detect')
			const rect = circleMove.getBoundingClientRect();
			const ballRadius = rect.width / 2;
			const ballCenterX = rect.left + ballRadius + window.scrollX;
			const ballCenterY = rect.top + ballRadius + window.scrollY;

			let activeCircleIndex = null; // Zmienna do przechowywania indeksu aktywnego koła

			testCircles.forEach((testCircle, index) => {
				const testRect = testCircle.getBoundingClientRect();
				const testRadius = testRect.width / 2;
				const testCenterX = testRect.left + testRadius + window.scrollX;
				const testCenterY = testRect.top + testRadius + window.scrollY;

				const distance = Math.sqrt(
					(ballCenterX - testCenterX) ** 2 + (ballCenterY - testCenterY) ** 2
				);

				if (distance < ballRadius + testRadius) {
					testCircle.classList.add("active");
					activeCircleIndex = index; // Zapamiętaj indeks aktywnego koła

					// Wyświetlenie ID box-logo
					// console.log("Kolizja z box-logo ID: " + (index));

					// Przechodzenie do odpowiedniego slajdu
					homeTrustSplide.go(index - 1); // id slajdu odpowiada indexowi koła
				} else {
					testCircle.classList.remove("active");
				}
			});
		}

		// Funkcja zatrzymująca animację, dodająca klasę active i zapisująca numer box-logo
		function handleMouseOver(event, index) {
			clearInterval(collisionInterval);
			clearTimeout(resumeTimeout); // Zatrzymanie timera, jeśli użytkownik wrócił
			// console.log('mouseover detected')
			// Zatrzymanie animacji circleMove
			circleMove.style.animationPlayState = "paused";

			// Usunięcie klasy active z poprzedniego box-logo
			// if (activeCircleIndex !== null) {
			// 	testCircles[activeCircleIndex].classList.remove("active");
			// }  
			// Sprawdzenie i usunięcie klasy active z innych testCircles
			testCircles.forEach((circle, i) => {
				if (circle.classList.contains("active") && i !== index) {
					circle.classList.remove("active");
				}
			});

			// Dodanie klasy active do aktualnie najechanego box-logo
			testCircles[index].classList.add("active");

			// Zapisanie numeru najechanego elementu
			activeCircleIndex = index;

			// Wyświetlenie numeru w konsoli
			// console.log("Najechano na box-logo nr: " + (index));
			homeTrustSplide.go(index - 1);
		}




		// Funkcja wznawiająca animację i detekcję kolizji
		function resumeAnimations() {
			updateCircleAnimation(); // Wznawiamy animację
			collisionInterval = setInterval(detectCollision, 100); // Wznawiamy detekcję kolizji
		}

		// Obsługa wyjazdu myszki poza sekcję .trust
		const trustSection = document.querySelector('section.trust');
		trustSection.addEventListener('mouseleave', () => {
			resumeTimeout = setTimeout(() => {
				resumeAnimations();
			}, 2000); // Wznowienie po 4 sekundach
		});




		// // Przypisanie listenerów do każdego box-logo
		// testCircles.forEach((testCircle, index) => {
		// 	testCircle.addEventListener("mouseover", (event) => handleMouseOver(event, index));
		// });

		testCircles.forEach((testCircle, index) => {
			testCircle.addEventListener("mouseover", (event) => handleMouseOver(event, index));

			// Dodanie obsługi dotyku
			testCircle.addEventListener("touchstart", (event) => {
				// Zapobieganie domyślnej akcji (np. przewijania strony)
				event.preventDefault();
				handleMouseOver(event, index);
			});
		});

		updateCircleAnimation();
		window.addEventListener("resize", updateCircleAnimation);
		// setInterval(detectCollision, 100);
		collisionInterval = setInterval(detectCollision, 100);








		// Funkcja do aktualizacji aktywnej klasy dla box-logo
		function updateActiveLogo(slideIndex) {
			// Usunięcie klasy 'active' z wszystkich box-logo
			const allLogos = document.querySelectorAll('.trust .box-logo');
			allLogos.forEach((logo) => {
				logo.classList.remove('active');
			});

			// Dodanie klasy 'active' do odpowiedniego box-logo
			const activeLogoIndex = slideIndex + 1; // Przesunięcie o 1, bo box-logo są od 1
			const activeLogo = document.querySelector(`.trust .box-logo.logo-${activeLogoIndex}`);
			if (activeLogo) {
				activeLogo.classList.add('active');
			}
		}

		// Dodanie event listenerów do przycisków strzałek
		const prevButton = document.querySelector('.trust__splide-arrow--prev');
		const nextButton = document.querySelector('.trust__splide-arrow--next');

		prevButton.addEventListener('click', () => {
			// homeTrustSplide.go('<'); // Idź do poprzedniego slajdu
			const currentIndex = homeTrustSplide.index; // Uzyskaj aktualny indeks slajdu
			updateActiveLogo(currentIndex); // Zaktualizuj aktywną klasę
			clearInterval(collisionInterval);
			clearTimeout(resumeTimeout); // Zatrzymanie timera, jeśli użytkownik wrócił
			circleMove.style.animationPlayState = "paused";
		});

		nextButton.addEventListener('click', () => {
			// homeTrustSplide.go('>'); // Idź do następnego slajdu
			const currentIndex = homeTrustSplide.index; // Uzyskaj aktualny indeks slajdu
			updateActiveLogo(currentIndex); // Zaktualizuj aktywną klasę
			clearInterval(collisionInterval);
			clearTimeout(resumeTimeout); // Zatrzymanie timera, jeśli użytkownik wrócił
			circleMove.style.animationPlayState = "paused";
		});
	});


}