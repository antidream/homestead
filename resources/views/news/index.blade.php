@extends ("layouts.main")

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <h1 class="newsH1">Новости</h1>
    @forelse($news as $item)
        <h2 class="newsH2">{{ $item['title'] }}</h2>
        @if (!$item['isPrivate'])
            <a href="{{ route('news.show', $item['id']) }}">Подробнее...</a><br>
        @endif
    @empty
        Нет новостей
    @endforelse
@endsection
