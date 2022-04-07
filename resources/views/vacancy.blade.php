@extends ('layouts.app')

@section('title', 'Вакансия {{ $vacancy->title ?? '' }}')

@section('content')
    <div class="container">
        <div class="block-title">
            <h3 class="block-title__text">{{ $vacancy->title }}</h3>
            <img src="{{ $vacancy->img }}" alt="vacancy_image">
            <p>{{ $vacancy->subtitle }}</p>
            <p>{{ $vacancy->description }}</p>
            @guest
                <p>Для возможности Откликнуться на вакансию необходимо пройти <a href="{{ route('register') }}">регистрацию</a></p>
            @endguest
            @auth
            <a href="{{ route('statement.create', $id) }}">Откликнуться на вакансию</a>
            @endauth
        </div>
        
    </div>

@endsection
