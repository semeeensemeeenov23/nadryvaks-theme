<?php
/**
 * Template Name: Sign Up Page
 */

get_header();
?>

<div id="content" class="page_content_wrapper create-account" role="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-2" style="font-size:34px;">Iniziare con Nadryvaks in pochi minuti</h1>
                
                <div id="create-account-form" class="wp-block-group">
                    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                        <h2 class="wp-block-heading has-text-align-center has-medium-font-size"><strong>Iscrizioni rapide, risultati veloci: vedete i progressi in sole 24 ore!</strong></h2>
                        
                        <form action="/api.php" class="form contact_form" method="POST" style="position: relative; display: inline-block; width: 100%; box-sizing: border-box; padding: calc(var(--form-input-height, 50px) / 3); border-radius: var(--form-border-radius, 8px); color: #f9f9f9; text-align: center; background: var(--form-background-color, rgba(255,255,255,0.05)); border: var(--form-border, 1px solid rgba(255,255,255,0.1)); transition: all 0.3s ease 0s;">
                            <div class="waiting_block"></div>
                            <div class="form_error"></div>
                            <div class="form_success"></div>
                            <div class="clear_both"></div>
                            
                            <div class="input_group" style="position: relative; display: inline-block; width: 100%; box-sizing: border-box; padding: 0; margin-bottom: calc(var(--form-input-height, 50px) / 4);">
                                <input type="text" placeholder="Имя" autocomplete="off" name="name" required style="width: 100%; padding: 12px 15px; border: 1px solid #ced4da; border-radius: 4px; background: #fff; color: #495057; font-size: 16px; box-sizing: border-box;">
                            </div>
                            
                            <div class="input_group" style="position: relative; display: inline-block; width: 100%; box-sizing: border-box; padding: 0; margin-bottom: calc(var(--form-input-height, 50px) / 4);">
                                <input type="email" placeholder="Почта" autocomplete="off" name="email" required style="width: 100%; padding: 12px 15px; border: 1px solid #ced4da; border-radius: 4px; background: #fff; color: #495057; font-size: 16px; box-sizing: border-box;">
                            </div>
                            
                            <div class="input_group" style="position: relative; display: inline-block; width: 100%; box-sizing: border-box; padding: 0; margin-bottom: calc(var(--form-input-height, 50px) / 4);">
                                <input type="tel" placeholder="Телефон" autocomplete="off" class="phone_input" name="phonenum" required style="width: 100%; padding: 12px 15px; border: 1px solid #ced4da; border-radius: 4px; background: #fff; color: #495057; font-size: 16px; box-sizing: border-box;">
                                <input type="hidden" class="phone" name="phone" data-component="form-input" required="">
                                <input type="hidden" class="country_name" name="country" value="">
                            </div>
                            
                            <div class="input_group" style="position: relative; display: inline-block; width: 100%; box-sizing: border-box; padding: 0; margin-bottom: calc(var(--form-input-height, 50px) / 4);">
                                <textarea placeholder="Inserire il messaggio ..." autocomplete="off" name="message" rows="5" required style="width: 100%; padding: 12px 15px; border: 1px solid #ced4da; border-radius: 4px; background: #fff; color: #495057; font-size: 16px; resize: vertical; box-sizing: border-box;"></textarea>
                            </div>
                            
                            <div class="input_group input_submit" style="position: relative; display: inline-block; width: 100%; box-sizing: border-box; padding: 0; margin-bottom: 0;">
                                <button type="submit" class="btn-submit" style="background-color: #28a745; color: #fff; border: none; padding: 12px 24px; border-radius: 4px; cursor: pointer; font-weight: 600; width: 100%; transition: all 0.3s ease;">INVIA MESSAGGIO</button>
                            </div>
                        </form>
                        
                        <div class="clear_both"></div>
                        <script>
                            var _phone_error = "Inserire un numero di telefono valido.";
                            var _form_unknown_error = "Non è stato possibile inviare il modulo. Contattare l'amministratore del sito.";
                        </script>
                        <br>
                    </div>
                </div>
                
                <div id="create-account-always" class="wp-block-group">
                    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                        <h2 class="wp-block-heading has-text-align-center">Lista di controllo per la sicurezza</h2>
                        
                        <div class="wp-block-columns is-layout-flex">
                            <!-- Check 1 -->
                            <div class="wp-block-column is-layout-flow">
                                <div class="wp-block-image">
                                    <figure class="aligncenter size-full is-resized">
                                        <img decoding="async" width="72" height="72" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/icon-b1.png" alt="check-domain" style="width:36px">
                                    </figure>
                                </div>
                                <h3 class="has-text-align-center" style="font-size:18px;"><strong>Verificare il dominio: nadryvaks.it</strong></h3>
                                <p class="has-text-align-center" style="font-size:14px;">Before you enter your email, password, or payment details, always look carefully at the website address in your browser bar. Scammers often create fake sites that look almost identical to the real thing, hoping users won't notice small differences like an extra letter or unusual ending. By confirming you are on <strong>nadryvaks.it</strong>, you make sure your information goes only to the official platform and not to a phishing site designed to steal your login credentials.</p>
                            </div>
                            
                            <!-- Check 2 -->
                            <div class="wp-block-column is-layout-flow">
                                <div class="wp-block-image">
                                    <figure class="aligncenter size-full is-resized">
                                        <img decoding="async" width="72" height="72" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/icon-b2.png" alt="check-encryption" style="width:36px">
                                    </figure>
                                </div>
                                <h3 class="has-text-align-center" style="font-size:18px;"><strong>Cercate la crittografia HTTPS</strong></h3>
                                <p class="has-text-align-center" style="font-size:14px;">Quando aprite il sito, controllate l'icona del lucchetto vicino alla barra degli indirizzi e assicuratevi che l'URL inizi con "https://". Ciò significa che tutte le informazioni digitate, come le password o i numeri di carta, saranno inviate attraverso una connessione sicura e crittografata. Senza questa protezione, gli hacker potrebbero intercettare i vostri dati mentre viaggiano su Internet. Il protocollo HTTPS garantisce che nessuno possa leggere o modificare di nascosto le informazioni inviate al server.</p>
                            </div>
                            
                            <!-- Check 3 -->
                            <div class="wp-block-column is-layout-flow">
                                <div class="wp-block-image">
                                    <figure class="aligncenter size-full is-resized">
                                        <img decoding="async" width="72" height="72" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/icon-b3.png" alt="2fa" style="width:36px">
                                    </figure>
                                </div>
                                <h3 class="has-text-align-center" style="font-size:18px;"><strong>Attivare l'Autenticazione a due fattori (2FA)</strong></h3>
                                <p class="has-text-align-center" style="font-size:14px;">L'Autenticazione a due fattori aggiunge un'ulteriore fase di sicurezza al vostro account. Dopo aver inserito la password, è necessario un codice inviato al telefono o generato da un'app speciale. In questo modo, anche se qualcuno riesce a scoprire la vostra password, non può accedere senza avere accesso al vostro telefono. È uno dei modi più semplici ed efficaci per proteggere il vostro account dagli hacker e vi consigliamo di attivarlo subito dopo la registrazione.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
<<<<<<< HEAD
=======
    /* Исправление ширины для intl-tel-input */
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    .iti {
        display: block !important;
        width: 100% !important;
    }
    .iti__flag-container {
        height: 100% !important;
    }
    .iti__selected-flag {
        height: 100% !important;
        padding: 0 8px !important;
    }
    input[name="phonenum"], 
    input.phone_input,
    .iti input {
        width: 100% !important;
        padding-left: 48px !important;
        box-sizing: border-box !important;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var phoneInput = document.querySelector('input[name="phonenum"], input.phone_input');
    if (phoneInput && typeof intlTelInput !== 'undefined') {
        window.intlTelInput(phoneInput, {
            initialCountry: 'it',
            separateDialCode: false,
            utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js'
        });
    }
});
</script>

<?php get_footer(); ?>