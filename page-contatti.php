<?php
/**
 * Template Name: Contatti Page
 */

get_header();
?>

<div id="content" class="page_content_wrapper" role="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wp-block-columns contact-wrapper" style="display: flex; gap: 40px; flex-wrap: wrap;">
                    <div class="wp-block-column" style="flex: 1;">
                        <h1 class="has-x-large-font-size">Contatto Nadryvaks</h1>
                        <p style="color:#f5f5f5">Il nostro team di assistenza è a disposizione per fornire un aiuto rapido, amichevole e affidabile ogni volta che ne avete bisogno. Che siate alle prime armi con il trading automatico o che stiate già gestendo un portafoglio professionale, siamo pronti a guidarvi, a spiegarvi le funzioni e a risolvere qualsiasi problema, giorno e notte.</p>
                        <p style="color:#f5f5f5">Compilate il modulo di contatto e comunicateci le vostre esigenze. Un membro reale del nostro servizio di assistenza esaminerà il vostro messaggio e vi risponderà, di solito entro un'ora. Siamo lieti di assistervi e di aiutarvi a sfruttare al meglio la vostra esperienza di trading.</p>
                    </div>
                    <div style="flex: 1;">
                        <h2 style="color:#FFF;font-size:22px" class="pb-2">Inviaci un messaggio</h2>
                        
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
                            var _success_contact_form = 'Il vostro messaggio è stato inviato con successo. Grazie per aver prestato attenzione al nostro sito.';
                            var _error_contact_form = 'Qualcosa è andato storto. Non è stato possibile inviare il modulo.';
                        </script>
                    </div>
                </div>
                
                <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
                
                <div class="wp-block-columns" style="display: flex; gap: 40px; flex-wrap: wrap; padding: 48px 0;">
                    <div class="wp-block-column still-have-q" style="flex: 0.6;">
                        <h2 style="color:#f5f5f5">Assistenza rapida quando ne avete bisogno</h2>
                        <p>Avete domande o bisogno di assistenza? Inviateci un'e-mail e uno dei nostri specialisti del supporto vi risponderà al più presto.</p>
                        <div class="lp_button_wrapper" style="margin: 40px 0;">
                            <a id="button-block_18acd51fd044545018302dab8ecf2c41" class="target_lp_button button_rounded" href="mailto:support@nadryvaks.it" style="position: relative; display: inline-block; padding: 10px 24px; border: 1px solid var(--second-color, #26b06b); color: var(--second-color, #26b06b); text-align: center; font-weight: 500; text-decoration: none; transition: all .25s linear; border-radius: 20px;">support@nadryvaks.it</a>
                        </div>
                        <p>Volete una risposta più rapida? Compilate il modulo di contatto con i vostri dati e vi chiameremo subito per rispondere a tutte le vostre domande.</p>
                    </div>
                    <div class="wp-block-column" style="flex: 0.4;">
                        <figure class="wp-block-image size-full">
                            <img src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/Rectangle-3.png" width="600" height="226" loading="lazy" alt="support" style="width: 100%; height: auto;">
                        </figure>
                    </div>
                </div>
                
                <div class="wp-block-columns">
                    <div class="wp-block-column is-vertically-aligned-center">
                        <div class="wp-block-cover" style="min-height:200px;">
                            <span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:var(--second-color, #26b06b); border-radius:20px; display: block; width: 100%; height: 100%;"></span>
                            <div class="wp-block-cover__inner-container" style="padding: 40px;">
                                <div class="wp-block-group">
                                    <div class="wp-block-group__inner-container">
                                        <h2 class="wp-block-heading has-text-align-center has-white-color" style="color:#fff; text-align:center;">Supporto per ogni operatore</h2>
                                        <p class="has-text-align-center has-white-color" style="color:#fff; text-align:center;">A <strong>Nadryvaks</strong> il vostro successo è la nostra massima priorità. Il nostro servizio di assistenza multilingue è disponibile 24 ore su 24, 7 giorni su 7, tramite chat dal vivo, e-mail e telefono, per rispondere alle domande, guidarvi attraverso le funzioni e risolvere i problemi tecnici in tempo reale.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<style>
    /* Исправление ширины для intl-tel-input */
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

<?php get_footer(); ?>