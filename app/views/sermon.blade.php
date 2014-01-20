@include('_partials/header')
 
<article>
    <h3>{{ $entry->title }}</h3>
    <h5>Published at {{ $entry->created_at }} &bull; by {{ $entry->author->email }}</h5>
    {{ $entry->body }}
 
    <hr>
 
    @if ($entry->image)
        <figure><img src="{{ Image::resize($entry->image, 100, 600) }}" alt=""></figure>
        <hr>
    @endif
 
    <a href="{{ route('sermon.list') }}">&laquo; Back to sermons</a>
</article>

@include('_partials/footer')
