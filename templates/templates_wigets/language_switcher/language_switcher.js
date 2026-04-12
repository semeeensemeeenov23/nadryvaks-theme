$(document).ready(function () {
    if ($('.language_select-toggler').is('div')) {
        var language_toggler = $(".language_select-toggler");
        var language_select = $("#language_select");
        var language_select_list = language_select.find('.language_select-list');

        function toggleLanguageSwitcher() {
            if (language_select_list.hasClass("show")) {
                language_select_list.removeClass("show");
                language_select.removeClass("active");
                $(document).off("click", click_outside_language);
            } else {
                language_select_list.addClass("show");
                language_select.addClass("active");
                $(document).on("click", click_outside_language);
            }
        }

        function click_outside_language(e) {
            if (!language_select.has(e.target).length) {
                language_select_list.removeClass("show");
                language_select.removeClass("active");
                $(document).off("click", click_outside_language);
            }
        }

        language_toggler.on('click', toggleLanguageSwitcher);
    }
});
