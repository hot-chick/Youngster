<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Update</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #fafafa;
    }

    .post-container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #e1e1e1;
    }

    .post-container h1 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .post-container p {
        font-size: 1.2em;
        line-height: 1.6;
    }

    .post-container a {
        color: #3498db;
        text-decoration: none;
        font-weight: bold;
        display: block;
        margin-top: 15px;
    }

    .post-container a:hover {
        text-decoration: underline;
    }

    .post-container {
        width: calc(33.33% - 10px);
        overflow: hidden;
    }

    .post-container img {
        width: 100%;
        height: auto;
    }

    .main {
        display: flex;
        text-decoration: none;
        margin: 10px auto;
        color: black;
    }

    button {
        color: #3498db;
        text-decoration: none;
        font-weight: bold;
        display: block;
        margin-top: 15px;
        background-color: #fff;
        border: none;
        font-size: 16px;
    }

    button:hover{
        text-decoration: underline;
        cursor: pointer;
    }
</style>

<body>
    <div class="post-container">
        <a class="main" href="/main">Главная</a>
        <img src="../storage/img/{{ $post->image }}" alt="dqww">
        <p>{{ $post->description }}</p>
        <a href="{{ route('posts.edit', ['id' => $post->id]) }}">Редактировать пост</a>
        <form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить пост</button>
        </form>
    </div>
</body>

</html>