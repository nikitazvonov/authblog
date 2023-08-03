<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование поста</title>
</head>
<body>
    <section>
        <article>
            <h1>Редактирование поста</h1>
            <div>
                <form action="/edit-post/{{ $post->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <input name="title" type="text" value="{{ $post->title }}">
                    </div>
                    <div>
                        <textarea name="content" cols="30" rows="10">{{ $post->content }}</textarea>
                    </div>
                    <div>
                        <button>Сохранить изменения</button>
                    </div>
                </form>
            </div>
        </article>
    </section>
</body>
</html>