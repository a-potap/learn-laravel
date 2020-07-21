@extends('layouts.app')

@section('content')
    <div class="container blog-index">
        <form method="POST" action="/admin/blog/{{$post->id}}">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                <div class="col-md-8">
                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $post->date }}" required autocomplete="date" autofocus>

                    @error('date')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                <div class="col-md-8">
                    <input id="date" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" required  autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Text') }}</label>

                <div class="col-md-8">
                    <textarea id="text" class="form-control @error('text') is-invalid @enderror" name="text" required rows="12">
                        {{$post->text}}
                    </textarea>

                    @error('text')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
