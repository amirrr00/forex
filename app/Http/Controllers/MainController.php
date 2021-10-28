<?php

namespace App\Http\Controllers;

use App\Models\Share;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
	public function showForex(  ) {
		$shares=Share::latest()->take(5)->get()->toArray();
		return view('forex/show',compact('shares'));
	}

	public function showCrypto(  ) {
		$cryptoes=Share::all()->take(5)->toArray();
		return view('crypto/show',compact('cryptoes'));
	}

	public function showChart($nick_name = null) {
		return view('charts/show',compact('nick_name'));
	}
}
