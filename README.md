# 💰 Nadryvaks - Piattaforma di trading AI

![WordPress](https://img.shields.io/badge/WordPress-6.0-blue)
![PHP](https://img.shields.io/badge/PHP-8.0-purple)
![CSS3](https://img.shields.io/badge/CSS3-1572B6)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple)
![GitHub Actions](https://img.shields.io/badge/GitHub_Actions-自动部署-brightgreen)


## 🚀 Демо

[Посмотреть демо](http://wordpress/) *(локальный сервер)*

## 📱 Функционал

- ✅ Главная страница с Hero-секцией (фон, заголовок, CTA-кнопка)
- ✅ Блок "Come Nadryvaks vi aiuta ad avere successo nel trading" (4 преимущества)
- ✅ Блок с отзывами пользователей (5 отзывов + видео)
- ✅ Блок с характеристиками платформы (6 карточек)
- ✅ Блок FAQ (8 вопросов с раскрывающимися ответами)
- ✅ Слайдер с логотипами партнёров
- ✅ Страница "Chi siamo" (о компании, миссия, ценности)
- ✅ Страница "Piani" (тарифы: Base, Avanzato, Premio)
- ✅ Страница "Contattateci" (форма обратной связи)
- ✅ Страница "Accesso" (форма входа)
- ✅ Страница "Iscriviti" (форма регистрации)
- ✅ Страница "Offerta speciale" (VIP-предложение)
- ✅ Страница "Informativa sulla privacy" (политика конфиденциальности)
- ✅ Страница "Termini e condizioni" (условия использования)
- ✅ Бургер-меню для мобильных устройств
- ✅ Адаптивный дизайн (мобильные, планшеты, десктоп)
- ✅ Форма с телефоном (intl-tel-input) и флагом страны
- ✅ Автоматическое обновление года в футере

## 🛠 Технологии

- **WordPress 6.0** - CMS
- **PHP 8.0** - бэкенд
- **CSS3** + **Bootstrap 5.3** - стилизация
- **JavaScript (ES6)** - интерактивность
- **jQuery 3.7.1** - DOM-манипуляции
- **Swiper.js** - слайдеры
- **intl-tel-input** - поле телефона с флагом
- **GitHub Actions** - автоматический деплой

## 📁 Архитектура темы
nadryvaks-theme/
├── header.php # Шапка сайта (меню, бургер)
├── footer.php # Подвал (меню, копирайт)
├── index.php # Главная страница (лендинг)
├── page.php # Шаблон для обычных страниц
├── page-about.php # Chi siamo
├── page-piani.php # Piani
├── page-contatti.php # Contattateci
├── page-login.php # Accesso
├── page-signup.php # Iscriviti
├── page-privacy-policy.php # Informativa sulla privacy
├── page-terms.php # Termini e condizioni
├── page-special-offer.php # Offerta speciale
├── functions.php # Подключение стилей/скриптов
├── style.css # Обязательный файл темы
├── templates/ # CSS, JS, изображения
└── uploads/ # Логотипы, иконки


## 📦 Установка и запуск

```bash
# Клонировать репозиторий
git clone https://github.com/semeeensemeeenov23/nadryvaks-theme.git

# Перейти в папку темы
cd nadryvaks-theme

# Скопировать в WordPress
# C:\OSPanel\domains\wordpress\wp-content\themes\nadryvaks-theme

# Импортировать экспорт через All-in-One WP Migration
# 1. Установить плагин All-in-One WP Migration
# 2. Import → загрузить .wpress файл
