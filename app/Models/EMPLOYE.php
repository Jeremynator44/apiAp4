<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EMPLOYE
 * 
 * @property int $IDEMPLOYE
 * @property string $NOM
 * @property string $PRENOM
 * @property string $MAIL
 * @property string $MDP
 * 
 * @property CUISINIER $c_u_i_s_i_n_i_e_r
 * @property SERVEUR $s_e_r_v_e_u_r
 *
 * @package App\Models
 */
class EMPLOYE extends Model
{
	protected $table = 'EMPLOYE';
	protected $primaryKey = 'IDEMPLOYE';
	public $timestamps = false;

	protected $fillable = [
		'NOM',
		'PRENOM',
		'MAIL',
		'MDP'
	];

	public function c_u_i_s_i_n_i_e_r()
	{
		return $this->hasOne(CUISINIER::class, 'IDEMPLOYE');
	}

	public function s_e_r_v_e_u_r()
	{
		return $this->hasOne(SERVEUR::class, 'IDEMPLOYE');
	}
}
