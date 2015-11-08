<?

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller{

	public function index(){
		$data = ['auth'=>false];
		return view('home', $data);
	}

	public function auth(){
		$data = ['auth'=>false];
		return view('auth', $data);
	}
}