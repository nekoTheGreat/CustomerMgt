<?

namespace  App\Models;

class Customer extends User{
	protected $hidden = ['type'];
	protected $required_values = ['type'=>'customer'];

	public function __construct(array $attributes = []){
		parent::__construct($attributes);
		$this->forceFill($this->required_values);
	}
}