<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function show()
    {
        return view('main', ['vacancies' => Vacancy::where('category_id', 1)->orderBy('updated_at')->take(3)->get(), 'probations' => Vacancy::where('category_id', 2)->orderBy('updated_at')->take(3)->get()]);
    }
}
