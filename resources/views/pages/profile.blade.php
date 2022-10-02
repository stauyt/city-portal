<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/_global.css">
    <link rel="stylesheet" type="text/css" href="/css/profile.css">
    <title>Авторизация</title>
</head>

<body>
    <x-header />
    <main>
        <div class="profile">
            <h1 class="profile__title">Личный кабинет
                @if(Route::is('profile.admin'))
                администратора
                @endif
            </h1>
            <div class="profile__data">
                <div>ФИО: Ярослав Волох Михайлович</div>
                <div>Логин: stayut</div>
                <div>Email: stayut@stayut.com</div>
            </div>
        </div>
        <div class="orders">
            <h1>Мои заявки</h1>
            <div class="order__filter">
                <p>Фильтрация по:</p>
                <input type="text">
            </div>
            <table class="orders-list">
                <tr class="orders-list__head">
                    <td>Номер</td>
                    <td>Код заявки</td>
                    <td>Название</td>
                    <td>Описание</td>
                    <td>Фото</td>
                    <td>Категория</td>
                    <td>Статус</td>
                    <td></td>
                </tr>
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
                <x-inline-card />
            </table>
        </div>
    </main>
    <x-footer />
</body>

</html>