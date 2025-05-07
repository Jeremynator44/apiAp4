<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EMPLACEMENT
 * 
 * @property int $NUMTABLE
 * @property int $NBPLACE
 * @property bool $RESERVE
 * 
 * @property Collection|COMMANDE[] $c_o_m_m_a_n_d_e_s
 *
 * @package App\Models
 */
class EMPLACEMENT extends Model
{
	protected $table = 'EMPLACEMENT';
	protected $primaryKey = 'NUMTABLE';
	public $timestamps = false;

	protected $casts = [
		'NBPLACE' => 'int',
		'RESERVE' => 'bool'
	];

	protected $fillable = [
		'NBPLACE',
		'RESERVE'
	];

	public function c_o_m_m_a_n_d_e_s()
	{
		return $this->hasMany(COMMANDE::class, 'NUMTABLE');
	}
}
