<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SERVEUR
 * 
 * @property int $IDEMPLOYE
 * 
 * @property EMPLOYE $e_m_p_l_o_y_e
 * @property Collection|COMMANDE[] $c_o_m_m_a_n_d_e_s
 *
 * @package App\Models
 */
class SERVEUR extends Model
{
	protected $table = 'SERVEUR';
	protected $primaryKey = 'IDEMPLOYE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDEMPLOYE' => 'int'
	];

	public function e_m_p_l_o_y_e()
	{
		return $this->belongsTo(EMPLOYE::class, 'IDEMPLOYE');
	}

	public function c_o_m_m_a_n_d_e_s()
	{
		return $this->hasMany(COMMANDE::class, 'IDEMPLOYE');
	}
}
