<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/_global.css">
    <link rel="stylesheet" type="text/css" href="/css/auth.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    @if(Route::is('auth.login'))
    <title>Авторизация</title>
    @endif
    @if(Route::is('auth.reg'))
    <title>Регистрация</title>
    @endif

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('submit', 'form', function(e) {
                const data = {
                    name: e.target[1].value,
                    login: e.target[3].value,
                    email: e.target[5].value,
                    password: e.target[7].value,
                    password_repeat: e.target[9].value,
                    checkbox: e.target[11].value,
                }
                if (data.checkbox !== 'on') {
                    $('.error').html('Подтвердите согласие на обработку персональных данных!')
                    return false;
                }
                if (!data.name) {
                    $('.error').html('Укажите имя!')
                    return false;
                }
                if (!data.login) {
                    $('.error').html('Укажите логин!')
                    return false;
                }
                if (!data.email) {
                    $('.error').html('Укажите email!')
                    return false;
                }
                if (!data.password) {
                    $('.error').html('Укажите пароль!')
                    return false;
                }
                if (data.password_repeat !== data.password) {
                    $('.error').html('Пароли не совпадают!')
                    return false;
                }

                $.post('/user', data)
                    .fail(function() {
                        $('.error').html('Логин уже используется!')
                    })
                return false;
            })
            return false;
        })
    </script>
</head>

<body>
    <main>

        @if(Route::is('auth.login'))
        <form class="form" method="get">
            @endif
            @if(Route::is('auth.reg'))
            <form class="form" method="post">
                @endif

                @if(Route::is('auth.login'))
                <h1>Авторизация</h1>
                @endif
                @if(Route::is('auth.reg'))
                <h1>Регистрация</h1>
                @endif

                @if(Route::is('auth.login'))
                <fieldset>
                    <label for="login">Логин*</label>
                    <input name="login" id="login__input" />
                </fieldset>
                <fieldset>
                    <label for="password">Пароль*</label>
                    <input name="password" id="password__input" />
                </fieldset>
                @endif
                @if(Route::is('auth.reg'))
                <fieldset>
                    <label for="name">ФИО*</label>
                    <input name="name" id="name__input" />
                </fieldset>
                <fieldset>
                    <label for="login">Логин*</label>
                    <input name="login" id="login__input" />
                </fieldset>
                <fieldset>
                    <label for="email">Email*</label>
                    <input name="email" id="email__input" />
                </fieldset>
                <fieldset>
                    <label for="password">Пароль*</label>
                    <input name="password" id="password__input" />
                </fieldset>
                <fieldset>
                    <label for="password_repeat">Повтор пароля*</label>
                    <input name="password_repea" id="password__input" />
                </fieldset>
                <fieldset class="acception">
                    <label for="checkbox">Согласие на обработку персональных данных*</label>
                    <input name="checkbox" type="checkbox" id="checkbox__input" />
                </fieldset>

                @endif


                <fieldset>
                    @if(Route::is('auth.login'))
                    <input id="login" type="submit" value="ВОЙТИ" />
                    @endif
                    @if(Route::is('auth.reg'))
                    <input id="register" type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ" />
                    @endif
                </fieldset>
                <p class="error">
                    @if ($errors->any())

                    <span>{{ $error->getMessage() }}</span>

                    @endif
                </p>
            </form>
            <img src="https://celes.club/uploads/posts/2022-05/thumbs/1651982513_10-celes-club-p-izhevsk-tsentr-goroda-krasivo-foto-10.jpg" />
    </main>
</body>

</html>