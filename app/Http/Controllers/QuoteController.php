<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use App\Helpers\StripMarkup;

class QuoteController extends Controller
{
    public function quote()
    {
        $quote = session()->get('quote');

        if (is_null($quote)) {
            $quote = StripMarkup::strip(Inspiring::quote());
            session()->put('quote', $quote);
        }
        return view('quote', ['quote' => $quote]);
    }

    public function new()
    {
        // set new quote in session
        session()->put('quote', StripMarkup::strip(Inspiring::quote()));
        return redirect()->route('quote');
    }

    public function addFav(Request $request)
    {
        $quotes = session()->get('fav_quotes') ?? [];
        $quote = session()->get('quote');
        if (!in_array($quote, $quotes))
            array_push($quotes, session()->get('quote'));
        session()->put('fav_quotes', $quotes);
        return redirect()->route('quote');
    }

    public function fav(Request $request)
    {
        $quotes = session()->get('fav_quotes');
        return view('favQuote', ['quotes' => $quotes ?? []]);
    }

    public function delFav(Request $request, string $index)
    {
        $quotes = session()->get('fav_quotes');
        array_splice($quotes, $index, 1);
        session()->put('fav_quotes', $quotes);
        return redirect()->route('quote.fav');
    }
}
