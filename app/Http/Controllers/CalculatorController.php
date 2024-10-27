<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function sinp()
    {
        return view('sinp_calculator.index');
    }

    public function sinp_calculate(Request $request)
    {
        $validatedData = $request->validate([
            'age' => 'required|numeric',
            'education' => 'required|numeric',
            'work_experience' => 'required|numeric',
            'language' => 'required|numeric',
            'close_family' => 'required|numeric',
            'work_experience_sk' => 'required|numeric',
            'study_experience_sk' => 'required|numeric',
        ]);

        // Convert to integers if needed
        $age = (int) $validatedData['age'];
        $education = (int) $validatedData['education'];
        $work_experience = (int) $validatedData['work_experience'];
        $language = (int) $validatedData['language'];
        $close_family = (int) $validatedData['close_family'];
        $work_experience_sk = (int) $validatedData['work_experience_sk'];
        $study_experience_sk = (int) $validatedData['study_experience_sk'];

        // Now you can proceed with your calculations
        $totalPoints = $age + $education + $work_experience + $language + $close_family + $work_experience_sk + $study_experience_sk;

        return view('sinp_calculator.result', compact('totalPoints'));
    }
}
