<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ALLERGENE
 * 
 * @property int $IDALLERGENE
 * @property string $LIBELLE
 * 
 * @property Collection|CONTENIR[] $c_o_n_t_e_n_i_r_s
 *
 * @package App\Models
 */
class ALLERGENE extends Model
{
	protected $table = 'ALLERGENES';
	protected $primaryKey = 'IDALLERGENE';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLE'
	];

	public function c_o_n_t_e_n_i_r_s()
	{
		return $this->hasMany(CONTENIR::class, 'IDALLERGENE');
	}
}
