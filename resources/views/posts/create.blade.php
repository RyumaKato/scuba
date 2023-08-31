
<x-app-layout>
        <h1>新規投稿</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="point">
                <h2>ポイント名</h2>
                <input type="text" name="post[point]" placeholder="ポイント名" value="{{ old('post.point') }}"/>
                <p class="point__error" style="color:red">{{ $errors->first('post.point') }}</p>
            </div>
            
            <div class="area">
                <h2>都道府県</h2>
                <select name="post[area_id]">
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}"
                        >{{ $area->area_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="spot">
                <h2>スポット</h2>
                <input type="text" name="post[spot]" placeholder="スポット" value="{{ old('post.spot') }}"/>
                <p class="spot__error" style="color:red">{{ $errors->first('post.spot') }}</p>
            </div>
            
            <div class="entry">
                <h2>エントリー</h2>
                 <select name="post[entry_id]">
                    @foreach($entries as $entry)
                        <option value="{{ $entry->id }}">{{ $entry->entry_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="level">
                <h2>レベル</h2>
                 <select name="post[level_id]">
                    @foreach($levels as $level)
                        <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="depth">
                <h2>最大水深</h2>
                 <select name="post[depth_id]">
                    @foreach($depths as $depth)
                        <option value="{{ $depth->id }}">{{ $depth->depth_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="month">
                <h2>オススメシーズン</h2>
                 <select name="post[month_id]">
                    @foreach($months as $month)
                        <option value="{{ $month->id }}">{{ $month->month_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="shop">
                <h2>ダイビングショップ名</h2>
                <input type="text" name="post[shop]" placeholder="SCUBA JAPAN SHOP" value="{{ old('post.shop') }}"/>
            </div>
            
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="post[comment]" placeholder="見た魚や生物などを自由に書いてください。">{{ old('post.comment') }}</textarea>
            </div>
            
            <div class="evaluation">
                <h2>評価</h2>
                 <select name="post[evaluation_id]">
                    @foreach($evaluations as $evaluation)
                        <option value="{{ $evaluation->id }}">{{ $evaluation->evaluation_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="image">
                <h2>画像</h2>
                <input type="file" name="image">
            </div>
            
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/index">back</a>]</div>
</x-app-layout>