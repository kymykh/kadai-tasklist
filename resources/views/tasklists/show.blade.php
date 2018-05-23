@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} 詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $tasklist->satus }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $tasklist->content }}</td>
        </tr>
    </table>
    
    
    {!! link_to_route('tasks.edit', '編集', ['id' => $tasklist->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($tasklist, ['route' => ['tasks.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


@endsection