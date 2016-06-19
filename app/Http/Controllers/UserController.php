<?

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{

	public function index(){

		return view('users.index', $data);
	}

	public function registerView(){
		return view('users.register');
	}

	public function register(Request $request){
		
	}

	public function loginView(){
		return view('users.login');
	}

	public function login(Request $request){
		$email = $request->input('email');
		$pass = $request->input('password');

		$users = DB::table('users')
			->where('email', '=', $email)
			->Where('password', '=', $pass)
			->get();

		if(count($users) > 0){
			$user = $users[0];
			$request->session()->push('user.auth', $user);
			return redirect('/');
		}else{
			$request->session()->flash('error', 'Authentication error.');
			return redirect('/login');
		}

	}
}