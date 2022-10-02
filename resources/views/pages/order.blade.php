<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/_global.css">
    <link rel="stylesheet" type="text/css" href="/css/order.css">
    <title>Авторизация</title>
</head>

<body>
    <x-header />
    <main>
        <h1>Создание заявки</h1>
        <form>
            <fieldset>
                <label>Название</label>
                <input />
            </fieldset>
            <fieldset>
                <label>Категория</label>
                <input />
            </fieldset>
            <fieldset>
                <label>Описание</label>
                <textarea></textarea>
            </fieldset>
            <fieldset>
                <label>Фото</label>
                <input type="file" />
            </fieldset>
            <input type="submit" value="Создать заявку" />
        </form>
    </main>
    <x-footer />
</body>

</html>