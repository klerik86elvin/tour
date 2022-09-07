@if ($paginator->lastPage() > 1)
    <div class="content text-[#0C517F] hidden md:block">
        <ul class="pagination my-8 flex justify-center gap-8">
            @if($paginator->currentPage() != 1)
            <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                <a href="{{($paginator->currentPage() == 1) ? $paginator->url(1) : $paginator->url($paginator->currentPage() - 1) }}">{{__('предыдущая')}}</a>
            </li>
            @endif
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            @if($paginator->currentPage() != $paginator->lastPage())
            <li>
                <a href="{{($paginator->currentPage() == $paginator->lastPage()) ? $paginator->url($paginator->currentPage()) : $paginator->url($paginator->currentPage()+1) }}" >{{__('следущая')}}</a>
            </li>
            @endif
        </ul>
    </div>
@endif
