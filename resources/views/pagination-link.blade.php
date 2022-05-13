
@if ($paginator->hasPages())
<ul class="pagination mt-2 ">

    @if ($paginator->onFirstPage())
        <li  class="page-link"><span>← Previous</span></li>
    @else
        <li><a  class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
    @endif



    @foreach ($elements as $element)

        @if (is_string($element))
            <li  class="page-link"><span>{{ $element }}</span></li>
        @endif



        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li  class="page-link"><span>{{ $page }}</span></li>
                @else
                    <li><a  class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach



    @if ($paginator->hasMorePages())
        <li><a  class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
    @else
        <li  class="page-link"><span>Next →</span></li>
    @endif
</ul>
@endif
