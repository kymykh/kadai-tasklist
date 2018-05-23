@extends('layouts.app')

@section('content')

    <h1>作成ページ</h1>
    
    {!! Form::model($tasklist, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    

@endsection