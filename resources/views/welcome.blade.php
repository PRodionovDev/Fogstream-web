@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($model as $key => $news)
        <div class="news">
            <div class="row">
                <div class="col-md-2">
                    <img src="/storage/news/{{ $news->img }}">
                </div>
                <div class="col-md-8">
                    <h3>{{ $news->title }}</h3>
                    <p>{{ $news->description }}</p>
                    <p>{{ $news->updated_at }}</p>
                </div>
            </div>
        </div>
    @endforeach
    <div>
        {{ $model->render() }}
    </div>
</div>
@endsection
