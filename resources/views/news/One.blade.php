@extends ("layouts.main")

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @if (!$news['isPrivate'])
        <h2><?=$news['title']?></h2>
        <p><?=$news['text']?></p>
    @else
        Новость приватная. Зарегистрируйтесь для просмотра ..
    @endif
@endsection


