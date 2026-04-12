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
    },2000);

    $(document).on('submit', '.contact_form', function () {
        var _form = $(this);
        var _action = _form.attr('action');

        _form.append('<input type="hidden" name="seraphim" id="seraphim" value="1">');
        _form.find('.waiting_block').html(_loader).show();
        _form.find('.form_success, .form_error').slideUp();
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
                _form.find('#seraphim').remove();
                _form[0].reset();
                if (data.success) {
                    _form.find('.form_success').html(_success_contact_form).slideDown(300);
                } else {
                    _form.find('.form_error').html(_error_contact_form).slideDown(300);
                }
                //console.log('data_success', data);
            },
            error: function (data) {
                _form.find('.waiting_block').html('').hide();
                _form.find('#seraphim').remove();
                _form.find('.form_error').html(_error_contact_form).slideDown(300);
                //console.log('data_error', data);
            }
        });
        return false;
    });
});
