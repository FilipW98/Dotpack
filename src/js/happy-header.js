document.addEventListener('DOMContentLoaded', function () {
    const langSwitcher = document.querySelector('.header-desktop__lang-switcher');
    const langDot = document.querySelector('.header-desktop__lang-dot');
    const langPL = document.querySelector('#languages-menu .lang-item-pl a');
    const langEN = document.querySelector('#languages-menu .lang-item-en a');

    const mobileLangSwitcher = document.querySelector('.header-mobile__lang-switcher');
    const mobileLangDot = document.querySelector('.header-mobile__lang-dot');

    langSwitcher.addEventListener('click', function () {
        if (langDot.classList.contains('other-lang')) {
            langDot.classList.remove('other-lang');
            langPL.click(); // Kliknięcie przycisku z językiem polskim
        } else {
            langDot.classList.add('other-lang');
            langEN.click(); // Kliknięcie przycisku z drugim językiem
        }
    });

    mobileLangSwitcher.addEventListener('click', function () {
        if (mobileLangDot.classList.contains('other-lang')) {
            mobileLangDot.classList.remove('other-lang');
            langPL.click(); // Kliknięcie przycisku z językiem polskim
        } else {
            mobileLangDot.classList.add('other-lang');
            langEN.click(); // Kliknięcie przycisku z drugim językiem
        }
    });
});

function checkIntroSection() {
    const introSection = document.querySelector('.intro');
    const header = document.querySelector('.header.header');

    if (!introSection && header) {
        header.classList.add('header-transparent');


    } else {
        header.classList.add('header-like-home');
    }
}

// Wywołanie funkcji na załadowanie DOM
checkIntroSection();

jQuery(document).ready(function ($) {

    function isHomePage() {
        return window.location.pathname === '/'; // lub '/index.php' w zależności od struktury URL
    }

    let lastScrollTop = 0; // Zmienna przechowująca poprzednią pozycję scrolla

    function toggleHeaderClass() {
        const scrollTop = window.scrollY;
        let introElement = $('.intro__middle-box');

        // console.log('test-toggle-header');

        if (introElement.length === 0) {
            introElement = $('.intro__middle-title-only');
        }
        const introOffsetTop = introElement.length ? introElement.offset().top : 0; // Sprawdzamy, czy element istnieje, jeśli nie — ustawiamy na 0
        const screenWidth = window.innerWidth;


        // Zabezpieczenie - jeśli odległość od góry jest mniejsza niż 30px, zawsze pokazujemy nagłówek
        if (scrollTop < 30) {
            $('.header-mobile__outer, .header-desktop').removeClass('hide');
            lastScrollTop = scrollTop; // Aktualizujemy pozycję scrolla
            // return; // Kończymy funkcję, aby nie sprawdzać dalszych warunków
        }

        if (screenWidth < 992) {
            // Dla nagłówka mobilnego
            const mobileHeader = $('.header-mobile__outer');
            const mobileHeaderHeight = mobileHeader.outerHeight(); // Wysokość nagłówka mobilnego
            const mobileFixedClass = 'header-fixed';
            const hideClass = 'hide'; // Klasa do chowania headera
            // console.log('test-mobile-header');

            // Warunki dla headera mobilnego
            if (scrollTop > introOffsetTop - (50 + mobileHeaderHeight)) {
                mobileHeader.addClass(mobileFixedClass);
            } else {
                mobileHeader.removeClass(mobileFixedClass);
            }

            // Sprawdzenie kierunku przewijania i zarządzanie klasą hide
            if (scrollTop > lastScrollTop) {
                // Jeśli przewijamy w dół — dodajemy klasę hide
                mobileHeader.addClass(hideClass);
            } else {
                // Jeśli przewijamy w górę — usuwamy klasę hide
                mobileHeader.removeClass(hideClass);
            }

        } else {

            // Dla nagłówka desktopowego
            const desktopHeader = $('.header-desktop');
            const desktopHeaderHeight = desktopHeader.outerHeight(); // Wysokość nagłówka desktop
            const desktopFixedClass = 'header-fixed';
            const hideClass = 'hide'; // Klasa do chowania headera

            // Warunki dla headera desktopowego
            if (scrollTop > introOffsetTop - (50 + desktopHeaderHeight)) {
                desktopHeader.addClass(desktopFixedClass);
            } else {
                desktopHeader.removeClass(desktopFixedClass);
            }

            // console.log(scrollTop, introOffsetTop, desktopHeaderHeight, (introOffsetTop - (50 + desktopHeaderHeight)));

            // Logika ukrywania headera desktop
            if (scrollTop > 500) {
                // Jeśli przewijamy w dół i jesteśmy poniżej 500px — dodajemy klasę hide
                if (scrollTop > lastScrollTop) {
                    desktopHeader.addClass(hideClass);
                } else {
                    // Jeśli przewijamy w górę — usuwamy klasę hide
                    desktopHeader.removeClass(hideClass);
                }
            } else {
                // Jeśli scrollTop jest mniejsze niż 500px — usuwamy klasę hide
                desktopHeader.removeClass(hideClass);
            }
        }

        // Zapisz aktualną pozycję scrolla
        lastScrollTop = scrollTop;
    }

    // Wywołujemy funkcję, jeśli jesteśmy na stronie głównej 
    // Nasłuchujemy na zdarzenie scroll
    $(window).on('scroll', toggleHeaderClass);
    // Wywołujemy funkcję raz na początek
    toggleHeaderClass();

    setTimeout(() => {
        toggleHeaderClass();
    }, 300);

    // Nasłuchujemy na zmianę rozmiaru okna, aby przełączać logikę dla desktop i mobile
    $(window).on('resize', toggleHeaderClass);







    function handleMenuHover() {
        const menuItems = document.querySelectorAll('.header-desktop__menu-item');

        menuItems.forEach(item => {
            const link = item.querySelector('.header-desktop__menu-simple-link.has-submenu');
            const submenu = item.querySelector('.header-desktop__submenu');

            if (link && submenu) {
                link.addEventListener('mouseenter', () => {
                    link.classList.add('active');
                });

                item.addEventListener('mouseleave', () => {
                    link.classList.remove('active');
                });

                submenu.addEventListener('mouseenter', () => {
                    link.classList.add('active');
                });

                submenu.addEventListener('mouseleave', () => {
                    link.classList.remove('active');
                });
            }
        });
    }

    // Wywołanie funkcji
    handleMenuHover();





    // // Funkcja do obsługi menu mobilnego
    // function menuMobileHandler() {
    //     // Obsługuje przycisk otwierania menu
    //     $('.header-mobile__menu-button-container').on('click', function () {
    //         $('.header-mobile__menu-container').addClass('active'); // Dodaje klasę aktywną do belki nagłówka
    //     });

    //     // Obsługuje przycisk zamykania menu
    //     $('.header-mobile__close-button').on('click', function () {
    //         $('.header-mobile__menu-container').removeClass('active'); // Usuwa klasę aktywną z belki nagłówka
    //     });

    //     // Obsługuje rozwijanie i zwijanie submenu
    //     $('.header-mobile__toggle').on('click', function (event) {
    //         event.preventDefault(); // Zapobiega domyślnej akcji przycisku



    //         // Znajdź równorzędny element .header-mobile__submenu i wykonaj toggle
    //         $(this).closest('.header-mobile__link-wrapper').next('.header-mobile__submenu').toggleClass('active');
    //         $(this).closest('.header-mobile__link-wrapper').toggleClass('active');

    //         // Toggle klasy 'active' dla przycisku
    //         $(this).toggleClass('active');
    //     });
    // }

    // // Wywołaj funkcję do obsługi menu mobilnego
    // menuMobileHandler();




    // function menuMobileHandler() {
    //     // Obsługuje przycisk otwierania menu
    //     $('.header-mobile__menu-button-container').on('click', function () {
    //         $('.header-mobile__menu-container').addClass('active'); // Dodaje klasę aktywną do belki nagłówka
    //     });

    //     // Obsługuje przycisk zamykania menu
    //     $('.header-mobile__close-button').on('click', function () {
    //         $('.header-mobile__menu-container').removeClass('active'); // Usuwa klasę aktywną z belki nagłówka
    //     });

    //     // Obsługuje rozwijanie i zwijanie submenu
    //     $('.arrow-icon').on('click', function (event) {
    //         event.preventDefault(); // Zapobiega domyślnej akcji przycisku

    //         const $submenu = $(this).closest('.header-mobile__link-wrapper').next('.header-mobile__submenu');
    //         const $linkWrapper = $(this).closest('.header-mobile__link-wrapper');

    //         $submenu.toggleClass('active'); // Przełącza klasę 'active' dla submenu
    //         $linkWrapper.toggleClass('active'); // Przełącza klasę 'active' dla wrappera linku

    //         // Toggle klasy 'active' dla ikony
    //         $(this).toggleClass('active');
    //     });
    // }

    // // Wywołaj funkcję do obsługi menu mobilnego
    // menuMobileHandler();


    function menuMobileHandler() {
        // Obsługuje przycisk otwierania menu
        $('.header-mobile__menu-button-container').on('click', function () {
            $('.header-mobile__menu-container').addClass('active'); // Dodaje klasę aktywną do belki nagłówka
            $('body').addClass('no-scroll'); // Dodaje klasę no-scroll do body
        });

        // Obsługuje przycisk zamykania menu
        $('.header-mobile__close-button').on('click', function () {
            $('.header-mobile__menu-container').removeClass('active'); // Usuwa klasę aktywną z belki nagłówka
            $('body').removeClass('no-scroll'); // Usuwa klasę no-scroll z body
        });

        // Obsługuje rozwijanie i zwijanie submenu
        $('.arrow-icon').on('click', function (event) {
            event.preventDefault(); // Zapobiega domyślnej akcji przycisku

            const $submenu = $(this).closest('.header-mobile__link-wrapper').next('.header-mobile__submenu');
            const $linkWrapper = $(this).closest('.header-mobile__link-wrapper');

            $submenu.toggleClass('active'); // Przełącza klasę 'active' dla submenu
            $linkWrapper.toggleClass('active'); // Przełącza klasę 'active' dla wrappera linku

            // Toggle klasy 'active' dla ikony
            $(this).toggleClass('active');
        });
    }

    // Wywołaj funkcję do obsługi menu mobilnego
    menuMobileHandler();






    // Pobierz wszystkie linki w menu
    const menuLinks = document.querySelectorAll('.header-desktop__menu-simple-link');

    // Pobierz bieżący URL
    const currentUrl = window.location.pathname;

    // Przechodzimy przez wszystkie linki
    menuLinks.forEach(link => {
        // Sprawdzamy, czy href linku pasuje do bieżącego URL
        if (link.getAttribute('href') === currentUrl) {
            // Dodaj klasę .current do pasującego linku
            link.classList.add('current');
        }
    });




});




document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('body.blog')) {

        const searchInput = document.querySelector('.blog-page__search-input');

        // Dodajemy obsługę klasy 'active' dla pola input
        searchInput.addEventListener('focus', function () {
            searchInput.classList.add('active');
        });

        searchInput.addEventListener('blur', function () {
            searchInput.classList.remove('active');
        });
    }

});