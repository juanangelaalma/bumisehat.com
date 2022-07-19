@if ($paginator->hasPages())
<span class="flex items-center col-span-3">
    Showing {{ $paginator->firstItem() }}-{{ $paginator->lastItem() }} of {{ $paginator->total() }}
</span>
<span class="col-span-2"></span>
<span class="flex col-span-4 justify-end mt-2 sm:mt-auto">
    <nav aria-label="Table navigation">
        <ul class="inline-flex items-center">
            <li class="mr-3">
                @if ($paginator->onFirstPage())
                    <span class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                        aria-label="Previous">
                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}"
                        class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                        aria-label="Previous">
                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                @endif
            </li>
            @foreach ($elements as $element)
                @if (is_string($element))
                <span aria-disabled="true">
                    <span
                        class="inline-flex relative items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 bg-white border border-gray-300 cursor-default">{{ $element }}</span>
                </span>
                @endif
                
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <span aria-current="page">
                            <span
                                class="px-3 py-1 text-white transition-colors duration-150 bg-primary-index border border-r-0 border-primary-index rounded-md focus:outline-none focus:shadow-outline-purple">{{ $page }}</span>
                        </span>
                        @else
                        <a href="{{ $url }}">
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                {{ $page }}
                            </button>
                        </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
            <li class="ml-2">
                @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                    aria-label="Next">
                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                        <path
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </a>
                @else
                <span class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                    aria-label="Next">
                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                        <path
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </span>
                @endif
            </li>
        </ul>
    </nav>
</span>
@endif