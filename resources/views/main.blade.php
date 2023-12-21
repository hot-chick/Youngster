<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Youngster</title>
</head>

<body>
    <div class="all">
        <div class="lefter">
            <div class="lefter_main">
                <div class="logo">
                    <img src="/img/LOGO.png" alt="logo">
                </div>
                <nav>
                    <a href="/main">
                        <div class="page"><img src="/img/page_home.png" alt="">Главная</div>
                    </a>
                    <a href="#">
                        <div class="page"><img src="/img/page_interesting.png" alt="">Интересное</div>
                    </a>
                    <a href="#">
                        <div class="page"><img src="/img/page_notifications.png" alt="">Уведомления</div>
                    </a>
                    <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="page"><img src="/img/page_create.png" alt="">Создать</div>
                    </button>
                    <a href="/profile">
                        <div class="page_profile"><img src="./img/{{Auth::user()->photo}}" alt="">Профиль</div>
                    </a>
                </nav>
            </div>

            <div class="more">
                <a href="#">
                    <div class="page"><img src="/img/page_settings.png" alt="">Настройки</div>
                </a>
            </div>
        </div>


        <div class="main">
            <div class="stories">
                <div class="story">
                    <img src="./img/story_profile.jpg" width="55px" height="55px" alt="">
                    <h3>Имя профиляпрофиля</h3>
                </div>
                <div class="story">
                    <img src="./img/story_profile.jpg" width="55px" height="55px" alt="">
                    <h3>Имя профиля</h3>
                </div>
                <div class="story">
                    <img src="./img/story_profile.jpg" width="55px" height="55px" alt="">
                    <h3>Имя профиля</h3>
                </div>
                <div class="story">
                    <img src="./img/story_profile.jpg" width="55px" height="55px" alt="">
                    <h3>Имя профиля</h3>
                </div>
                <div class="story">
                    <img src="./img/story_profile.jpg" width="55px" height="55px" alt="">
                    <h3>Имя профиля</h3>
                </div>
                <div class="story">
                    <img src="./img/story_profile.jpg" width="55px" height="55px" alt="">
                    <h3>Имя профиля</h3>
                </div>
                <div class="story">
                    <img src="./img/story_profile.jpg" width="55px" height="55px" alt="">
                    <h3>Имя профиля</h3>
                </div>
                <div class="story">
                    <img src="./img/story_profile.jpg" width="55px" height="55px" alt="">
                    <h3>Имя профиля</h3>
                </div>
            </div>

            <div class="info">
                <a href="/profile" class="info_about">
                    <img src="./img/{{Auth::user()->photo}}" width="45px" height="45px" alt="">
                    <div class="info_about_h3">
                        <h2>{{Auth::user()->nickname}}</h2>
                        <h3>{{Auth::user()->name}} {{Auth::user()->surname}}</h3>
                    </div>
                </a>
                <div class="info_recommend">
                    <h2>Рекомендации для вас</h2>
                    <div class="info_recomend_about">
                        <img src="./img/your_profile.jpg" width="45px" height="45px" alt="">
                        <div class="info_recomend_h3">
                            <h1>Имя профиля</h1>
                            <h3>Имя Фамилия</h3>
                        </div>
                        <a href="#">Подписаться</a>
                    </div>

                </div>
            </div>

            <div class="news">
                @foreach($posts as $post)
                <div class="post">
                    <div class="news_about">
                        <img src="./img/{{$post->Post_lo->photo}}" width="35px" height="35px" alt="">
                        <h3>{{$post->Post_lo->nickname}}</h3>
                    </div>
                    <div class="news_post">
                        <img src="./storage/img/{{$post->image}}" alt="">
                        <div class="news_post_reactions">
                            <img src="./img/page_notifications.png" width="25px" alt="">
                            <img src="./img/icon_coment.png" width="25px" alt="">
                            <img src="./img/icon_share.png" width="25px" alt="">
                        </div>
                        <h3>123 отметок "Нравится"</h3>
                        <div class="news_post_info">
                            <h2>{{$post->Post_lo->name}} {{$post->Post_lo->surname}}</h2>
                            <p>{{$post->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание публикации</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <!-- <div class="make_info_about">
                    <img src="./img/{{Auth::user()->photo}}" width="45px" height="45px" alt="">
                    <div class="info_about_h3">
                        <h2>{{Auth::user()->nickname}}</h2>
                    </div>
                </div> -->
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="/post_create">
                        @csrf
                        <input style="width: 450px;" type="file" class="form-control" name="image"
                            id="inputGroupFile01">
                        <input style="width: 450px;" placeholder="Добавьте подпись..." type="text" id="description"
                            name="description">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Опубликовать</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>