<?php
<<<<<<< HEAD


=======
/**
 * Файл функций темы Nadryvaks
 */

// Поддержка кастомного меню
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
register_nav_menus( array(
    'primary' => 'Главное меню',
) );

<<<<<<< HEAD
function nadryvaks_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );
    
    wp_enqueue_style( 'flag-icons', 'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/7.0.2/css/flag-icons.min.css', array(), '7.0.2' );
    
=======
// Подключение стилей и скриптов
function nadryvaks_scripts() {
    // Подключаем Bootstrap CSS
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );
    
    // Подключаем флаг-иконки
    wp_enqueue_style( 'flag-icons', 'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/7.0.2/css/flag-icons.min.css', array(), '7.0.2' );
    
    // ========== ПОДКЛЮЧАЕМ ВСЕ ТВОИ CSS ==========
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    wp_enqueue_style( 'nadryvaks-style-min', get_template_directory_uri() . '/templates/uni-tokv3/css/style.min_1.css', array(), '1.0' );
    wp_enqueue_style( 'nadryvaks-styles-1', get_template_directory_uri() . '/templates/uni-tokv3/css/styles_1.css', array(), '1.0' );
    wp_enqueue_style( 'nadryvaks-styles', get_template_directory_uri() . '/templates/uni-tokv3/css/styles.css', array(), '1.0' );
    wp_enqueue_style( 'nadryvaks-root', get_template_directory_uri() . '/templates/uni-tokv3/css/root.css', array(), '1.0' );
    wp_enqueue_style( 'nadryvaks-main', get_template_directory_uri() . '/templates/uni-tokv3/css/main.css', array(), '1.0' );
    wp_enqueue_style( 'nadryvaks-adaptive', get_template_directory_uri() . '/templates/uni-tokv3/css/adaptive.css', array(), '1.0' );
    wp_enqueue_style( 'wp-block-library-css', get_template_directory_uri() . '/templates/uni-tokv3/css/swipper.css', array(), '1.0' );
    
<<<<<<< HEAD
    wp_enqueue_script( 'jquery-custom', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true );
    
=======
    // Подключаем jQuery
    wp_enqueue_script( 'jquery-custom', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true );
    
    // Подключаем Swiper JS (если файл есть)
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    if ( file_exists( get_template_directory() . '/templates/uni-tokv3/js/swiper-bundle.min.js' ) ) {
        wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/templates/uni-tokv3/js/swiper-bundle.min.js', array(), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'nadryvaks_scripts', 999 );

<<<<<<< HEAD
add_theme_support( 'custom-logo' );

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

=======
// Поддержка логотипа
add_theme_support( 'custom-logo' );

// Поддержка тайтлов
add_theme_support( 'title-tag' );

// Поддержка миниатюр записей
add_theme_support( 'post-thumbnails' );

// Добавляем глобальные переменные и стили в head
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
function nadryvaks_custom_head() {
    ?>
    <style>
        :root {
            --second-color: #26b06b;
            --third-color: #459f74;
            --advantages-color: #0a7349;
        }
    </style>
    <script>
        var _loader = '<div class="wrapper"><div class="cssload-loader"></div></div>';
        var _language = 'it';
    </script>
    <?php
}
add_action( 'wp_head', 'nadryvaks_custom_head', 5 );

function nadryvaks_form_variables() {
    echo '<style>
        :root {
            --form-input-height: 50px;
            --form-border-radius: 8px;
            --form-background-color: rgb(255, 254, 254);
            --form-border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>';
}
add_action('wp_head', 'nadryvaks_form_variables', 1);

<<<<<<< HEAD
function nadryvaks_phone_scripts() {
    wp_enqueue_style( 'intl-tel-input-css', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css' );
    
    wp_enqueue_script( 'intl-tel-input-js', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js', array(), '17.0.8', true );
    
=======
// Подключение скриптов для поля телефона с флагом
function nadryvaks_phone_scripts() {
    // CSS для intl-tel-input
    wp_enqueue_style( 'intl-tel-input-css', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css' );
    
    // JS для intl-tel-input
    wp_enqueue_script( 'intl-tel-input-js', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js', array(), '17.0.8', true );
    
    // Утилиты для intl-tel-input
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
    wp_enqueue_script( 'intl-tel-input-utils', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js', array(), '17.0.8', true );
}
add_action( 'wp_enqueue_scripts', 'nadryvaks_phone_scripts', 20 );

<<<<<<< HEAD
function nadryvaks_fix_image_paths($content) {
    $template_uri = get_template_directory_uri();
    $content = str_replace('src="templates/', 'src="' . $template_uri . '/templates/', $content);
    $content = str_replace('href="templates/', 'href="' . $template_uri . '/templates/', $content);
    $content = str_replace('url(templates/', 'url(' . $template_uri . '/templates/', $content);
    $content = str_replace('srcset="templates/', 'srcset="' . $template_uri . '/templates/', $content);
    return $content;
}
ob_start('nadryvaks_fix_image_paths');

=======
>>>>>>> 2ea2974d6f57530e4a6f0bf8fe4c602e5ae1b3f3
?>