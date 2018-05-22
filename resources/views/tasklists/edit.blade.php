@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasklist->id }} 編集ページ</h1>
    
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    {!! Form::model($tasklist, ['route' => ['tasks.update', $tasklist->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection