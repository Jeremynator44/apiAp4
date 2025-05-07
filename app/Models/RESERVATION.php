<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RESERVATION
 * 
 * @property int $IDRESERVATION
 * @property int|null $IDCLIENT
 * @property int $IDTYPETABLE
 * @property Carbon $DATE_RESERVATION
 * @property bool $ANNULATION
 * 
 * @property User|null $user
 * @property TYPETABLE $t_y_p_e_t_a_b_l_e
 *
 * @package App\Models
 */
class RESERVATION extends Model
{
	protected $table = 'RESERVATION';
	protected $primaryKey = 'IDRESERVATION';
	public $timestamps = false;

	protected $casts = [
		'IDCLIENT' => 'int',
		'IDTYPETABLE' => 'int',
		'DATE_RESERVATION' => 'datetime',
		'ANNULATION' => 'bool'
	];

	protected $fillable = [
		'IDCLIENT',
		'IDTYPETABLE',
		'DATE_RESERVATION',
		'ANNULATION'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'IDCLIENT');
	}

	public function t_y_p_e_t_a_b_l_e()
	{
		return $this->belongsTo(TYPETABLE::class, 'IDTYPETABLE');
	}
}
