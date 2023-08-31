<x-app-layout>
    <body>
        <h1>編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="point">
                <h2>ポイント名</h2>
                <input type="text" name="post[point]" placeholder="ポイント名" value="{{ $post->point }}"/>
                <p class="point__error" style="color:red">{{ $errors->first('post.point') }}</p>
            </div>
            
            <div class="area">
                <h2>都道府県</h2>
                <select name="post[area_id]">
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}" 
                            @if (old('post.area') == $area->id) selected
                            @endif
                        >{{ $area->area_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="spot">
                <h2>スポット</h2>
                <input type="text" name="post[spot]" placeholder="スポット" value="{{ $post->spot }}"/>
                <p class="spot__error" style="color:red">{{ $errors->first('post.spot') }}</p>
            </div>
            
            <div class="entry">
                <h2>エントリー</h2>
                 <select name="post[entry_id]">
                    @foreach($entries as $entry)
                        <option value="{{ $entry->id }}"
                            @if ($entry->entry_id ) selected
                            @endif
                        >{{ $entry->entry_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="level">
                <h2>レベル</h2>
                 <select name="post[level_id]">
                    @foreach($levels as $level)
                        <option value="{{ $level->id }}"
                            @if ($post->level_id ) selected
                            @endif
                        >{{ $level->level_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="depth">
                <h2>最大水深</h2>
                 <select name="post[depth_id]">
                    @foreach($depths as $depth)
                        <option value="{{ $depth->id }}"
                            @if ($post->depth_id ) selected
                            @endif
                        >{{ $depth->depth_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="month">
                <h2>オススメシーズン</h2>
                 <select name="post[month_id]">
                    @foreach($months as $month)
                        <option value="{{ $month->id }}"
                            @if ($post->depth_id ) selected
                            @endif
                        >{{ $month->month_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="shop">
                <h2>ダイビングショップ名</h2>
                <input type="text" name="post[shop]" placeholder="SCUBA JAPAN SHOP" value="{{ $post->shop }}"/>
            </div>
            
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="post[comment]" placeholder="見た魚や生物などを自由に書いてください。">{{ $post->comment }}</textarea>
            </div>
            
            <div class="evaluation">
                <h2>評価</h2>
                 <select name="post[evaluation_id]">
                    @foreach($evaluations as $evaluation)
                        <option value="{{ $evaluation->id }}"
                            @if ($post->evaluation_id ) selected
                            @endif
                        >{{ $evaluation->evaluation_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="image">
                <h2>画像</h2>
                <input type="file" name="image">
            </div>
            
            
           <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/posts/{{ $post->id}}">back</a>]</div>
    </body>
</x-app-layout>