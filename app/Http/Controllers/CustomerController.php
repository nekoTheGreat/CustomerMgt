<?

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller{
	protected $default_sub_nav = [
		['link'=>'/customers', 'name'=>'List of Customers'],
		['link'=>'/customers/form', 'name'=>'Add Customer']
	];
	
	public function index(Request $request){
		$search = $request->input('search');
		if($search){
			$customers = Customer::where('type', '=', 'customer')
				->where('lastname', 'LIKE', '%'.$search.'%')
				->orWhere('firstname','LIKE','%'.$search.'%')
				->get();
		}else{
			$customers = Customer::where('type', '=', 'customer')->get();
		}
		$data = [
			'customers'	=> $customers,
			'subnav'	=> $this->default_sub_nav
		];
		return view('customers.index', $data);
	}

	public function addForm(){
		$customer = new Customer();
		$data = [
			'customer'	=> $customer,
			'subnav'	=> $this->default_sub_nav
		];
		return view('customers.add', $data);
	}

	public function add(Request $request){
		$customer = Customer::create($request->all());
		return redirect('/customers');
	}

	public function editForm(Request $request, $id){
		$customer = Customer::findOrFail($id);
		if($customer){
			$data = [
				'customer'	=> $customer,
				'subnav'	=> $this->default_sub_nav
			];
			return view('customers.edit', $data);
		}
		return redirect('/customers')->flash('error', 'Customer not found');
	}

	public function update(Request $request){
		$id = $request->input('id');
		$customer = Customer::find($id);
		if($customer){
			$data = $request->input();
			//check for password and confirm password differences
			//just update if both are empty
			if(empty($request->input('password')) || empty($request->input('confirm_password'))){
				if(isset($data['password']))
					unset($data['password']);
			}else if($request->input('password') != $request->input('confirm_password')){
				$request->session()->flash('error', 'Password and Confirm password must be similar.');
				return redirect('/customers/form/'.$customer->id);
			}
			
			$customer->fill($request->input());
			$customer->update();

			$request->session()->flash('success', 'Customer updated');
			return redirect('/customers/form/'.$customer->id)->with('success', 'Customer updated.');
		}
		$request->session()->flash('error', 'Customer not found');
		return redirect('/customers');
	}

	public function delete(Request $request, $id = null){
		if($id == null){
			$id = $request->input('id');
		}
		$customer = Customer::find($id);
		if($customer){
			$customer->delete();
			$request->session()->flash('success', 'Customer delete.');
		}else{
			$request->session()->flash('error', 'Customer not found.');
		}
		return redirect('/customers');
	}

	public function process(Request $request){
		if($request->input('_action') == 'Delete'){
			return $this->delete($request);
		}else if($request->input('_action') == 'Save'){
			return $this->update($request);
		}
		
	}

}