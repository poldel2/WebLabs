<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use Illuminate\Http\Request;
use App\Models\Validators\ResultsVerification;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class TestController extends Controller
{
    public function action_index()
    {
        return view('test');
    }

    public function handleFormSubmission(Request $request)
    {
        $validator = new ResultsVerification();

        $validator->setRule('full-name', 'required');
        $validator->setRule('food', 'required');
        $validator->setRule('Question1', 'required');
        $validator->setRule('Question1', 'numeric');
        $validator->setRule('radio4', 'required');

        if ($request->isMethod('post')) {
            $validator->validate($request->all());

            if ($validator->hasErrors()) {
                return $validator->showErrors();
            } else {
                $fullName = $request->input('full-name');
                $group = $request->input('food');
                $results = $validator->checkAnswers($request->all());
                $testResults = new TestResult;

                $testResults->created_at = Carbon::now();
                $testResults->name = $request->input('full-name');
                $testResults->question1 = $results['Question1'];
                $testResults->question2 = $results['radio4'];
                $testResults->question3 = $results['select2'];
                $testResults->save();

                Session::put('fullName', $fullName);
                Session::put('group', $group);
                Session::put('results', $results);

                return redirect()->route('result');
            }
        }
        return redirect()->back();
    }
}