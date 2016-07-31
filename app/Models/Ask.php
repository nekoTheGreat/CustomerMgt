<?

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model{
	protected $table = 'asks';
	protected $primaryKey = 'ID';
	protected $fillable = ['subject', 'message', 'author_id'];
}