@if ($paginator->hasPages())
    <div class="pagination">
        Записи:
        @foreach ($elements as $element)
            @if (is_string($element))
                <span>{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span>{{ ($page-1)*$paginator->perPage()+1 }}-{{ $page*$paginator->perPage() }}</span>
                    @else
                        <a href="{{ $url }}">{{ ($page-1)*$paginator->perPage()+1 }}-{{ $page*$paginator->perPage() }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
@endif
