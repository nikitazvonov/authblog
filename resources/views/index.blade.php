<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>authblog - блог, объединяющий людей!</title>
</head>
<body>
    <section>
        <article>
            <div>
                <h1>authblog</h1>
            </div>
            <div>
                <h2>Регистрация пользователя</h2>
                <form action="/register" method="POST">
                    @csrf
                    <input type="text" placeholder="Введите имя пользователя">
                    <input type="text" placeholder="Введите адрес эл. почты">
                    <input type="password" placeholder="Введите пароль">
                    <button>Зарегистрировать</button>
                </form>
            </div>
        </article>
    </section>
</body>
</html>