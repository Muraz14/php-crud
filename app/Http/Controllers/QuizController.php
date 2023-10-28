<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index() {
        $data = Quiz::all();

        return view("home")->with("quizzes", $data);
    }

    public function edit($id = null) {
        if ($id == null) {
            return view("edit")->with("quiz", null);
        }

        $quiz = Quiz::find($id);

        return view("edit")->with("quiz", $quiz);
    }

    public function createOrUpdate(Quiz $quiz, Request $request) {
        if ($request->input("id")) {
            $quiz::whereId($request->input("id"))->update($request->all());
            return redirect('/');
        }
        $quiz->fill($request->all())->save();
        return redirect('/');
    }
}
