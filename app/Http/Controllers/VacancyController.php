<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function indexPreview()
    {
        return view('main', ['vacancies' => Vacancy::where('category_id', 1)->orderBy('updated_at')->take(3)->get(), 'probations' => Vacancy::where('category_id', 2)->orderBy('updated_at')->take(3)->get()]);
    }

    public function indexVacancy()
    {
        return view('vacancies', ['vacancies' => Vacancy::where('category_id', 1)->orderBy('updated_at')->paginate(9)]);
    }

    public function indexProbation()
    {
        return view('vacancies', ['vacancies' => Vacancy::where('category_id', 2)->orderBy('updated_at')->paginate(9)]);
    }

    public function show($id)
    {
        return view('vacancy', ['vacancy' => Vacancy::findOrfail($id)]);
    }
}
