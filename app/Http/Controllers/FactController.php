<?php

namespace App\Http\Controllers;

use App\Services\FactService;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function getFacts(Request $request, FactService $factsService)
    {
        $facts = $factsService->facts($request['amount']);

        return view('welcome', compact('facts'));
    }
}
