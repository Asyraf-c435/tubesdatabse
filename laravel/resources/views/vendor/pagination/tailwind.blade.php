@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation">
        <ul class="flex justify-center items-center space-x-1">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="px-4 py-2 bg-dark-700 text-gray-500 rounded-lg cursor-not-allowed">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" 
                       class="px-4 py-2 bg-dark-700 text-gray-300 hover:bg-indigo-600 hover:text-white rounded-lg transition">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>
                        <span class="px-4 py-2 bg-dark-700 text-gray-500">{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span class="px-4 py-2 bg-indigo-600 text-white rounded-lg">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" 
                                   class="px-4 py-2 bg-dark-700 text-gray-300 hover:bg-indigo-600 hover:text-white rounded-lg transition">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" 
                       class="px-4 py-2 bg-dark-700 text-gray-300 hover:bg-indigo-600 hover:text-white rounded-lg transition">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            @else
                <li>
                    <span class="px-4 py-2 bg-dark-700 text-gray-500 rounded-lg cursor-not-allowed">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif