<nav class="wt-pagination">
    <ul>
        @if (!$paginator->onFirstPage())
            <li class="wt-prevpage"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="lnr lnr-chevron-left"></i></a></li>
        @endif

        @foreach($elements as $element)
            @if (is_string($element))
                <li><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>{{$page}}</li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="wt-nextpage"><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="lnr lnr-chevron-right"></i></a></li>
        @endif
    </ul>
</nav>
