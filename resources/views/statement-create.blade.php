@extends ('layouts.app')

@section('title', 'Отправка резюме')

@section('content')
    <div class="container">
    <div class="block-title">
            <h3 class="block-title__text">Оставьте нам свое резюме</h3>
            <h4 class="block-title__text">{{ $vacancy->title }}</h4>
        </div>
    <form class="form" action="{{ route('statement.store', $vacancy->id) }}" method="POST">
        @csrf
        <div class="form__item">
            <label class="form__item-label" for="experience">Ваш опыт</label>
            <input id="experience" name="experience" type="text" class="form__item-input" placeholder="Введите ваш опыт работы">
        </div>
        <div class="form__item">
            <label class="form__item-label" for="technology_stack">Ваш стек технологий</label>
            <input id="technology_stack" name="technology_stack" type="text" class="form__item-input" placeholder="Введите ваш стек технологий">
        </div>
        <div class="form__item">
            <label class="form__item-label" for="description">Резюме</label>
            <textarea id="description" name="description" type="text" rows="15" class="form__item-textarea"
                placeholder="Введите описание"></textarea>
        </div>
        <div class="form__item">
            <button class="form__item-button" type="submit">Отправить</button>
        </div>
    </form>
    </div>
@endsection
