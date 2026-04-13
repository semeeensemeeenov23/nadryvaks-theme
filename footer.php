<footer class="main_footer">
    <style>
<<<<<<< HEAD
    /* Бургер-меню 2*/
=======
    /* Бургер-меню */
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    .burger-menu {
        display: none;
        cursor: pointer;
        width: 30px;
        height: 20px;
        position: relative;
        z-index: 1001;
        margin-left: auto;
    }
    .burger-menu span {
        display: block;
        position: absolute;
        height: 3px;
        width: 100%;
        background: white;
        border-radius: 3px;
        transition: .25s ease-in-out;
    }
    .burger-menu span:nth-child(1) { top: 0px; }
    .burger-menu span:nth-child(2) { top: 8px; }
    .burger-menu span:nth-child(3) { top: 16px; }
    .burger-menu.active span:nth-child(1) {
        top: 8px;
        transform: rotate(135deg);
    }
    .burger-menu.active span:nth-child(2) {
        opacity: 0;
        left: -60px;
    }
    .burger-menu.active span:nth-child(3) {
        top: 8px;
        transform: rotate(-135deg);
    }
    
<<<<<<< HEAD
    /* Мобильное меню 2*/
=======
    /* Мобильное меню */
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    .mobile-menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 80%;
        max-width: 320px;
        height: 100vh;
        background: #0d0e22;
        z-index: 1000;
        transition: right 0.3s ease;
        padding: 80px 30px 30px;
        box-shadow: -5px 0 20px rgba(0,0,0,0.3);
    }
    .mobile-menu.active {
        right: 0;
    }
    .mobile-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .mobile-menu ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        display: block;
        padding: 10px 0;
        border-bottom: 1px solid #4b5168;
    }
    .mobile-menu .mobile-sign-up {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #4b5168;
    }
    .mobile-menu .mobile-sign-up a {
        display: block;
        padding: 12px 20px;
        background: #26b06b;
        color: white;
        text-align: center;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        border-bottom: none;
    }
    
<<<<<<< HEAD
    /* Оверлей 2*/
=======
    /* Оверлей */
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    .menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.7);
        z-index: 999;
        display: none;
    }
    .menu-overlay.active {
        display: block;
    }
    
    body.menu-open {
        overflow: hidden;
    }
    
<<<<<<< HEAD
    /* Адаптивность 2*/
=======
    /* Адаптивность */
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    @media (max-width: 991px) {
        .primary_menu {
            display: none !important;
        }
        .burger-menu {
            display: block !important;
        }
    }
</style>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 pb-5 pb-md-0">
                        <a href="index.htm" class="footer-navbar-brand pb-4" title="Nadryvaks">
                            <img class="logo" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/uploads/sites/3048/shB5yQonQL5X7giEGAXvtdZdAxRipxgsJmvxE2fK.png" alt="Nadryvaks logo">
                            <span>Nadryvaks</span>
                        </a>
                        <nav class="footer_menu_2">
                            <ul>
                                <li><a href="<?php echo home_url('/iscriviti/'); ?>">Creare un account</a></li>
                                <li><a href="<?php echo home_url('/accesso/'); ?>">Accesso</a></li>
                                <li><a href="<?php echo home_url('/piani/'); ?>">Piani</a></li>
                                <li><a href="<?php echo home_url('/offerta-speciale/'); ?>">Offerta speciale</a></li>
                            </ul>
                            <ul>
                                <li><a href="<?php echo home_url('/chi-siamo/'); ?>">Chi siamo</a></li>
                                <li><a href="<?php echo home_url('/contattateci/'); ?>">Contattateci</a></li>
                                <li><a href="<?php echo home_url('/informativa-sulla-privacy/'); ?>">Informativa sulla privacy</a></li>
                                <li><a href="<?php echo home_url('/termini-e-condizioni/'); ?>">Condizioni di utilizzo</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <!-- wiget.all_footer -->
                        <p>
                            <strong>Nadryvaks</strong> è una piattaforma di trading online affidabile per gli utenti in
                            Italia, progettata per offrire un’esperienza sicura, fluida ed efficiente nella gestione
                            delle transazioni finanziarie. Che tu stia iniziando il tuo percorso nel trading o abbia già
                            esperienza sui mercati, la nostra piattaforma ti mette a disposizione gli strumenti giusti,
                            un supporto professionale e un’interfaccia intuitiva per aiutarti a prendere decisioni di
                            investimento consapevoli. Migliaia di utenti in tutta Italia si affidano a
                            <strong>Nadryvaks</strong> per la sua trasparenza, affidabilità e approccio orientato al
                            cliente. Questo è il sito ufficiale per gli utenti in Italia — inizia oggi stesso la tua
                            esperienza di trading con noi!
                        </p>
                        <p>
                            Disclaimer: La piattaforma di trading Nadryvaks non è affiliata, associata, autorizzata,
                            approvata né in alcun modo ufficialmente collegata a Sigfrido Ranucci, Andrea Orcel, Bruno
                            Vespa. Tutti i nomi menzionati vengono utilizzati esclusivamente a scopo informativo e
                            restano di proprietà dei rispettivi titolari.
                        </p>
                        <p>
                            Il trading offre il potenziale per ottenere rendimenti significativi, ma comporta anche il
                            rischio di perdere parte o addirittura tutto il capitale. Le statistiche mostrano che circa
                            il 70% dei trader subisce perdite, quindi è fondamentale comprendere appieno i rischi prima
                            di iniziare. Si prega di notare che <strong>Nadryvaks</strong> e tutti gli altri nomi di
                            marchi presenti su questo sito sono utilizzati esclusivamente per scopi di marketing e non
                            si riferiscono a società o fornitori di servizi reali. Il video visualizzato è
                            promozionale e le persone mostrate sono attori professionisti. Prima di investire, leggere
                            sempre i termini e le condizioni e la clausola di esclusione di responsabilità di qualsiasi
                            piattaforma di terzi e assicurarsi di aver compreso i propri obblighi in materia di imposte
                            sulle plusvalenze nella propria giurisdizione. Si noti che è illegale promuovere opzioni su
                            materie prime, compresi i contratti di previsione, ai residenti negli Stati Uniti, a meno
                            che non siano negoziati su una borsa registrata dalla CFTC o siano coperti da un'esenzione.
                            Nel Regno Unito, la Financial Conduct Authority (FCA) applica la politica PS20/10, che vieta
                            la vendita, la promozione o la distribuzione di contratti per differenza (CFD) ai
                            consumatori al dettaglio. Inviando i vostri dati personali, acconsentite alla loro
                            condivisione con fornitori di trading terzi in conformità alla nostra Politica sulla privacy
                            e ai nostri Termini e condizioni. La scelta di un software di trading automatico, di un
                            broker umano o di un trading autonomo è una decisione che spetta esclusivamente a voi.
                        </p>
                        <div class="copyright w-100 text-color-main text-end">&copy; Nadryvaks <span
                                class="year">2026</span></div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script type="text/javascript" src="templates/uni-tokv3/js/swiper-bundle.min.js?1749219871j"></script>
    
    <link rel="stylesheet" href="ajax/libs/flag-icon-css/7.0.2/css/flag-icons.min.css"
        integrity="sha512-bZBu2H0+FGFz/stDN/L0k8J0G8qVsAL0ht1qg5kTwtAheiXwiRKyCq1frwfbSFSJN3jooR5kauE0YjtPzhZtJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
<<<<<<< HEAD
// скрипт для бургера
jQuery(document).ready(function($) {
=======
// Простой и надёжный скрипт для бургера
jQuery(document).ready(function($) {
    // Проверяем, есть ли элементы
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    var $burger = $('.burger-menu');
    var $mobileMenu = $('.mobile-menu');
    var $overlay = $('.menu-overlay');
    var $body = $('body');
    
    if ($burger.length === 0) {
        console.log('Бургер не найден!');
        return;
    }
    
    console.log('Бургер найден, инициализируем');
    
<<<<<<< HEAD
=======
    // Открытие/закрытие по клику на бургер
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    $burger.on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        $mobileMenu.toggleClass('active');
        $overlay.toggleClass('active');
        $body.toggleClass('menu-open');
        $burger.toggleClass('active');
        
        console.log('Клик по бургеру, меню активно: ' + $mobileMenu.hasClass('active'));
    });
    
<<<<<<< HEAD
=======
    // Закрытие по клику на оверлей
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    $overlay.on('click', function() {
        $mobileMenu.removeClass('active');
        $overlay.removeClass('active');
        $body.removeClass('menu-open');
        $burger.removeClass('active');
    });
    
<<<<<<< HEAD
=======
    // Закрытие по клику на ссылку в меню
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    $('.mobile-menu a').on('click', function() {
        $mobileMenu.removeClass('active');
        $overlay.removeClass('active');
        $body.removeClass('menu-open');
        $burger.removeClass('active');
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>