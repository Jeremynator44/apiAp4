<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DECHET
 * 
 * @property int $IDDECHETS
 * @property int $POIDS
 * @property Carbon $DATE_DECHETS
 *
 * @package App\Models
 */
class DECHET extends Model
{
	protected $table = 'DECHETS';
	protected $primaryKey = 'IDDECHETS';
	public $timestamps = false;

	protected $casts = [
		'POIDS' => 'int',
		'DATE_DECHETS' => 'datetime'
	];

	protected $fillable = [
		'POIDS',
		'DATE_DECHETS'
	];
}
