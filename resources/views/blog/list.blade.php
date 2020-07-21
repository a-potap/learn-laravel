@extends('layouts.layout')

@section('content')
    <div class="blog-index">
        @foreach($posts as $post)
            <div class="post">
                <h2><a href="{{route('post',['blog' => $post->id])}}" >{{$post->title}}</a></h2>
                <div>{{ date('Y-m-d', strtotime($post->date)) }}</div>

                {{$post->getPreview().'...' }}
            </div>
        @endforeach

            {!! $posts->links() !!}
    </div>
@endsection
