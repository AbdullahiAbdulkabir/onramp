<li>
    @auth
    <!--input type="checkbox" value="on"{{ $completedResources->contains($resource->id) ? ' checked="checked"' : '' }}-->
    @endauth
    &bull; <a href="{{ $resource->url }}">{{ $resource->name }}</a>
</li>
