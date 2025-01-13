// jQuery(document).ready(function ($) {
//     $('#search').on('keyup', function () {
//         var keyword = $(this).val();
//         console.log('Search keyword:', keyword); // Logowanie wpisanego zapytania

//         $.ajax({
//             type: 'POST',
//             url: my_ajax_object.ajax_url,
//             data: {
//                 action: 'ajax_search',
//                 keyword: keyword
//             },
//             success: function (data) {
//                 console.log('Search results:', data); // Logowanie wyników wyszukiwania
//                 $('#blog-page__search-results').html(data); // Aktualizowanie wyników wyszukiwania
//             },
//             error: function (error) {
//                 console.log('Error:', error); // Logowanie błędów
//             }
//         });
//     });
// });


// jQuery(document).ready(function ($) {
//     let typingTimer; // Timer do debounce
//     const debounceInterval = 300; // Opóźnienie w milisekundach

//     $('#search').on('keyup', function () {
//         clearTimeout(typingTimer); // Czyści poprzedni timer

//         typingTimer = setTimeout(function () {
//             var keyword = $('#search').val();
//             console.log('Search keyword:', keyword); // Logowanie wpisanego zapytania

//             var resultsContainer = $('#blog-page__search-results');
//             var loader = resultsContainer.find('.loader');

//             if (keyword.length === 0) {
//                 resultsContainer.removeClass('active');
//                 resultsContainer.html('<div class="loader" style="display: none;"></div>');
//                 return;
//             }

//             resultsContainer.addClass('active');
//             loader.show();

//             $.ajax({
//                 type: 'POST',
//                 url: my_ajax_object.ajax_url,
//                 data: {
//                     action: 'ajax_search',
//                     keyword: keyword
//                 },
//                 success: function (data) {
//                     console.log('Search results:', data); // Logowanie wyników wyszukiwania
//                     resultsContainer.html(data);
//                     loader.hide();
//                 },
//                 error: function (error) {
//                     console.log('Error:', error); // Logowanie błędów
//                     loader.hide();
//                 }
//             });
//         }, debounceInterval);
//     });
// });




jQuery(document).ready(function ($) {
    let typingTimer; // Timer do debounce
    const debounceInterval = 300; // Opóźnienie w milisekundach

    $('#search').on('keyup', function () {
        clearTimeout(typingTimer); // Czyści poprzedni timer

        typingTimer = setTimeout(function () {
            var keyword = $('#search').val();
            console.log('Search keyword:', keyword); // Logowanie wpisanego zapytania

            var resultsContainer = $('#blog-page__search-results');
            var loader = resultsContainer.find('.loader');

            if (keyword.length === 0) {
                resultsContainer.removeClass('active');
                resultsContainer.html('<div class="loader" style="display: none;"></div>');
                return;
            }

            resultsContainer.addClass('active');
            loader.show();

            $.ajax({
                type: 'POST',
                url: my_ajax_object.ajax_url,
                data: {
                    action: 'ajax_search',
                    keyword: keyword
                },
                success: function (data) {
                    console.log('Search results:', data); // Logowanie wyników wyszukiwania
                    resultsContainer.html(data);
                    loader.hide();
                },
                error: function (error) {
                    console.log('Error:', error); // Logowanie błędów
                    loader.hide();
                }
            });
        }, debounceInterval);
    });

    // Ukrywanie wyników, gdy użytkownik kliknie poza pole wyszukiwania lub wyniki
    $(document).on('click', function (e) {
        if (!$(e.target).closest('#search, #blog-page__search-results').length) {
            $('#blog-page__search-results').removeClass('active');
            $('#blog-page__search-results').html('<div class="loader" style="display: none;"></div>');
        }
    });
});