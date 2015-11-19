<?

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller{

	public function index(Request $request){
		$search = $request->input('search');
		if($search){
			$customers = Customer::where('lastname', 'LIKE', '%'.$search.'%')
				->orWhere('firstname','LIKE','%'.$search.'%')->get();
		}else{
			$customers = Customer::all();
		}
		$data = [
			'customers'=> $customers
		];
		return view('customers.index', $data);
	}

	public function addForm(){
		$customer = new Customer();
		$data = ['customer'=>$customer];
		return view('customers.add', $data);
	}

	public function add(Request $request){
		$customer = Customer::create($request->all());
		return redirect('/customers');
	}

	public function editForm(Request $request, $ID){
		$customer = Customer::findOrFail($ID);
		if($customer){
			$data = ['customer'=>$customer];
			return view('customers.edit', $data);
		}
		return redirect('/customers')->flash('error', 'Customer not found');
	}

	public function update(Request $request){
		$customer = Customer::findOrFail($request->input('ID'));

		if($customer){
			$customer->firstname = $request->input('firstname');
			$customer->lastname = $request->input('lastname');
			$customer->update();

			$request->session()->flash('success', 'Customer updated');
			return redirect('/customers/form/'.$customer->ID)->with('success', 'Customer updated.');
		}
		$request->session()->flash('error', 'Customer not found');
		return redirect('/customers');
	}

	public function delete(Request $request, $ID = null){
		if($ID == null){
			$ID = $request->input('ID');
		}
		$customer = Customer::findOrFail($ID);
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