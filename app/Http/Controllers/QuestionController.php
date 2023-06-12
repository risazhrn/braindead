<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $newQuestions = Question::orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::all();

        if ($request->routeIs('myQuestion')) {
            $questions = Question::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
            return view('dashboard', compact('questions', 'newQuestions', 'categories'));
        }

        $search = $request->search;
        $category = $request->category;
        $questions = Question::query();

        if ($search) {
            $questions = $questions->where('value', 'LIKE', '%' . $search . '%');
        }
        if ($category) {
            $questions = $questions->whereHas('category', function ($query) use ($category) {
                $query->where('name', $category);
            });
        }

        $questions = $questions->get();

        return view('question', compact('questions', 'newQuestions', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('ask', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'question' => 'required',
        ]);

        Question::create([
            'user_id' => Auth::id(),
            'category_id' => $request->category,
            'value' => $request->question,
        ]);

        return to_route('myQuestion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        $newQuestions = Question::orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::all();
        return view('detail-question', compact('question', 'newQuestions', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        $newQuestions = Question::orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::all();
        return view('ask-edit', compact('question', 'newQuestions', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'category' => 'required',
            'question' => 'required',
        ]);

        $question->update([
            'category_id' => $request->category,
            'value' => $request->question,
        ]);

        return to_route('myQuestion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        Answer::where('question_id', $question->id)->delete();
        $question->delete();
        return to_route('myQuestion');
    }
}
