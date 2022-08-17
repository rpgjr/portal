<?php

namespace App\Http\Controllers;

use App\Models\Tracers;
use Illuminate\Http\Request;
use DB;

class TracerController extends Controller
{
    public function addQuestion(Request $request) {
        $request->validate([
            'question' => 'required',
        ]);

        $question = new Tracers();
        $question->question = $request->question;
        $question->save();

        return redirect(route('admin.Tracer'));
    }

    public function updateQuestion(Request $request, $questionID) {
        $question = DB::table('tracers')->where('questionID', '=', $questionID)->update([
            'question' => $request->input('question'),
        ]);

        return redirect(route('admin.Tracer'));
    }

    public function deleteQuestion($questionID) {
        $career = DB::table('tracers')->where('questionID', '=', $questionID)->delete();

        return redirect(route('admin.Tracer'));
    }
}
