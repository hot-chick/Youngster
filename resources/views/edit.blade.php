<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Youngster Profile</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #fafafa;
    }

    .post-container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #e1e1e1;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
    }

    input,
    textarea {
        margin-bottom: 15px;
        padding: 8px;
    }

    button {
        background-color: #3498db;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #2980b9;
    }

    .main{
        display: flex;
        text-decoration: none;
        margin: 10px auto;
        color:black;
    }
</style>

<body>
    <div class="post-container">
        <a class="main" href="{{ route('post_update', ['id' => $post->id]) }}">Назад</a>
        <form method="POST" enctype="multipart/form-data" action="{{ route('posts.update', ['id' => $post->id]) }}">
            @csrf
            @method('PUT')
            <label for="image">Фото</label>
            <input type="file" id="image" name="image">

            <label for="description">Описание поста:</label>
            <input id="description" name="description"></input>

            <button type="submit">Сохранить</button>
        </form>
    </div>
</body>

</html>