@extends('layouts.layout')

@section('content')

    <div class="blog-view">

        <h1>{{$post->title}}</h1>

        <div>
            {{$post->date}}
        </div>

        <?php echo $post->getCompiled_text() ?>

        <div class="comments" id="comments">
            <p>
                <strong>Комментарии:</strong>
            </p>
            @foreach($post->comments as $comment)
                <div class=" row comment">
                    <div class="col-xs-11 col-xs-offset-1">
                        <strong>{{$comment->iduser}}</strong>
                        <span>{{ date('Y-m-d', strtotime($comment->date)) }}</span>
                        <p>
                            {{$comment->text}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
