<div class="m-2">
    @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ?
    $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ :
    $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)

    <div class="flex btn-group">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <button class="btn btn-sm" aria-hidden="true">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        @else
        <button wire:click="previousPage('{{ $paginator->getPageName() }}')"
            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
            rel="prev" class="btn btn-sm" aria-label="{{ __('pagination.previous') }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <button class="btn btn-sm">{{
            $element }}</button>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <button class="btn btn-sm btn-active">{{
            $page }}</button>
        @else
        <button wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" class="btn btn-sm"
            aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
            {{ $page }}
        </button>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <button wire:click="nextPage('{{ $paginator->getPageName() }}')"
            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
            rel="next" class="btn btn-sm" aria-label="{{ __('pagination.next') }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        @else
        <button class="btn btn-sm" aria-hidden="true">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        @endif
    </div>
</div>
