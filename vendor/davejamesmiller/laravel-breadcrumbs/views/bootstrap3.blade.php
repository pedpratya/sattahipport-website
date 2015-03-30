@if ($breadcrumbs)
<div class="col-xs-4 col-sm-4 col-md-2 text-center">{{ $breadcrumbs[1]->title }}</div>
<div class="col-xs-8 col-md-10">

        <ol class="breadcrumb-tab">
        @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$breadcrumb->last)
                        <li><a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a></li>
                @else
                        <li class="active">{{{ $breadcrumb->title }}}</li>
                @endif
        @endforeach
	</ol>
</div>
@endif
