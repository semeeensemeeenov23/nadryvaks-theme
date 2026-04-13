$(document).ready(function () {

    setTimeout(function(){
        if(!window.csrfToken_sign_up && !window.csrfToken) {
            window.csrfToken = null;

            function fetchCsrfToken(callback) {
                if (window.csrfToken) {
                    callback(window.csrfToken);
                } else {
                    $.get('/get-csrf-token', function (data) {
                        window.csrfToken = data.csrfToken; // Збереження токена
                        callback(data.csrfToken);
                    });
                }
            }

            fetchCsrfToken(function (csrfToken) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
            });
        }
    },1000);

    $(document).on('submit', '.login_form', function () {
        var _form = $(this);
        var _action = _form.attr('action');

        _form.find('.waiting_block').html(_loader).show();
        _form.find('.form_error').slideUp();
        var formData = new FormData($(_form)[0]);

        $.ajax({
            url: _action,
            type: 'post',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {
                _form.find('.waiting_block').html('').hide();
                if (!data.success) {
                    _form.find('.form_error').html(_form_login_error).slideDown(300);
                }
                else{
                    window.location.href = data.url_autologin;
                }
            },
            error: function (data) {
                _form.find('.waiting_block').html('').hide();
                _form.find('.form_error').html(_form_login_error).slideDown(300);
            }
        });
        return false;
    });

});
