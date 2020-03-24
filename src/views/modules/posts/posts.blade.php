@section('meta_title', 'Video Posts')
@section('meta_description', 'Video Posts')
@section('page_title', 'Video Posts')

@foreach($posts as $post)
    {!! $post->title !!}
    {!! $post->body !!}
@endforeach
