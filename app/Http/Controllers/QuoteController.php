<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function quote()
    {
        $quote = session()->get('quote');

        if (is_null($quote)) {
            $quote = Inspiring::quote();
            session()->put('quote', $quote);
        }
        return view('quote', ['quote' => $quote, 'author' => $quote]);
    }

    public function new()
    {
        // set new quote in session
        return redirect()->route('quote');
    }

    public function fav(Request $request)
    {
        // add quote to favorite
        if ($request->method() == "POST") {
            // add quote to favorites
            // flash success message
            return redirect()->route('quote');
        } else {
            return view('favQuote');
        }
    }
}
