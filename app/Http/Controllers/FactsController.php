<?php

namespace App\Http\Controllers\Controller;

use App\Services\FactService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FactController extends Controller
{
    public function index()
    {
        

    }

    public function getFacts(Request $request, FactService $factsService)
    {
        $facts = $factsService->facts('5');

        dd($facts);
    }

    /*public function store(Request $request)
    {
        $validatedData = $request->validate([
            'facts' => 'required',
        ]);
        $facts = json_encode($validatedData["facts"], true);
        Storage::put('cats-facts.json', $facts);
        return response($facts, 200);
    }*/

}