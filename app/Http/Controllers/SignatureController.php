<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignatureController extends Controller
{
    public function index(Request $request){

        // dd($request->all()); -> para acompanhar o que está chegando no get

        $validator = Validator::make($request->all(), [
            'camisa' => 'required|string'
        ]);

        $params = $validator->fails() ? $validator->messages() : $validator->validated()['camisa'];
        
        $user = auth()->user();

        $name = $user->name;
        $document = $user->client->document;
        $status = $user->client->signatures->first()->status->name;

        return view('test', [
            'name'=> $name,
            'document' => $document,
            'status' => $status,
            'params' => $params

         ]);
    }
}
