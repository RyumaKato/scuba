<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿一覧</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='point'>
                        <a href="/posts/{{ $post->id }}">{{ $post->point }}</a>
                    </h2>
                    <h4 class="area">{{ $post->area->area_name }}</h4>
                    <h4 class="spot">{{ $post->spot }}</h4>
                    <h4 class="level"></h4>{{ $post->level->level_name }}</h4>
                    <h4 class="depth">{{ $post->depth->depth_name }}</h4>
                    <h4 class="month">{{ $post->month->month_name }}</h4>
                    <h4 class="evaluation">{{ $post->evaluation->evaluation_name }}</h4>
                    </div><img src="{{ $post->image_url }}"></div>
                   
                </div>
            @endforeach
        </div>
    </body>
</html>