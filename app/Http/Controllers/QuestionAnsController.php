<?php

namespace App\Http\Controllers;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class QuestionAnsController extends Controller
{
    //
     public function index()
    {
     $question = QuestionAnswer::all();
     return view('frontend.questionanswer.index',['question'=>$question]);
    }
    
        public function create()
    {
        return view ('frontend.questionanswer.create');
    }

      public function store(Request $request)
    {
        $question = new QuestionAnswer;
        $question ->question = $request->input('question');
        $question ->answer = $request->input('answer');
     
        $question->save();
        return redirect()->back()->with('status', 'Client Question Answer Added Successfully');
    }

    public function edit ($id)
    {
        $question = QuestionAnswer::find($id);
        return view('frontend.questionanswer.edit',compact('question'));
    }

    public function update(Request $request, $id)
    {
        $question = QuestionAnswer::find($id);
        $question ->question = $request->input('question');
        $question ->answer = $request->input('answer');
        $question->update();
        return redirect()->back()->with('status', 'Client Questions & Answers Updated Successfully');
    }

    public function destroy($id)
    {
        $question = QuestionAnswer::find($id);
        $question->delete();
        return redirect()->back()->with('status', 'Client Questions Answers Delete Successfully');
    }
}
