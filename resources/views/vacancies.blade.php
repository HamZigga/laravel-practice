@extends ('layouts.app')

@section('title', 'Вакансии')

@section('content')
    <div class="container">
        <div class="block-title">
            <h3 class="block-title__text">{{$vacancies[0]->category->name ?? 'Вакансии'}}</h3>
        </div>
        <div class="vancancies">
            @guest
                <p>Для возможности Откликнуться на вакансию необходимо пройти <a href="{{ route('register') }}">регистрацию</a></p>
            @endguest
            <div class="vacancies__items">
            @foreach ($vacancies as $vacancy)
                @include('components.vacancy-item')
            @endforeach
            </div>
        </div>
        {{ $vacancies->links() }}
    </div>

@endsection
