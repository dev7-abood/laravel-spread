<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\HandelSendBusinessMailJob;

class MainController extends Controller
{

    // load main page
    public function index()
    {
        return view('home.index');
    }

    public function thankYouIndex()
    {
        return view('home.thank-you-Index.index');
    }

    // send mail
    public function handelSendBusinessMail(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone_number' => 'required|digits_between:7,11',
            'comp_name' => 'required',
            'target_segment' => 'required',
        ]);

        dispatch(new HandelSendBusinessMailJob($request->all()));
        return redirect()->route('home.thankYouIndex');

    }
}
