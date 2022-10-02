<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/_global.css">
    <link rel="stylesheet" type="text/css" href="/css/auth.css">
    @if(Route::is('auth.login'))
    <title>Авторизация</title>
    @endif
    @if(Route::is('auth.reg'))
    <title>Регистрация</title>
    @endif
</head>

<body>
    <main>
        <form class="form">
            @if(Route::is('auth.login'))
            <h1>Авторизация</h1>
            @endif
            @if(Route::is('auth.reg'))
            <h1>Регистрация</h1>
            @endif

            @if(Route::is('auth.login'))
            <fieldset>
                <label>Логин*</label>
                <input />
            </fieldset>
            <fieldset>
                <label>Пароль*</label>
                <input />
            </fieldset>
            @endif
            @if(Route::is('auth.reg'))
            <fieldset>
                <label>ФИО*</label>
                <input />
            </fieldset>
            <fieldset>
                <label>Логин*</label>
                <input />

            </fieldset>
            <fieldset>
                <label>Email*</label>
                <input />

            </fieldset>
            <fieldset>

                <label>Пароль*</label>
                <input />
            </fieldset>
            <fieldset>

                <label>Повтор пароля*</label>
                <input />
            </fieldset>
            <fieldset class="acception">
                <label>Согласие на обработку персональных данных*</label>
                <input type="checkbox" />
            </fieldset>

            @endif


            <fieldset>
                @if(Route::is('auth.login'))
                <input type="submit" value="ВОЙТИ" />
                @endif
                @if(Route::is('auth.reg'))
                <input type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ" />
                @endif
            </fieldset>
        </form>
        <img src="https://celes.club/uploads/posts/2022-05/thumbs/1651982513_10-celes-club-p-izhevsk-tsentr-goroda-krasivo-foto-10.jpg" />
    </main>
</body>

</html>