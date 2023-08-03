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
            <div>
                <h2>Создайте свой пост</h2>
            </div>
            <div>
                <form action="/create-post" method="POST">
                    @csrf
                    <div>
                        <input name="title" type="text" placeholder="Введите название Вашего поста">
                    </div>
                    <div>
                        <textarea name="content" cols="30" rows="10" placeholder="Содержание Вашего поста"></textarea>
                    </div>
                    <div>
                        <button>Опубликовать</button>
                    </div>
                </form>
            </div>
            <div>
                <h2>Все посты</h2>
            </div>
            @foreach ($posts as $post)
            <div>
                <h3>{{ $post['title'] }}</h3>
                <p>
                    {{ $post['content'] }}
                </p>
            </div>    
            @endforeach
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
            <div>
                <h2>Войти в профиль</h2>
                <form action="/login" method="POST">
                    @csrf
                    <input name="loginname" type="text" placeholder="Введите имя пользователя">
                    <input name="loginpassword" type="password" placeholder="Введите пароль">
                    <button>Войти</button>
                </form>
            </div>
            @endguest

        </article>
    </section>
</body>
</html>