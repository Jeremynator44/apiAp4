<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CONTENIR
 * 
 * @property int $IDPRODUIT
 * @property int $IDALLERGENE
 * @property Carbon|null $DATE_AJOUT
 * 
 * @property PRODUIT $p_r_o_d_u_i_t
 * @property ALLERGENE $a_l_l_e_r_g_e_n_e
 *
 * @package App\Models
 */
class CONTENIR extends Model
{
	protected $table = 'CONTENIR';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDPRODUIT' => 'int',
		'IDALLERGENE' => 'int',
		'DATE_AJOUT' => 'datetime'
	];

	protected $fillable = [
		'DATE_AJOUT'
	];

	public function p_r_o_d_u_i_t()
	{
		return $this->belongsTo(PRODUIT::class, 'IDPRODUIT');
	}

	public function a_l_l_e_r_g_e_n_e()
	{
		return $this->belongsTo(ALLERGENE::class, 'IDALLERGENE');
	}
}
