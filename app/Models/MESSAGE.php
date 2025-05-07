<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MESSAGE
 * 
 * @property int $IDMESSAGE
 * @property int $IDEMPLOYE
 * @property string $CONTENT
 * @property Carbon $DATEMESSAGE
 * 
 * @property CUISINIER $c_u_i_s_i_n_i_e_r
 *
 * @package App\Models
 */
class MESSAGE extends Model
{
	protected $table = 'MESSAGES';
	protected $primaryKey = 'IDMESSAGE';
	public $timestamps = false;

	protected $casts = [
		'IDEMPLOYE' => 'int',
		'DATEMESSAGE' => 'datetime'
	];

	protected $fillable = [
		'IDEMPLOYE',
		'CONTENT',
		'DATEMESSAGE'
	];

	public function c_u_i_s_i_n_i_e_r()
	{
		return $this->belongsTo(CUISINIER::class, 'IDEMPLOYE');
	}
}
