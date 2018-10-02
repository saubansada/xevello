<ul class="xev-short-pagination uk-pagination uk-margin-remove"> 
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
        <li class="uk-disabled uk-padding-remove">
            <span uk-icon="triangle-left" uk-tooltip="pos: top ; title: Previous"></span>
        </li>
    @else
        <li class="uk-padding-remove">
            <a href="{{ $paginator->previousPageUrl() }}">
                <span uk-icon="triangle-left" uk-tooltip="pos: top ; title: Previous"></span>
            </a>
        </li>
    @endif 

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <li class="uk-padding-remove">
            <a href="{{ $paginator->nextPageUrl() }}">
                <span uk-icon="triangle-right" uk-tooltip="pos: top ; title: Next"></span>
            </a>
        </li>
    @else
        <li class="uk-disabled uk-padding-remove">
            <span uk-icon="triangle-right" uk-tooltip="pos: top ; title: Next"></span>
        </li>
    @endif
</ul>