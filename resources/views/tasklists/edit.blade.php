@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasklist->id }} タスク編集ページ</h1>
    

    {!! Form::model($tasklist, ['route' => ['tasks.update', $tasklist->id], 'method' => 'put']) !!}
    
        {!! Form::label('stasus', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection