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

            @auth
            <div>
                <p>Вы вошли в свой профиль!</p>
            </div>
            <div>
                <form action="/logout" method="POST">
                    @csrf
                    <button>Выйти из профиля</button>
                </form>
            </div>
            @endauth

            @guest
            <div>
                <h2>Регистрация пользователя</h2>
                <form action="/register" method="POST">
                    @csrf
                    <input name="name" type="text" placeholder="Введите имя пользователя">
                    <input name="email" type="text" placeholder="Введите адрес эл. почты">
                    <input name="password" type="password" placeholder="Введите пароль">
                    <button>Зарегистрировать</button>
                </form>
            </div>
            @endguest

        </article>
    </section>
</body>
</html>