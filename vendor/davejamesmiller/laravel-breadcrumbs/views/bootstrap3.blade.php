@if ($breadcrumbs)

        @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->last)

                        {{{ $breadcrumb->title }}}

                @elseif ($breadcrumb->url)
                        <span onclick="javascript:changePage('{{{ asset($breadcrumb->url) }}}')" style="color: #337ab7;cursor: pointer;">
                            {{{ $breadcrumb->title }}}
                        </span>
                        <span class="divider">/</span>
                @else
                        {{-- Using .active to give it the right colour (grey by default) --}}
                        {{{ $breadcrumb->title }}}
                        <span class="divider">/</span>
                @endif
        @endforeach
@endif
