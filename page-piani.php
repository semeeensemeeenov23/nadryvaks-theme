<?php get_header(); ?>

<div id="content" class="page_content_wrapper" role="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="wp-block-heading has-text-align-center has-x-large-font-size">Nadryvaks Prezzi</h1>
                
                <style>
                    .pricing-block { padding: 30px 0; }
                    .pricing-block__row { display: flex; justify-content: center; flex-wrap: wrap; gap: 10px; }
                    .pricing__item { display: flex; flex-direction: column; padding: 32px; border-radius: 24px; border: 2px solid #dedede; width: 294px; }
                    .pricing__item--plan { color: #D7D7D7; font-weight: 600; font-size: 18px; line-height: 24px; margin-bottom: 12px; }
                    .pricing__item--price { position: relative; display: flex; gap: 8px; margin-bottom: 12px; }
                    .pricing__item--discount { background: goldenrod; padding: 5px 10px; font-weight: 400; border-radius: 6px; display: flex; align-items: center; margin-left: 8px; font-size: 14px; height: max-content; }
                    .pricing__item--price h3 { font-weight: 700; font-size: 28px; line-height: 36px; letter-spacing: 0.2px; }
                    .pricing__item--text { color: #D7D7D7; }
                    .pricing__item a.btn { max-width: 160px; padding-left: 0; padding-right: 0; font-weight: 600; }
                    .pricing__item--wrapper { margin-bottom: 24px; min-height: 70px; }
                    .pricing__item--content { margin-top: 30px; display: flex; flex-direction: column; gap: 8px; }
                    .pricing__item--content ul > li { padding: 11px 0; font-size: 18px; line-height: 24px; }
                    .pricing__item--content p { font-size: 18px; line-height: 24px; }
                    .pricing-block__row .pricing__item:nth-of-type(2) { border-color: #14c9c1; border-width: 3px; box-shadow: 0 15px 40px 0 #559d9d33, 0 2px 8px 0 #2031310d; }
                </style>
                
                <section class="pricing-block">
                    <div class="container">
                        <div class="pricing-block__row">
                            <div class="pricing__item">
                                <h2 class="pricing__item--plan text-start">Base</h2>
                                <div class="pricing__item--wrapper">
                                    <div class="pricing__item--price">
                                        <h3>Gratuito</h3>
                                    </div>
                                    <div class="pricing__item--text">Iniziate oggi stesso senza bisogno di carta di credito</div>
                                </div>
                                <a href="<?php echo home_url('/sign-up/'); ?>" class="btn btn-primary">Iniziare gratis</a>
                                <div class="pricing__item--content">
                                    <p><span style="font-weight: 400;">Accesso <strong>illimitato</strong> al terminale</span></p>
                                    <ul>
                                        <li><strong>3</strong> SmartTrades attivi</li>
                                        <li><strong>1</strong> Segnale attivo Bot</li>
                                        <li><strong>1</strong> Bot a griglia attivo</li>
                                        <li><strong>1</strong> Bot DCA attivo</li>
                                        <li><strong>10</strong> <span style="font-weight: 400;">Offerte DCA in corso</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing__item">
                                <h2 class="pricing__item--plan text-start">Avanzato</h2>
                                <div class="pricing__item--wrapper">
                                    <div class="pricing__item--price">
                                        <h3>$250</h3>
                                        <span class="pricing__item--discount">-25%</span>
                                    </div>
                                    <div class="pricing__item--text">Pagamento unico e sicuro</div>
                                </div>
                                <a href="<?php echo home_url('/sign-up/'); ?>" class="btn btn-primary">Sblocco avanzato</a>
                                <div class="pricing__item--content">
                                    <ul>
                                        <li><strong>50</strong> SmartTrades attivi</li>
                                        <li><strong>50</strong> Segnale attivo Bot</li>
                                        <li><strong>10</strong> Bot a griglia attivo</li>
                                        <li><strong>50</strong> Bot DCA attivo</li>
                                        <li><strong>50</strong> <span style="font-weight: 400;">Offerte DCA in corso</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing__item">
                                <h2 class="pricing__item--plan text-start">Premio</h2>
                                <div class="pricing__item--wrapper">
                                    <div class="pricing__item--price">
                                        <h3>Contatto vendite</h3>
                                    </div>
                                </div>
                                <a href="<?php echo home_url('/sign-up/'); ?>" class="btn btn-primary">Parla con noi</a>
                                <div class="pricing__item--content">
                                    <p>SmartTrades <strong>illimitati</strong> e funzioni Pro</p>
                                    <ul>
                                        <li><strong>250</strong> SmartTrades attivi</li>
                                        <li><strong>50</strong> Segnale attivo Bot</li>
                                        <li><strong>250</strong> Bot a griglia attivo</li>
                                        <li><strong>2500</strong> Bot DCA attivo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-1 wp-block-columns-is-layout-flex">
                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                        <p class="has-text-align-center has-link-color has-medium-font-size">Scegliete il piano più adatto a voi e iniziate a fare trading in tutta tranquillità.</p>
                    </div>
                </div>
                
                <div class="pb-4">
                    <p>Iniziare non potrebbe essere più facile. Con il piano Basic, potete esplorare tutte le funzioni principali <strong>senza alcun costo e senza bisogno di una carta</strong>. Testate le operazioni automatiche, i bot di segnale e gli SmartTrades in condizioni di mercato reali senza rischi. Quando sarete pronti a crescere, il piano Advanced, sbloccato con un pagamento una tantum, vi darà più bot, più flessibilità e la possibilità di scalare il vostro portafoglio.</p>
                    <p>Per i trader seri e i team di professionisti, il livello Premium offre automazione illimitata e massimo controllo. Godete di un'assistenza prioritaria, dell'accesso anticipato alle nuove funzionalità e della connessione diretta a una fiorente comunità di trader esperti che si scambiano strategie e approfondimenti. Qualunque sia il piano scelto, è possibile effettuare upgrade, downgrade o cancellazioni in qualsiasi momento, pagando solo ciò di cui si ha veramente bisogno.</p>
                </div>
                
                <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background mt-4" style="background-color:#D7D7D733;color:#D7D7D733">
                
                <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-2 wp-block-columns-is-layout-flex pt-5 pb-4">
                    <div class="wp-block-column plans__include is-layout-flow wp-block-column-is-layout-flow">
                        <p class="has-large-font-size"><strong>Ogni piano a pagamento include</strong></p>
                        <ul class="wp-block-list price-features-list">
                            <li>Bot AI</li>
                            <li>Strategie pronte</li>
                            <li>Avvisi di mercato</li>
                            <li>Controllo del rischio</li>
                            <li>Storia del commercio</li>
                            <li>App mobile</li>
                            <li>Assistenza 24/7</li>
                        </ul>
                    </div>
                </div>
                
                <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background my-2" style="background-color:#D7D7D733;color:#D7D7D733">
                
                <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-3 wp-block-columns-is-layout-flex pt-4">
                    <div class="wp-block-column plans__payments is-layout-flow wp-block-column-is-layout-flow">
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/eb374c58-477f-41d0-9b23-0e219c2f8678_Visa_Inc._logo1.avif" alt="visa"></figure>
                        <figure class="wp-block-image size-full is-resized"><img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/203caee6-29fb-4565-aaa0-70621f61bfed_Icon.avif" alt="mastercard"></figure>
                        <figure class="wp-block-image size-full is-resized"><img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/177f9740-d913-4597-adc4-2dd0e557b066_PayPal.avif" alt="paypal"></figure>
                        <figure class="wp-block-image size-full is-resized"><img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/0f188c34-aa9f-4b69-bdb9-8383f3f907bc_GooglePay-2.avif" alt="google pay"></figure>
                        <figure class="wp-block-image size-full is-resized"><img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/95e11ef5-4c69-45d3-a3a7-cfd594d30d36_ApplePay-1.avif" alt="apple pay" style="filter:invert(1)"></figure>
                        <figure class="wp-block-image size-full is-resized"><img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/3fc2c971-defa-45d4-8dbd-0d4faedc82b7_Btc-2.avif" alt="bitcoin"></figure>
                        <figure class="wp-block-image size-full is-resized"><img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/973476e3-cd57-46a3-988c-97ff8cdb4765_Usdt-1.avif" alt="tether"></figure>
                        <figure class="wp-block-image size-full is-resized"><img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/templates/uni-tokv3/img/4ce547b6-e966-48d2-8ebd-8dff0f2dc87c_BUSD-1.avif" alt="binance"></figure>
                    </div>
                </div>
                
                <style>
                    .faq__wrapper { display: flex; gap: 108px; flex-direction: row; }
                    .faq__wrapper--title h2 { font-size: 62px; line-height: 56px; font-weight: 600; max-width: 450px; }
                    .accordion .faq__question { font-weight: 600; font-size: 20px; line-height: 24px; letter-spacing: 0.2px; padding: 24px 0; cursor: pointer; border-bottom: 1px solid #4b5168; display: flex; }
                    .accordion .faq__answer { max-height: 0; overflow: hidden; margin-top: 8px; color: #333; opacity: 0; }
                    .accordion.active .faq__answer { max-height: 500px; opacity: 1; color: #D7D7D7; line-height: 26px; }
                    .accordion .faq__arrow { margin-left: auto; }
                    .accordion .faq__arrow svg { color: #D7D7D7; }
                    .accordion.active .faq__arrow { transform: rotate(180deg); }
                    @media(max-width: 991px) { .faq__wrapper { flex-direction: column; gap: 24px; } .faq__wrapper--title h2 { font-size: 28px; line-height: 36px; } .accordion .faq__question { font-size: 18px; line-height: 24px; padding: 20px 0; } .faq__block { padding-bottom: 60px; } }
                </style>
                
                <section class="faq__block">
                    <div class="container">
                        <div class="faq__wrapper">
                            <div class="faq__wrapper--title">
                                <h2>FAQ</h2>
                            </div>
                            <div class="faq-wrapper__row">
                                <div class="accordion">
                                    <div class="faq__question">
                                        <span>Come faccio ad attivare il mio piano dopo l'acquisto?</span>
                                        <span class="faq__arrow">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79289 9.29289C6.18342 8.90237 6.81658 8.90237 7.20711 9.29289L12 14.0858L16.7929 9.29289C17.1834 8.90237 17.8166 8.90237 18.2071 9.29289C18.5976 9.68342 18.5976 10.3166 18.2071 10.7071L12.7071 16.2071C12.3166 16.5976 11.6834 16.5976 11.2929 16.2071L5.79289 10.7071C5.40237 10.3166 5.40237 9.68342 5.79289 9.29289Z" fill="currentColor"></path></svg>
                                        </span>
                                    </div>
                                    <div class="faq__answer">
                                        <p class="py-2"><span style="font-weight: 400;">Non appena il pagamento viene confermato, la serie completa di funzioni del vostro piano è disponibile nel cruscotto del vostro conto. È sufficiente effettuare l'accesso, collegare il proprio broker o exchange e seguire la lista di controllo rapida per avviare i bot, impostare le preferenze di rischio e iniziare a fare trading in pochi minuti. Riceverete anche un'e-mail di benvenuto con guide e video tutorial per aiutarvi a iniziare rapidamente.</span></p>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="faq__question">
                                        <span>È disponibile un'assistenza in caso di domande sul mio piano?</span>
                                        <span class="faq__arrow">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79289 9.29289C6.18342 8.90237 6.81658 8.90237 7.20711 9.29289L12 14.0858L16.7929 9.29289C17.1834 8.90237 17.8166 8.90237 18.2071 9.29289C18.5976 9.68342 18.5976 10.3166 18.2071 10.7071L12.7071 16.2071C12.3166 16.5976 11.6834 16.5976 11.2929 16.2071L5.79289 10.7071C5.40237 10.3166 5.40237 9.68342 5.79289 9.29289Z" fill="currentColor"></path></svg>
                                        </span>
                                    </div>
                                    <div class="faq__answer">
                                        <p class="py-2"><span style="font-weight: 400;">Sì. Il team di assistenza <strong>Nadryvaks</strong> è disponibile 24 ore su 24, 7 giorni su 7, tramite chat dal vivo, e-mail e help desk in-app. Che si tratti di fatturazione, configurazione o consigli sulle migliori pratiche, il nostro obiettivo è quello di rispondere entro un'ora lavorativa. Gli utenti del piano Premium possono usufruire di risposte prioritarie per un'assistenza ancora più rapida.</span></p>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="faq__question">
                                        <span>Come posso aggiornare o modificare le impostazioni dell'abbonamento?</span>
                                        <span class="faq__arrow">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79289 9.29289C6.18342 8.90237 6.81658 8.90237 7.20711 9.29289L12 14.0858L16.7929 9.29289C17.1834 8.90237 17.8166 8.90237 18.2071 9.29289C18.5976 9.68342 18.5976 10.3166 18.2071 10.7071L12.7071 16.2071C12.3166 16.5976 11.6834 16.5976 11.2929 16.2071L5.79289 10.7071C5.40237 10.3166 5.40237 9.68342 5.79289 9.29289Z" fill="currentColor"></path></svg>
                                        </span>
                                    </div>
                                    <div class="faq__answer">
                                        <p class="py-2"><span style="font-weight: 400;">Andate alla sezione "Fatturazione e piani" nella vostra dashboard per effettuare un upgrade o un downgrade, aggiornare i dettagli di pagamento, rivedere le fatture o annullare in qualsiasi momento. Le modifiche avranno effetto immediato e l'accesso alle funzioni a pagamento sarà sempre garantito fino alla fine del periodo di fatturazione in corso.</span></p>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="faq__question">
                                        <span>Posso passare a un altro piano quando ne ho bisogno?</span>
                                        <span class="faq__arrow">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79289 9.29289C6.18342 8.90237 6.81658 8.90237 7.20711 9.29289L12 14.0858L16.7929 9.29289C17.1834 8.90237 17.8166 8.90237 18.2071 9.29289C18.5976 9.68342 18.5976 10.3166 18.2071 10.7071L12.7071 16.2071C12.3166 16.5976 11.6834 16.5976 11.2929 16.2071L5.79289 10.7071C5.40237 10.3166 5.40237 9.68342 5.79289 9.29289Z" fill="currentColor"></path></svg>
                                        </span>
                                    </div>
                                    <div class="faq__answer">
                                        <p class="py-2"><span style="font-weight: 400;">Naturalmente. Potete cambiare piano ogni volta che i vostri obiettivi di trading cambiano. Gli aggiornamenti vengono addebitati al momento del pagamento, mentre i declassamenti vengono applicati a partire dal ciclo di fatturazione successivo, in modo da non perdere mai l'accesso al tempo per il quale si è già pagato.</span></p>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="faq__question">
                                        <span>Fornite rimborsi se il piano non è adatto a me?</span>
                                        <span class="faq__arrow">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79289 9.29289C6.18342 8.90237 6.81658 8.90237 7.20711 9.29289L12 14.0858L16.7929 9.29289C17.1834 8.90237 17.8166 8.90237 18.2071 9.29289C18.5976 9.68342 18.5976 10.3166 18.2071 10.7071L12.7071 16.2071C12.3166 16.5976 11.6834 16.5976 11.2929 16.2071L5.79289 10.7071C5.40237 10.3166 5.40237 9.68342 5.79289 9.29289Z" fill="currentColor"></path></svg>
                                        </span>
                                    </div>
                                    <div class="faq__answer">
                                        <p class="py-2"><span style="font-weight: 400;">Sì, offriamo una garanzia di rimborso di 14 giorni su tutti i piani a pagamento. Se decidete che la <strong>Nadryvaks</strong> non è la piattaforma giusta, basta richiedere un rimborso dal dashboard entro due settimane e noi lo elaboreremo, senza fare domande. Il piano Basic è sempre gratuito, quindi potete provare le funzioni principali senza rischi in qualsiasi momento.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const answers = document.querySelectorAll(".accordion");
                        if (answers.length) {
                            answers.forEach((accordion) => {
                                accordion.addEventListener("click", () => {
                                    accordion.classList.toggle("active");
                                });
                            });
                        }
                    });
                </script>
                
                <style>
                    .plans__include ul { display: flex; flex-wrap: wrap; justify-content: space-between; padding: 20px 0; }
                    .plans__include ul > li { position: relative; padding-left: 28px; }
                    .plans__include ul > li::before { content: "✔"; position: absolute; left: 0; top: 0; padding: 5px; border-radius: 50%; width: 14px; height: 14px; background-color: #eaf5ed; display: flex; align-items: center; color: #02867d; }
                    .plans__payments { display: flex; align-items: center; justify-content: center; gap: 48px; row-gap: 0; flex-wrap: wrap; padding: 40px 0; }
                    .plans__payments img { max-height: 33px; max-width: 52px; object-fit: contain; }
                    .plans__payments p { display: block; max-width: 70%; margin: 0 auto; margin-top: 20px; }
                    .pricing-block__row .pricing__item:nth-of-type(2) { border-color: var(--second-color); box-shadow: 0 15px 40px 0 var(--second-color)33, 0 2px 8px 0 var(--second-color)33; }
                    section { margin: 20px auto; }
                    ol, ul { list-style: none; }
                    .pricing__item { width: 100%; max-width: 362px; }
                    .plans__include ul > li::before { color: var(--second-color); background-color: var(--second-color)40; box-sizing: content-box; }
                </style>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>