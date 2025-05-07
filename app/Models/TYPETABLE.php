<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TYPETABLE
 * 
 * @property int $IDTYPETABLE
 * @property string $LIBELLE
 * 
 * @property Collection|RESERVATION[] $r_e_s_e_r_v_a_t_i_o_n_s
 *
 * @package App\Models
 */
class TYPETABLE extends Model
{
	protected $table = 'TYPE_TABLE';
	protected $primaryKey = 'IDTYPETABLE';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLE'
	];

	public function r_e_s_e_r_v_a_t_i_o_n_s()
	{
		return $this->hasMany(RESERVATION::class, 'IDTYPETABLE');
	}
}
