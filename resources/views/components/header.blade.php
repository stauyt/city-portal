<header class="header">
    <img class="header__img" src="/icons/logo.svg" />

    @if(Route::is('home') )
    <nav class="menu">
        <a href="/home" class="menu__item">Главная</a>
        <a href="/auth/login" class="menu__item">Авторизация</a>
        <a href="/auth/reg" class="menu__item">Регистрация</a>
    </nav>
    @endif

    @if(Route::is('profile.*') or Route::is('profile') )
    <nav class="menu">
        <a href="/profile/order" class="menu__item">Создать заявку</a>
        <a href="/home" class="menu__item">Выйти</a>
    </nav>
    @endif
</header>