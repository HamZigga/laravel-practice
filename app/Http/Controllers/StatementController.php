<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatementRequest;
use App\Models\Category;
use App\Models\Statement;
use App\Models\Vacancy;
use App\Services\ImageSaveService;
use Illuminate\Support\Facades\Storage;

class StatementController extends Controller
{
    public function create($id)
    {   
        return view('statement-create', ['vacancy' => Vacancy::findOrfail($id)]);
    }

    public function store($vacancy_id, StatementRequest $request)
    {
        Statement::create([
            'user_id' => auth()->user()->id,
            'status_id'  => 1,
            'vacancy_id' => $vacancy_id,    
            'experience' => $request->experience,
            'technology_stack' => $request->technology_stack,
            'description' => $request->description
        ]);
        return redirect()->route('main')->with('success', 'Заявка успешно отправлена');
    }

    public function edit(int $id)
    {
        return view('statement-edit', ['statement' => Statement::findOrFail($id), 'categories' => Category::all()]);
    }

    public function update($id, StatementRequest $request)
    {
        Statement::findOrFail($id)->update([
            'experience' => $request->experience,
            'technology_stack' => $request->technology_stack,
            'description' => $request->description
        ]);
        return redirect()->route('main')->with('success', 'Заявка успешно Обновлена');
    }

    public function show()
    {
        return view('statement-list', ['statements' => Statement::where('user_id', auth()->user()->id)->orderBy('updated_at')->paginate(10)]);
    }

    public function destroy($id)
    {
        $statement = Statement::findOrFail($id);
        $statement->delete();
        return redirect()->route('statement')->with('success', 'Резюме успешно удалено');
    }
}
