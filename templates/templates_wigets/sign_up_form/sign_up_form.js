$(document).ready(function () {

    window.csrfToken = null;
    window.csrfToken_sign_up = 1;
    function fetchCsrfToken(callback) {
        if (window.csrfToken) {
            callback(window.csrfToken);
        } else {
            $.get('/get-csrf-token', function(data) {
                window.csrfToken = data.csrfToken; // Збереження токена
                callback(data.csrfToken);
            });
        }
    }

    fetchCsrfToken(function(csrfToken) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
    });

    var play_market_button_class = '.play-market-button';
    //play market
    if($(play_market_button_class).is('a')){
        setTimeout(function(){
            $(play_market_button_class).animate({opacity:'1'},500);
            $(play_market_button_class).attr('href','/thanks?play_market=1&language='+_language);
        },2000);
    }

    /*FP + FP_H*/
    function _0x246c(_0x4dde0c,_0x5b046d){const _0x3f800c=_0x3f80();return _0x246c=function(_0x246c71,_0x311245){_0x246c71=_0x246c71-0xc1;let _0x353513=_0x3f800c[_0x246c71];return _0x353513;},_0x246c(_0x4dde0c,_0x5b046d);}function _0x3f80(){const _0xbe5c4d=['crypto','4907376FMkNCI','70ReRIct','../cjs.js','visitorId','75286PBCEjH','from','_redarbi','enc','toString','src','13017fTluRX','encode','SHA-256','createElement','436440JftqEy','176msCLEf','onerror','296255eYMPGK','subtle','digest','then','28QgTCRs','77MLOdxj','map','appendChild','1548372WORTfv','join','SHA256','55053njLcBA','get','190MKJAVK'];_0x3f80=function(){return _0xbe5c4d;};return _0x3f80();}const _0x89ef6=_0x246c;(function(_0x4b6fc0,_0x23ad4a){const _0x563e15=_0x246c,_0x7137a3=_0x4b6fc0();while(!![]){try{const _0x5354e9=-parseInt(_0x563e15(0xd3))/0x1+-parseInt(_0x563e15(0xde))/0x2*(parseInt(_0x563e15(0xd9))/0x3)+-parseInt(_0x563e15(0xc4))/0x4*(parseInt(_0x563e15(0xe0))/0x5)+parseInt(_0x563e15(0xcf))/0x6+parseInt(_0x563e15(0xd0))/0x7*(-parseInt(_0x563e15(0xdd))/0x8)+-parseInt(_0x563e15(0xcb))/0x9*(-parseInt(_0x563e15(0xcd))/0xa)+parseInt(_0x563e15(0xc5))/0xb*(parseInt(_0x563e15(0xc8))/0xc);if(_0x5354e9===_0x23ad4a)break;else _0x7137a3['push'](_0x7137a3['shift']());}catch(_0x29ed65){_0x7137a3['push'](_0x7137a3['shift']());}}}(_0x3f80,0x66847));async function my_custom_sha256(_0x38fffe){const _0x398b57=_0x246c;if(window[_0x398b57(0xce)]&&window['crypto']['subtle']){const _0x4f753a=new TextEncoder(),_0x4ab4f7=_0x4f753a[_0x398b57(0xda)](_0x38fffe),_0x13d8b8=await crypto[_0x398b57(0xc1)][_0x398b57(0xc2)](_0x398b57(0xdb),_0x4ab4f7),_0x200ac0=Array[_0x398b57(0xd4)](new Uint8Array(_0x13d8b8)),_0x5033e1=_0x200ac0[_0x398b57(0xc6)](_0x50e249=>_0x50e249[_0x398b57(0xd7)](0x10)['padStart'](0x2,'0'))[_0x398b57(0xc9)]('');return _0x5033e1;}else{await loadCryptoJS();const _0x5aed81=CryptoJS[_0x398b57(0xca)](_0x38fffe);return _0x5aed81[_0x398b57(0xd7)](CryptoJS[_0x398b57(0xd6)]['Hex']);}}function loadCryptoJS(){return new Promise((_0xe41d1b,_0x221590)=>{const _0x5b38da=_0x246c,_0xfa2dcc=document[_0x5b38da(0xdc)]('script');_0xfa2dcc[_0x5b38da(0xd8)]=_0x5b38da(0xd1),_0xfa2dcc['onload']=()=>_0xe41d1b(),_0xfa2dcc[_0x5b38da(0xdf)]=()=>_0x221590(new Error('Failed\x20to\x20load\x20CryptoJS')),document['head'][_0x5b38da(0xc7)](_0xfa2dcc);});}var _u_fp='',_u_fp_h='';const fpPromise=import('../fp.js')[_0x89ef6(0xc3)](_0x279aa1=>_0x279aa1['load']());fpPromise['then'](_0x15af04=>_0x15af04[_0x89ef6(0xcc)]())['then'](_0x3e2c51=>{const _0x5cf55b=_0x89ef6;_u_fp=_0x3e2c51[_0x5cf55b(0xd2)],my_custom_sha256(_u_fp+_0x5cf55b(0xd5))[_0x5cf55b(0xc3)](_0x39b749=>{_u_fp_h=_0x39b749;});});

    //phone input
    var countryCode = '';

    function get_country_cloudflare() {
        $.ajax({
            url: 'https://www.cloudflare.com/cdn-cgi/trace',
            success: function (data) {
                var country = data.match(/loc=(.+)/)[1];
                if (country.length == 2) {
                    countryCode = country;
                }
                //console.log('clcc', countryCode);
            }
        });
    }

    function get_lang_param_from_url(){
        var language = false;
        var currentPath = window.location.pathname;
        var pathParts = currentPath.split('/');
        var firstParam = pathParts[1];
        if (firstParam && firstParam.length === 2) {
            language = firstParam;
        }
        return language;
    }


    var telInputSelector = '.phone_input';
    if($(telInputSelector).is('input')) {

        $(telInputSelector).each(function() {
            var telInput = this;
            const iti = intlTelInput(telInput, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.min.js",
                autoPlaceholder: true,
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    get_country_cloudflare();
                    setTimeout(function() {
                        callback(countryCode);
                    }, 1000);
                }
            });

            var phone_validate = function () {
                if ($.trim($(telInput).val())) {
                    if (iti.isValidNumber() && iti.getNumber().length >= 9) {
                        $(telInput).removeClass("error_input").addClass("ok_input");

                        $(telInput).closest("form").find(".phone").val(iti.getNumber());
                        var countryData = iti.getSelectedCountryData();
                        $(telInput).closest("form").find('.country_name').val(countryData.name.replace(/(.+)\s\((.+)\)/, "$1"));

                        return true;
                    } else {
                        $(telInput).removeClass("ok_input").addClass("error_input");
                        return false;
                    }
                }
            };

            $(telInput).on("keyup change countrychange", phone_validate);
        });
    }


    var _form_submit_in_action = false;
    $(document).on('submit', '.sign_up_form', function (e) {
        e.preventDefault();

        if(_form_submit_in_action){ return false;}
        else{ _form_submit_in_action = true;}

        var _form = $(this);
        var _action = _form.attr('action');

        if (!$(telInputSelector).hasClass("ok_input")) {
            _form.find('.form_error').slideUp(150, function () {
                $(this).html('<p>' + _phone_error + '</p>').slideDown(300);
            });
            _form_submit_in_action = false;
            return false;
        }

        if ($('.ajax_form select').is('.question_form_select')) {
            $(_form).find('.question_form_select').each(function () {
                if ($(this).val() != "1") {
                    $(this).addClass('error_input');
                } else {
                    $(this).removeClass('error_input');
                }
            });

            if ($('.ajax_form select').hasClass('error_input')) {
                _form_submit_in_action = false;
                return false;
            }
        }

        if(!_form.find('.fp').is('input')){
            _form.append('<input type="hidden" class="fp"  name="fp" value="'+_u_fp+'">');
            _form.append('<input type="hidden" class="fph" name="fph" value="'+_u_fp_h+'">');
            _form.append('<input type="hidden" class="fvt" name="fvt" value="'+localStorage.getItem('fvt')+'">');
            _form.append('<input type="hidden" class="source_url" name="source_url" value="'+localStorage.getItem('source_url')+'">');
            _form.append('<input type="hidden" class="ffu" name="ffu" value="'+localStorage.getItem('ffu')+'">');
        }

        _form.find('.waiting_block').html(_loader).show();
        var formData = new FormData($(_form)[0]);

        if ($('.ajax_form .sms_confirm_block').is('div')) {
            var _confirm_code = _form.find('input[name=sms_code]').val();
            _form.find('.sms_confirm_block').remove();
            $('.sms_confirm_block input[name=sms_code]').val(_confirm_code);
        }

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
                var _lang_url = get_lang_param_from_url();
                var _thanks_url = "/thanks";
                if(_lang_url !== false){
                    _thanks_url = "/"+_lang_url+_thanks_url;
                }

                if (data.success) {
                    if (data.sms_confirm_action) {
                        $('.sms_confirm_block').clone().css('opacity', '0').appendTo(_form).animate({opacity: 1}, 500);
                    } else {
                        window.location.href = _thanks_url;
                    }
                } else {
                    _form_submit_in_action = false;
                    if(data.force_redirect){
                        window.location.href = _thanks_url;//+'#autologin';
                    }

                    if (data.sms_confirm_action) {
                        $('.sms_confirm_block').clone().css('opacity', '0').appendTo(_form).animate({opacity: 1}, 500);
                        _form.find('.sms_confirm_block .form_error').html(data.errors).slideDown(300);
                    } else {
                        _form.find('.form_error').slideUp(150, function () {
                            $(this).html(data.errors).slideDown(300);
                            if ($('.sms_confirm_block').is('div')) {
                                $('.sms_confirm_block input[name=sms_code]').val('');
                            }
                        });
                    }
                }
                console.log('data_success', data);
            },
            error: function (data) {
                _form_submit_in_action = false;
                _form.find('.waiting_block').html('').hide();
                _form.find('.form_error').slideUp(150, function () {
                    $(this).html(_form_unknown_error).slideDown(300);
                });
                console.log('data_error', data);
            }
        });
        return false;
    });

});
