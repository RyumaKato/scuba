<x-app-layout>
     <h1>投稿一覧</h1>
        <a href='/posts/create'>create</a>
    <div class="own_posts">
        @foreach($own_posts as $post)
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
                    <small>{{ $post->user->name }}</small>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>{{ $own_posts->links() }} </div>
        <script>
        function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
</x-app-layout>
