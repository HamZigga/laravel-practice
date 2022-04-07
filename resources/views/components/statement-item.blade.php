<h4 class="statement__item-title">{{ $statement->vacancy->title }}</h4>
<div class="statement__item">
    <p>{{ $statement->vacancy->category->name }}</p>
    <p>{{ $statement->status->name }}</p>
    <p class="statement__item-date">{{ $statement->updated_at }} Номер заявки: {{ $statement->id }}</p>
    <p class="statement__item-text">Ваш стек: <span>{{ $statement->technology_stack }}</span></p>
    <p class="statement__item-text">Описание: <span>{{ $statement->description ?? '' }}</span></p>
    
    @if($statement->status_id == 1)
        <a href="{{ route('statement.edit', $statement->id) }}" class="personal__link">Редактировать заявку</a>
        <a href="{{ route('statement.destroy', $statement->id) }}" class="personal__link">Удалить заявку</a>
    @elseif($statement->status_id == 2)
        <p>Ваше резюме одобрено по этой вакансии, вскоре с вами свяжется наш HR</p>
    @endif
</div>