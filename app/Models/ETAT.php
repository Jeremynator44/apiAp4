<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ETAT
 * 
 * @property int $IDETAT
 * @property string $LIBELLEE
 * 
 * @property Collection|COMMANDE[] $c_o_m_m_a_n_d_e_s
 *
 * @package App\Models
 */
class ETAT extends Model
{
	protected $table = 'ETATS';
	protected $primaryKey = 'IDETAT';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLEE'
	];

	public function c_o_m_m_a_n_d_e_s()
	{
		return $this->hasMany(COMMANDE::class, 'IDETAT');
	}
}
