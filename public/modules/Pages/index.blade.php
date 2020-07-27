<?php

echo trans('Pages::example.welcome');
?>
<hr>
<br />
@foreach ($pages as $page)
    {{ $page->title }}<br />
    {!! $page->link() !!}
    @foreach ($page->contents as $widget)
        <blockquote>{{ $widget->content }} <small>{{ $widget->page->slug }}</small></blockquote>
    @endforeach    
    <br><hr>
@endforeach
