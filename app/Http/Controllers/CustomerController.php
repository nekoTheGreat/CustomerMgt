<?

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CustomerController extends Controller{

	public function index(){
		$data = ['auth'=>false];
		return view('customers.index', $data);
	}

	public function addForm(){
		return view('customers.add');
	}
}