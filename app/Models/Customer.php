<?

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
	protected $table = 'customers';
	protected $primaryKey = 'ID';
	protected $fillable = ['firstname', 'lastname'];
}