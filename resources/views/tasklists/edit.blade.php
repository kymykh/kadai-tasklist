@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasklist->id }} タスク編集ページ</h1>

    {!! Form::model($tasklist, ['route' => ['tasks.update', $tasklist->id], 'method' => 'put']) !!}
    
        <div class="form-group">
            {!! Form::label('stasus', 'ステータス:') !!}
            {!! Form::text('status') !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content') !!}
        </div>

        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}


@endsection