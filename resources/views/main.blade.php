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
            <div class="vacancies__item">
                <img src="#" alt="" class="vancancies__item-img">
                <p class="vacancies__item-title"></p>
                <p class="vacancies__item-text"></p>
                <a href="#" class="vacancies__item-link">Подробнее</a>
            </div>
        </div>
        <div class="block-title">
            <h3 class="block-title__text">Стажировка</h3>
        </div>
        <div class="vancancies probation">
            <div class="vacancies__item probation__item">
                <img src="#" alt="" class="vancancies__item probation__item-img">
                <p class="vacancies__item-title probation__item-title"></p>
                <p class="vacancies__item-text probation__item-text"></p>
                <a href="#" class="vacancies__item-link probation__item-link">Подробнее</a>
            </div>
        </div>
    </div>

@endsection
