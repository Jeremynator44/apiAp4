<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CUISINIER
 * 
 * @property int $IDEMPLOYE
 * 
 * @property EMPLOYE $e_m_p_l_o_y_e
 * @property Collection|MESSAGE[] $m_e_s_s_a_g_e_s
 *
 * @package App\Models
 */
class CUISINIER extends Model
{
	protected $table = 'CUISINIER';
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

	public function m_e_s_s_a_g_e_s()
	{
		return $this->hasMany(MESSAGE::class, 'IDEMPLOYE');
	}
}
