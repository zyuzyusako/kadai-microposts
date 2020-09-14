@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favolite($user->id))
        {{-- お気に入り削除ボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unfavolite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavolite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入り追加ボタンのフォーム --}}
        {!! Form::open(['route' => ['user.favolite', $user->id]]) !!}
            {!! Form::submit('Follow', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif