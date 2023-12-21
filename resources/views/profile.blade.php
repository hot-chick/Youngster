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

    .profile {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #e1e1e1;
    }

    .profile-header {
        display: flex;
        align-items: center;
    }

    .profile-picture {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        margin-right: 20px;
    }

    .profile-info {
        flex-grow: 1;
    }

    .username {
        font-size: 1.5em;
        margin: 0;
    }

    .user-stats {
        font-size: 0.8em;
        margin: 5px 0;
    }

    .posts {
        display: flex;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .post {
        width: calc(33.33% - 10px);
        margin: 5px;
        overflow: hidden;
    }

    .post a {
        font-size: 14px;
        text-decoration: none;
        color: black;
    }

    .post-image {
        width: 100%;
        height: auto;
    }

    .main{
        display: flex;
        text-decoration: none;
        margin: 10px auto;
        color:black;
    }
</style>

<body>

    <div class="profile">
        <a class="main" href="/main">Главная</a>
        <div class="profile-header">
            <img src="./img/{{Auth::user()->photo}}" alt="Profile Picture" class="profile-picture">
            <div class="profile-info">
                <h1 class="username">{{Auth::user()->nickname}}</h1>
                <h1 class="username">{{Auth::user()->name}} {{Auth::user()->surname}}</h1>
                <p class="user-stats">Followers: <span class="followers-count">100</span> | Following: <span
                        class="following-count">50</span></p>
            </div>
        </div>
        @foreach($posts as $post)
        <div class="posts">
            <div class="post">
                <a href="{{ route('post_update', ['id' => $post->id]) }}">Редактировать</a>
                <img src="./storage/img/{{$post->image}}" alt="Post" class="post-image">
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>