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

    public function index($category_id)
    {
        return view('vacancies', ['vacancies' => Vacancy::where('category_id', $category_id)->orderBy('updated_at')->paginate(9)]);
    }

    public function show($id)
    {
        return view('vacancy', ['statements' => Vacancy::findOrfail($id)]);
    }
}
