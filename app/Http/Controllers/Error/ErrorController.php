<?php

namespace App\Http\Controllers\Error;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ErrorController extends Controller
{
    public function showErrorScreen()
    {
        // Retrieve correct answers and user input from local storage
        $correctAnswers = json_decode(Storage::get('correctAnswersKuiz'), true);
        $userInput = json_decode(Storage::get('userInputKuiz'), true);

        // Prepare data for the view
        $data = [
            'correctAnswers' => $correctAnswers,
            'userInput' => $userInput
        ];

        // return view('content.kuiz.error', $data);
        return view('content.kuiz.error', ['data' => $data]);
    }
}
