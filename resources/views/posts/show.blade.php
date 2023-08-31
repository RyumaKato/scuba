<x-app-layout>
    <body>
        <h1 class="point">
            {{ $post->point }}
        </h1>
        <h3 class="area">
            {{ $post->area->area_name }}
        </h3>
        <h3 class="spot">
            {{ $post->spot }}
        </h3>
        <h3 class="entry">
            {{ $post->entry->entry_name }}
        </h3>
        <h3 class="level">
            {{ $post->level->level_name }}
        </h3>
        <h3 class="depth">
            {{ $post->depth->depth_name }}
        </h3>
        <h3 class="month">
            {{ $post->month->month_name }}
        </h3>
        <h3 class="shop">
            {{ $post->shop }}
        </h3>
        <p> {{ $post->comment }} </p>
        <h3 class="evaluation">
            {{ $post->evaluation->evaluation_name }}
        </h3>
        </div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
        </div>
        <small>{{ $post->user->name }}</small>
        @if (Auth::user()->id == $post->user_id)
        </div
        <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
        @endif
        <div class="footer">
            <a href="/index">戻る</a>
        </div>
    </body>
</x-app-layout>