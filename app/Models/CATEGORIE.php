<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CATEGORIE
 * 
 * @property int $IDCATEGORIE
 * @property string $LIBELLEC
 * 
 * @property Collection|PRODUIT[] $p_r_o_d_u_i_t_s
 *
 * @package App\Models
 */
class CATEGORIE extends Model
{
	protected $table = 'CATEGORIE';
	protected $primaryKey = 'IDCATEGORIE';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLEC'
	];

	public function p_r_o_d_u_i_t_s()
	{
		return $this->hasMany(PRODUIT::class, 'IDCATEGORIE');
	}
}
