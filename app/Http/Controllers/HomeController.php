<?

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class HomeController extends Controller{

	public function index(){
		$data = [
			'auth'=>false,
			'recentAdded'=>Customer::orderBy('created_at', 'desc')->take(5)->get()
		];
		return view('home', $data);
	}

	public function auth(){
		$data = ['auth'=>false];
		return view('auth', $data);
	}
}