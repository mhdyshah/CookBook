@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
        @if ($paginator->onFirstPage())
            <li class="page-link disabled rounded">
                Previous
            </li>
        @else
            <li class="page-link rounded text-danger" wire:click="previousPage">
                Previous
            </li>
        @endif
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page =>$url)
                    @if ($page ==$paginator->currentPage())
                        <li class="page-link rounded">{{$page}}</li>
                    @else
                        <li class="page-link rounded" wire:click="gotoPage({{$page}})">{{$page}}</li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-link rounded text-danger" wire:click="nextPage">
                Next
            </li>
        @else
            <li class="page-link rounded disabled">
                Next
            </li>
        @endif
    </ul>
@endif
