<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ApiToken;

class ApiTokenController extends Controller
{
    //View all tokens
    public function index(){
        return view('tokens.index', [
            'tokens' => ApiToken::all()
        ]);

    }

    public function create(){
        return view('tokens.create');
    }


    //Generate token
    public function store(Request $request){
        $formFields = $request->validate([
            'service' => 'required',
            'price' => 'required',
            'expires_at' => ['required']
        ]);

        $formFields["user_id"] = auth()->id();
        $formFields["token"] = Str::random(32);

        ApiToken::create($formFields);

        echo('Success');

        return redirect('/');

    }
}
