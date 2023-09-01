
"{{ request('query') }}"について{{ $SearchResults->count() }} 件の検索結果がありました。
<div class="card-body">
    @foreach($SearchResults->groupByType() as $type => $modelSearchResults)
        @foreach($modelSearchResults as $searchResult)
            <ul>
                <li><a href="{{ $searchResult->url }}">{{ $searchResult->point }}</a></li>
            </ul>
        @endforeach
    @endforeach
</div>