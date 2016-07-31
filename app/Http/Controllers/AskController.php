<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Ask;

class AskController extends Controller{

	public function index(){
		$asks = Ask::all();

		$data = [
			'asks'=>$asks
		];
		return view('asks.index', $data);
	}
}