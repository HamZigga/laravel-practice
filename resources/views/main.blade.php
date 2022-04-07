@extends ('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <div class="container">
        <div class="block-title">
            <h3 class="block-title__text">Почему именно мы?</h3>
        </div>
        <div class="features">
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-4.png') }}" alt="item">
                <p class="features__item-text">Уникальные IT-проекты со сложной бизнес-логикой: создаём, поддерживаем,
                    развиваем.</p>
            </div>
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-3.png') }}" alt="item">
                <p class="features__item-text">Профессионалы с разным бэкграундом, объединенные общими идеями и ценностями.
                </p>
            </div>
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-3.png') }}" alt="item">
                <p class="features__item-text">Минимум абстракции, больше смысла. Соединяем дизайн-мышление и рациональность
                    для IT-проектов, которые приносят деньги.</p>
            </div>
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-3.png') }}" alt="item">
                <p class="features__item-text">Горизонтальная коммуникация. Нет начальников и подчиненных. Вместе работаем,
                    вместе отдыхаем.</p>
            </div>
        </div>
        <div class="block-title">
            <h3 class="block-title__text">Наши вакансии</h3>
        </div>
        <div class="vancancies">
            @foreach ($vacancies as $vacancy)
                @include('components.vacancy-item')
            @endforeach
        </div>
        <div class="block-title">
            <h3 class="block-title__text">Стажировка</h3>
        </div>
        <div class="vancancies probation">
            @foreach ($probations as $probation)
                @include('components.probation-item')
            @endforeach
        </div>
    </div>

@endsection
