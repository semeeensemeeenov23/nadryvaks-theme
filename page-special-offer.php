<?php
/**
 * Template Name: Special Offer Page
 */

get_header();
?>

<div id="content" class="page_content_wrapper special-offer" role="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wp-block-group alignfull hero-container">
                    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                        <div class="wp-block-cover alignfull is-light special-offer__hero" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:50px;aspect-ratio:unset;">
                            <span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-0 has-background-dim"></span>
                            <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
                                <div class="wp-block-columns hero-block is-layout-flex wp-container-core-columns-is-layout-1 wp-block-columns-is-layout-flex">
                                    <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow">
                                        <h1 class="wp-block-heading" style="font-size:52px">Richiedi subito il tuo Bonus VIP <strong>Nadryvaks</strong>!</h1>
                                        <p style="font-size:24px">Iscrivetevi ora e godete di 6 mesi di accesso VIP gratuito. In più, sblocca strumenti di trading avanzati e ricevi un bonus di benvenuto di 200 $ con il tuo primo deposito.</p>
                                    </div>
                                    <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:436px">
                                        <div id="special-offeer-form" class="wp-block-group has-white-background-color has-background">
                                            <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                                                <h2 class="wp-block-heading has-text-align-center has-text-color has-link-color wp-elements-3410a19072a0c21991f79e3785dcc2c5" style="color:#002b3a;font-size:24px">Iscriviti ora</h2>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-3 wp-block-columns-is-layout-flex">
                    <div class="wp-block-column wp-block-cover__inner-container is-layout-flow wp-block-column-is-layout-flow">
                        <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-2 wp-block-columns-is-layout-flex">
                            <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                <h2 class="wp-block-heading has-text-align-center has-text-color has-link-color wp-elements-53b9e29e3aaa832c6be2415a38d1c71b">Godetevi tutti i vantaggi dell'accesso VIP</h2>
                                <section class="bot_features_section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="features2_wrapper styleone" id="bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e">
                                                    <!-- Feature 1 -->
                                                    <div class="feature">
                                                        <div class="icon filled">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 6.22959C21.8257 6.22959 20.1323 6.41569 19.0483 6.58189C18.8476 6.61319 18.6354 6.74079 18.4911 7.00209C17.6653 8.49689 16.5489 10.7454 16.0816 12.6124C15.558 14.5548 13.1281 15.202 11.7077 13.7773C11.0727 13.1404 10.8099 12.2218 11.0118 11.3454C11.6536 8.77809 13.0565 6.02999 13.9168 4.47349C14.798 2.88039 16.3576 1.70859 18.2517 1.41689C20.1546 1.13369 22.0762 0.99529 24 1.00299C26.4701 1.00299 28.4322 1.21409 29.7472 1.41689C31.6424 1.70959 33.202 2.88039 34.0821 4.47349C34.9424 6.02999 36.3463 8.77809 36.9882 11.3454C37.4758 13.2972 35.6677 15.045 33.7336 14.4914C32.836 14.2345 32.1436 13.5182 31.9173 12.6124C31.45 10.7454 30.3347 8.49589 29.5088 7.00209C29.3635 6.74079 29.1524 6.61319 28.9506 6.58189C27.8687 6.41459 26.1753 6.22959 24 6.22959Z" fill="#1A65F4"></path>
                                                                <path d="M24.0001 10.4109C15.2172 10.4109 9.70842 10.9127 6.48562 11.3799C3.46782 11.8158 1.35832 14.219 1.05002 17.1491C0.772925 19.8053 0.480225 23.766 0.480225 28.7041C0.480225 33.6433 0.771925 37.603 1.05102 40.2591C1.35832 43.1892 3.46782 45.5924 6.48562 46.0293C9.70842 46.4945 15.2183 46.9973 24.0001 46.9973C32.7819 46.9973 38.2918 46.4956 41.5145 46.0283C44.5324 45.5924 46.6418 43.1892 46.9502 40.2591C47.2283 37.603 47.5199 33.6422 47.5199 28.7041C47.5199 23.765 47.2282 19.8053 46.9491 17.1491C46.6418 14.219 44.5324 11.8158 41.5145 11.3789C38.2918 10.9137 32.7818 10.4109 24.0001 10.4109Z" fill="#B6CEFB"></path>
                                                                <path d="M47.4823 25.6319L47.454 25.6361C47.2837 25.6612 47.0108 25.6988 46.6199 25.7469C45.838 25.8399 44.5878 25.9674 42.7595 26.096C39.1019 26.3532 33.1425 26.6135 24.0001 26.6135C14.8587 26.6135 8.89819 26.3532 5.24059 26.096C3.95119 26.0105 2.66409 25.8941 1.38029 25.7469C1.10199 25.714 0.824285 25.6771 0.547085 25.6361L0.517885 25.6319C0.482985 27.0372 0.472185 28.4431 0.485485 29.8487L0.883685 29.8979C1.74089 30.0003 3.06009 30.1341 4.94689 30.2669C8.72049 30.5334 14.7824 30.7948 24.0001 30.7948C33.2178 30.7948 39.2786 30.5334 43.0532 30.2669C44.4104 30.1764 45.7652 30.0534 47.1164 29.8979C47.2628 29.8811 47.3945 29.8644 47.5147 29.8487C47.5277 28.4431 47.5169 27.0372 47.4823 25.6319Z" fill="#1A65F4"></path>
                                                                <path d="M28.704 28.7041C28.704 30.2888 28.6445 31.4063 28.5723 32.1777C28.4228 33.7917 27.1266 34.9039 25.5931 34.9531C25.1771 34.9667 24.6544 34.9761 24.0001 34.9761C23.3458 34.9761 22.823 34.9667 22.407 34.9531C20.8735 34.9039 19.5773 33.7928 19.4278 32.1777C19.3557 31.4063 19.2961 30.2888 19.2961 28.7041C19.2961 27.1194 19.3557 26.0019 19.4278 25.2305C19.5773 23.6165 20.8735 22.5043 22.407 22.4552C22.823 22.4416 23.3457 22.4322 24.0001 22.4322C24.6545 22.4322 25.1771 22.4416 25.5931 22.4552C27.1266 22.5043 28.4228 23.6155 28.5723 25.2305C28.6445 26.0019 28.704 27.1194 28.704 28.7041Z" fill="#1A65F4"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="heading">Strumenti di gestione del rischio di livello professionale</div>
                                                        <div class="descr"><p>Rimanete protetti nei mercati volatili con protezioni avanzate. Utilizzate stop-loss intelligenti, ordini trailing e dimensionamento automatico delle posizioni per bloccare i profitti, minimizzare i rischi e operare in tutta tranquillità.</p></div>
                                                    </div>
                                                    <!-- Feature 2 -->
                                                    <div class="feature">
                                                        <div class="icon filled">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                                                                <path d="M21.6479 20.5339C16.6927 20.5339 13.5956 25.8982 16.0733 30.1895C17.2232 32.1813 19.3481 33.4082 21.6479 33.4081C26.6032 33.4079 29.7003 28.0435 27.2225 23.7522C26.0725 21.7607 23.9476 20.5339 21.6479 20.5339Z" fill="#1A65F4"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6302 6.46651C15.8012 6.71901 19.201 8.03811 22.5453 10.0613C23.6603 10.7356 23.6603 12.3531 22.5453 13.0273C19.8209 14.6762 17.0114 16.9193 14.3038 19.6268C11.8934 22.0392 9.85035 24.5299 8.26685 26.971C9.85035 29.4121 11.8924 31.9028 14.3038 34.3142C16.7153 36.7256 19.2069 38.7687 21.648 40.3512C24.0892 38.7687 26.5798 36.7266 28.9912 34.3142C31.6998 31.6067 33.9428 28.7982 35.5917 26.0738C36.2662 24.9598 37.8823 24.9598 38.5567 26.0738C40.5809 29.4181 41.899 32.8179 42.1516 35.9879C42.4091 39.2054 41.5633 42.2259 39.2331 44.5561C36.9029 46.8863 33.8824 47.732 30.6649 47.4756C27.7771 47.2448 24.7002 46.1307 21.648 44.4056C18.5949 46.1307 15.518 47.2448 12.6302 47.4756C9.41355 47.733 6.39315 46.8863 4.06295 44.5561C1.73265 42.2259 0.885952 39.2054 1.14345 35.9879C1.37415 33.1011 2.48735 30.0232 4.21345 26.971C2.48735 23.9179 1.37415 20.8409 1.14345 17.9532C0.885952 14.7366 1.73265 11.7162 4.06295 9.38591C6.39315 7.05571 9.41355 6.20901 12.6302 6.46651ZM6.36445 23.6089C7.91725 21.4282 9.76815 19.2614 11.8528 17.1758C13.9384 15.0912 16.1052 13.2403 18.2849 11.6874C16.1448 10.6595 14.1385 10.0633 12.3549 9.92171C9.94835 9.72961 7.99345 10.3564 6.51395 11.837C5.03345 13.3165 4.40655 15.2704 4.59865 17.6779C4.74025 19.4604 5.33645 21.4678 6.36445 23.6089ZM6.36445 30.3331C5.33645 32.4742 4.74025 34.4806 4.59865 36.2642C4.40655 38.6706 5.03345 40.6245 6.51395 42.1051C7.99345 43.5856 9.94735 44.2125 12.3549 44.0203C14.1375 43.8777 16.1449 43.2826 18.2849 42.2546C16.1052 40.7018 13.9374 38.8509 11.8528 36.7653C9.76815 34.6807 7.91725 32.5137 6.36445 30.3331ZM25.0102 42.2546C27.1512 43.2825 29.1576 43.8787 30.9412 44.0203C33.3477 44.2125 35.3016 43.5846 36.7821 42.1051C38.2626 40.6245 38.8895 38.6706 38.6974 36.2642C38.5548 34.4806 37.9596 32.4742 36.9316 30.3331C35.3788 32.5138 33.5279 34.6806 31.4423 36.7653C29.3577 38.8509 27.1909 40.7018 25.0102 42.2546Z" fill="#B6CEFB"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.2359 2.21312C38.2391 0.879021 36.7969 0.0417215 35.6399 0.705921C35.1004 1.01572 34.7683 1.59092 34.7698 2.21312V4.70372C29.9776 4.90472 26.1045 8.69372 26.1045 13.6017C26.1045 14.8396 26.1867 16.2865 26.2778 17.5105C26.4551 19.8823 28.2228 21.8709 30.6599 22.163C32.1831 22.3462 34.2092 22.5146 36.5028 22.5146C38.7964 22.5146 40.8216 22.3462 42.3457 22.163C44.7829 21.8709 46.5506 19.8823 46.7279 17.5105C46.819 16.2865 46.9012 14.8406 46.9012 13.6017C46.9012 8.69372 43.028 4.90482 38.2359 4.70372V2.21312Z" fill="#1A65F4"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M34.2746 13.1066C34.2778 11.7725 32.8356 10.9352 31.6786 11.5994C31.1391 11.9092 30.807 12.4844 30.8085 13.1066V14.0969C30.8053 15.431 32.2475 16.2683 33.4045 15.604C33.944 15.2942 34.2761 14.719 34.2746 14.0969V13.1066ZM42.1971 13.1066C42.2003 11.7725 40.7581 10.9352 39.6012 11.5994C39.0616 11.9092 38.7295 12.4844 38.731 13.1066V14.0969C38.7278 15.431 40.17 16.2683 41.327 15.604C41.8665 15.2942 42.1986 14.719 42.1971 14.0969V13.1066Z" fill="#B6CEFB"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="heading">Approfondimenti sul mercato dell'intelligenza artificiale istantanea</div>
                                                        <div class="descr"><p>Sfruttate le analisi in tempo reale alimentate dall'intelligenza artificiale di nuova generazione. Grafici approfonditi, avvisi di trading intelligenti e previsioni personalizzate per sapere esattamente quando entrare o uscire dal mercato in tutta sicurezza.</p></div>
                                                    </div>
                                                    <!-- Feature 3 -->
                                                    <div class="feature">
                                                        <div class="icon filled">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                                                                <path d="M1.364 28.26C1.41587 27.715 1.62772 27.1975 1.97291 26.7726C2.31809 26.3478 2.7812 26.0344 3.304 25.872C5.623 25.15 9.81 24 12.925 24C17.602 24 22.815 25.151 25.625 25.874C26.985 26.224 28.224 26.987 28.818 28.26C29.103 28.87 29.388 29.633 29.603 30.55C30.002 32.257 28.465 33.656 26.718 33.513L19.003 32.884C18.8075 32.8681 18.6108 32.8929 18.4254 32.9568C18.24 33.0207 18.0698 33.1223 17.9255 33.2553C17.7813 33.3882 17.6662 33.5496 17.5875 33.7292C17.5087 33.9089 17.468 34.1029 17.468 34.299C17.468 34.987 17.961 35.575 18.641 35.679C20.066 35.896 22.501 36.222 24.283 36.222C28.063 36.222 38.136 34.53 41.411 33.962C42.111 33.84 42.824 33.756 43.504 33.962C44.499 34.266 45.941 35.065 46.619 37.175C47.126 38.752 45.979 40.28 44.421 40.839C39.636 42.556 29.4 46 24.284 46C17.526 46 7.962 44.596 3.728 43.916C3.10238 43.8198 2.52673 43.5177 2.09219 43.0574C1.65766 42.5972 1.38909 42.0051 1.329 41.375C1.174 39.733 1 37.366 1 35C1 32.452 1.201 29.904 1.364 28.26Z" fill="#B6CEFB"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.075 2.669C28.93 1.919 30.07 1.5 31.412 1.5C33.886 1.5 35.467 2.937 36.352 4.516C37.207 6.04 37.5 7.806 37.5 9H34.5C34.5 8.194 34.283 6.96 33.736 5.984C33.22 5.064 32.506 4.5 31.412 4.5C30.716 4.5 30.302 4.706 30.052 4.925C29.789 5.155 29.606 5.491 29.533 5.893C29.365 6.819 29.807 7.463 30.17 7.611L29.039 10.389C26.943 9.537 26.251 7.181 26.582 5.357C26.758 4.384 27.233 3.407 28.075 2.669Z" fill="#B6CEFB"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M43.925 2.669C43.069 1.919 41.93 1.5 40.588 1.5C38.114 1.5 36.533 2.937 35.648 4.516C34.792 6.04 34.5 7.806 34.5 9H37.5C37.5 8.194 37.716 6.96 38.264 5.984C38.78 5.063 39.494 4.5 40.588 4.5C41.284 4.5 41.698 4.706 41.948 4.925C42.211 5.155 42.394 5.491 42.466 5.893C42.634 6.819 42.192 7.463 41.83 7.611L42.96 10.389C45.056 9.537 45.749 7.181 45.418 5.357C45.242 4.384 44.766 3.407 43.925 2.669Z" fill="#B6CEFB"></path>
                                                                <path d="M36 24.5C38.0044 24.5073 40.0085 24.4483 42.009 24.323C44.346 24.167 46.213 22.401 46.377 20.007C46.447 18.981 46.5 17.657 46.5 16C46.5 14.343 46.447 13.02 46.377 11.993C46.213 9.599 44.346 7.833 42.009 7.677C40.0085 7.55168 38.0044 7.49265 36 7.5C33.387 7.5 31.407 7.582 29.991 7.677C27.654 7.833 25.787 9.599 25.623 11.993C25.5365 13.3269 25.4955 14.6633 25.5 16C25.5 17.657 25.553 18.98 25.623 20.007C25.787 22.401 27.654 24.167 29.991 24.323C31.9915 24.4483 33.9956 24.5073 36 24.5Z" fill="#1A65F4"></path>
                                                                <path d="M37.5 24.49C36.5 24.5028 35.5 24.5028 34.5 24.49V12C34.5 11.6022 34.658 11.2206 34.9393 10.9393C35.2206 10.658 35.6022 10.5 36 10.5C36.3978 10.5 36.7794 10.658 37.0607 10.9393C37.342 11.2206 37.5 11.6022 37.5 12V24.49Z" fill="#B6CEFB"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="heading">Sportello di assistenza VIP dedicato</div>
                                                        <div class="descr"><p>Nessuna attesa, nessun ritardo: i membri VIP si connettono direttamente con un team di specialisti del trading. Godono di tempi di risposta prioritari e di una guida individuale per far funzionare le vostre strategie senza problemi 24 ore su 24.</p></div>
                                                    </div>
                                                    <!-- Feature 4 -->
                                                    <div class="feature">
                                                        <div class="icon filled">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                                                                <path d="M24 1.51563C17.5909 1.51562 13.0088 1.77005 10.0242 2.02536C6.72719 2.3074 4.23276 4.88407 3.99184 8.16053C3.75159 11.428 3.5 16.616 3.5 24.0156C3.5 31.4152 3.75158 36.6033 3.99183 39.8707C4.23274 43.1471 6.72718 45.7238 10.0242 46.0059C13.0088 46.2612 17.5908 46.5156 24 46.5156C30.4091 46.5156 34.9912 46.2612 37.9758 46.0059C41.2728 45.7238 43.7673 43.1472 44.0082 39.8707C44.2484 36.6033 44.5 31.4152 44.5 24.0156C44.5 16.616 44.2484 11.428 44.0082 8.16055C43.7673 4.88409 41.2728 2.30742 37.9758 2.02537C34.9912 1.77006 30.4092 1.51563 24 1.51563Z" fill="#B6CEFB"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 10C20.8954 10 20 10.8954 20 12C20 13.1046 20.8954 14 22 14H34C35.1046 14 36 13.1046 36 12C36 10.8954 35.1046 10 34 10H22ZM20 21C20 19.8954 20.8954 19 22 19H28C29.1046 19 30 19.8954 30 21C30 22.1046 29.1046 23 28 23H22C20.8954 23 20 22.1046 20 21Z" fill="#1A65F4"></path>
                                                                <path d="M14 1.75537V46.2757C12.4488 46.1944 11.1274 46.1002 10.0242 46.0058C6.72718 45.7238 4.23274 43.1471 3.99183 39.8706C3.75158 36.6032 3.5 31.4151 3.5 24.0156C3.5 16.616 3.75159 11.4279 3.99184 8.16048C4.23276 4.88402 6.72719 2.30735 10.0242 2.02531C11.1274 1.93094 12.4488 1.8367 14 1.75537Z" fill="#1A65F4"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="heading">Canali di segnale esclusivi e biblioteca di strategie</div>
                                                        <div class="descr"><p>Entrate in gruppi di trading privati dove gli esperti condividono segnali in tempo reale. Esplorate una libreria di strategie comprovate che potete copiare all'istante o adattare al vostro stile, sempre con il supporto di nuove informazioni di mercato.</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wp-block-columns so-h-work__inner-container is-layout-flex wp-container-core-columns-is-layout-5 wp-block-columns-is-layout-flex">
                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                        <h2 class="wp-block-heading has-text-align-center has-text-color has-link-color wp-elements-2d59a4ac6afccaf02f70431223d2e8e6">Come richiedere l'offerta VIP</h2>
                        <div class="wp-block-columns so-h-works is-layout-flex wp-container-core-columns-is-layout-4 wp-block-columns-is-layout-flex">
                            <div class="wp-block-column so-h-work-item is-layout-flow wp-block-column-is-layout-flow">
                                <h3 class="wp-block-heading has-text-align-center so-circle">1</h3>
                                <h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="font-size:18px">Registrazione rapida</h4>
                                <p class="has-text-align-center" style="color:#e1e1e1;font-size:16px">Compilate un breve modulo di iscrizione, fate clic su "Crea account" e accedete immediatamente al vostro dashboard, senza documenti o lunghi processi di approvazione.</p>
                            </div>
                            <div class="wp-block-column so-h-work-item is-layout-flow wp-block-column-is-layout-flow">
                                <h3 class="wp-block-heading has-text-align-center so-circle">2</h3>
                                <h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="font-size:18px">Attivare l'accesso VIP</h4>
                                <p class="has-text-align-center" style="color:#e1e1e1;font-size:16px">Uno dei nostri manager vi chiamerà per attivare le funzioni VIP, illustrarvi gli strumenti chiave e assicurarvi che siate pronti a fare trading con fiducia.</p>
                            </div>
                            <div class="wp-block-column so-h-work-item is-layout-flow wp-block-column-is-layout-flow">
                                <h3 class="wp-block-heading has-text-align-center so-circle">3</h3>
                                <h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="font-size:18px">Finanziare il proprio conto</h4>
                                <p class="has-text-align-center" style="color:#e1e1e1;font-size:16px">Effettuate un piccolo deposito iniziale per iniziare a fare trading dal vivo. Come regalo di benvenuto, 200 dollari saranno aggiunti al vostro saldo per aumentare il vostro capitale iniziale.</p>
                            </div>
                            <div class="wp-block-column so-h-work-item is-layout-flow wp-block-column-is-layout-flow">
                                <h3 class="wp-block-heading has-text-align-center so-circle">4</h3>
                                <h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="font-size:18px">Commercio più intelligente con l'intelligenza artificiale</h4>
                                <p class="has-text-align-center" style="color:#e1e1e1;font-size:16px">Sedetevi e lasciate che il nostro bot AI analizzi i mercati 24 ore su 24, 7 giorni su 7, piazzi automaticamente le operazioni e punti a far crescere il vostro portafoglio, il tutto senza alcuno sforzo manuale.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-9 wp-block-columns-is-layout-flex">
                    <div class="wp-block-column so-h-work__inner-container is-layout-flow wp-block-column-is-layout-flow">
                        <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-8 wp-block-columns-is-layout-flex">
                            <div class="wp-block-column limited__inner-container is-layout-flow wp-block-column-is-layout-flow">
                                <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-7 wp-block-columns-is-layout-flex">
                                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                        <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-6 wp-block-columns-is-layout-flex">
                                            <div class="wp-block-column limited-banner is-layout-flow wp-block-column-is-layout-flow">
                                                <h2 class="wp-block-heading has-text-align-center">Offerta VIP a tempo limitato!</h2>
                                                <p class="has-text-align-center">Iscrivetevi ora e assicuratevi 6 mesi di servizi VIP a <strong>costo zero, oltre a ricevere un bonus</strong> di benvenuto di 200 $ sul vostro primo deposito. Questa offerta non durerà a lungo!</p>
                                                <div class="wp-block-buttons is-content-justification-center is-layout-flex">
                                                    <div class="wp-block-button">
                                                        <a class="wp-block-button__link wp-element-button" href="#content">Ottenere l'accesso VIP</a>
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

                <style>
                    .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e {
                        position: relative;
                        display: flex;
                        flex-direction: row;
                        align-items: stretch;
                        justify-content: flex-start;
                        gap: 30px;
                        flex-wrap: wrap;
                        margin-top: 40px;
                    }
                    .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature {
                        position: relative;
                        display: block;
                        width: calc(50% - 15px);
                        border-radius: 10px;
                        background: #424560;
                        box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.1);
                        padding: 2.5em;
                    }
                    @media (max-width: 991px) {
                        .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature {
                            width: 100%;
                        }
                    }
                    .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature .icon {
                        position: relative;
                        display: block;
                        margin-bottom: 20px;
                        width: 88px;
                        height: 88px;
                    }
                    .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature .icon svg {
                        position: relative;
                        display: block;
                        width: 88px;
                        height: 88px;
                        aspect-ratio: 1/1;
                    }
                    .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature .heading {
                        color: #FFF;
                        font-size: 1.75em;
                        font-weight: 500;
                        text-align: left;
                        margin-bottom: 20px;
                    }
                    .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature .descr {
                        text-align: left;
                        color: #FFF;
                    }
                    .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature:hover {
                        background-color: var(--second-color, #26b06b);
                    }
                    .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature:hover .descr,
                    .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature:hover .heading {
                        color: #fff;
                    }
                    .so-circle {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        width: 50px;
                        height: 50px;
                        background-color: var(--second-color, #26b06b);
                        border-radius: 50%;
                        margin: 0 auto 20px;
                        color: #fff;
                        font-size: 24px;
                        font-weight: bold;
                    }
                    .so-h-work-item {
                        text-align: center;
                        padding: 20px;
                    }
                    .limited-banner {
                        background: linear-gradient(135deg, #1a65f4 0%, #0d3b8c 100%);
                        border-radius: 20px;
                        padding: 40px;
                        margin: 40px 0;
                        text-align: center;
                    }
                    .limited-banner h2,
                    .limited-banner p {
                        color: #fff;
                    }
                    .wp-block-button__link {
                        background-color: #fff;
                        color: #1a65f4 !important;
                        padding: 12px 30px;
                        border-radius: 30px;
                        text-decoration: none;
                        font-weight: bold;
                    }
                    .wp-block-button__link:hover {
                        background-color: #f0f0f0;
                    }
                    @media (max-width: 768px) {
                        .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature {
                            padding: 1.5em;
                        }
                        .features2_wrapper#bot_features_section-block_b806e2649b1c76ab5f34d3cb1858d03e .feature .icon svg {
                            width: 60px;
                            height: 60px;
                        }
                        .limited-banner {
                            padding: 20px;
                        }
                    }
                </style>
            </div>
        </div>
    </div>
</div>


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
    /* Убираем отступ сверху для страницы Special Offer */
    .page_content_wrapper.special-offer {
        padding-top: 0 !important;
        margin-top: 0 !important;
    }
    
    .page_content_wrapper.special-offer .hero-container {
        margin-top: 0 !important;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }
    
    /* Для мобильных устройств */
    @media (max-width: 768px) {
        .page_content_wrapper.special-offer {
            padding-top: 0 !important;
        }
        .page_content_wrapper.special-offer .hero-container {
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            padding-bottom: 50px;
        }
    }
</style>

<?php get_footer(); ?>