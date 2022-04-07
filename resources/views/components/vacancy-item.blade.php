<div class="vacancies__item">
    <img src="{{ asset('public/img/'.$vacancy->img) }}" alt="" class="vancancies__item-img">
    <p class="vacancies__item-title">{{ $vacancy->title }}</p>
    <p class="vacancies__item-text">{{ $vacancy->subtitle }}</p>
    <a href="{{ route('vacancies.item', $vacancy->id)}}" class="vacancies__item-link">Подробнее</a>
</div>