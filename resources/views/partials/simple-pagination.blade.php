@if ($paginator->hasPages())
    <nav>
        <div class="join">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">
                        ⮜
                    </span>
                </a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn"aria-label="@lang('pagination.previous')">
                    ⮜
                </a>
            @endif

            {{-- Page Number --}}
            @if ($page = $paginator->currentPage())
                <span class="join-item btn bg-gray-100 text-gray-800 text-lg font-bold cursor-default"  aria-current="page">
                    {{ $page }}
                </span>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="join-item btn" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">
                        ⮞
                    </span>
                </a>
            @else
                <a class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">
                        ⮞
                    </span>
                </a>
            @endif
        </div>
    </nav>
@endif
