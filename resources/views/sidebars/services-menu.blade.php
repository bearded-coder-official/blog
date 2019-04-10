<div class="list-group">
    @foreach($items as $service)
        <a href="{{ route('service', $service->slug) }}" class="list-group-item list-group-item-action">{{ $service->title }}</a>
    @endforeach
</div>