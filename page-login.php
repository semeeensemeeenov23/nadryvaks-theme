<?php
/**
 * Template Name: Login Page
 */

get_header();
?>

<section class="my-md-4 my-5 content-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-7 col-xl-7 mx-auto my-4 text-center">
                <h1 class="text-font-bold text-size-25 mt-4 mb-2">Accedi a Nadryvaks</h1>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-3 mb-md-5">
        <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
            <div class="col-0 col-xl-2"></div>
            <div class="col-md-5 col-xl-4 pt-4 pt-md-0">
                <h2 class="mt-4 text-size-25 text-font-bold">Accedere al cruscotto di trading</h2>
                <p class="text-size-11 mt-4">Accedete al vostro conto per seguire i mercati in tempo reale, gestire i vostri investimenti e utilizzare potenti strumenti basati sull'intelligenza artificiale con analisi chiare. Sicuro, veloce e sempre disponibile.</p>
                <h2 class="mt-4 text-size-25 text-font-bold">Prima volta qui?</h2>
                <p class="text-size-12 mt-4">Crea il tuo conto oggi stesso e diventa parte di una comunità in crescita di oltre 100.000 trader di criptovalute in tutto il mondo. Registrazione rapida, broker affidabili e transazioni sicure incluse.</p>
                <div class="d-inline-flex my-4 text-center">
                    <a href="<?php echo home_url('/sign-up/'); ?>" class="btn_main text-font-regular text-size-12 px-5 mx-auto">&larr; Creare un account</a>
                </div>
                <p class="text-size-11 mt-3">Effettuando il login si accettano le nostre Condizioni d'uso, la Politica sulla privacy e la Dichiarazione di non responsabilità. Il trading è rischioso: investite sempre in modo responsabile e solo con fondi che potete permettervi di perdere.</p>
            </div>
            <div class="col-md-5 col-xl-4 pt-4 pt-md-0">
                <div class="form-container">
                    <form action="/api/v1/login" class="form login_form" method="post">
                        <div class="form_header"><h3 class="form-title">Accedi</h3></div>
                        <div class="waiting_block"></div>
                        <div class="form_error"></div>
                        <div class="clear_both"></div>
                        <div class="input_group">
                            <input type="email" placeholder="Почта" autocomplete="off" name="email" required="" style="width: 100%; padding: 12px 15px; border: 1px solid #ced4da; border-radius: 4px; background: #fff; color: #495057; font-size: 16px; box-sizing: border-box;">
                        </div>
                        <div class="input_group input_submit">
                            <input type="hidden" name="camp" value="U174Nadryvaks_it">
                            <input type="hidden" name="campfb" value="Nadryvaks_it">
                            <input type="hidden" name="language" value="it">
                            <button type="submit" class="btn-submit" style="background-color: #28a745; color: #fff; border: none; padding: 12px 24px; border-radius: 4px; cursor: pointer; font-weight: 600; width: 100%; transition: all 0.3s ease;">Accesso</button>
                        </div>
                    </form>
                    <div class="clear_both"></div>
                    <script>
                        var _form_login_error = "Credenziali di accesso errate. Il suo account potrebbe non essere ancora stato attivato. Attenda la chiamata del manager.";
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Оригинальный градиент как в лендинге */
   
    
    /* Стили для формы */
    .form-container {
        background: rgb(255, 240, 240);
        border-radius: 12px;
        padding: 30px;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .form-title {
        color: #030303;
        text-align: center;
        margin-bottom: 25px;
        font-size: 24px;
    }
    
    .input_group {
        margin-bottom: 15px;
    }
    
    .btn_main {
        display: inline-block;
        padding: 10px 24px;
        background-color: #26b06b;
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        transition: all 0.3s ease;
    }
    
    .btn_main:hover {
        background-color: #1e8a54;
        color: #fff;
    }
    
    /* Текстовые стили */
    .text-size-11 { font-size: 14px; }
    .text-size-12 { font-size: 15px; }
    .text-size-25 { font-size: 28px; }
    .text-font-bold { font-weight: 700; }
    .text-font-regular { font-weight: 400; }
    
    /* Адаптивность */
    @media (max-width: 768px) {
        .form-container {
            margin-top: 30px;
        }
        .text-size-25 {
            font-size: 22px;
        }
    }
</style>

<?php get_footer(); ?>