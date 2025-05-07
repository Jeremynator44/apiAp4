<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class REAPPROVISIONNER
 * 
 * @property Carbon $DATE_REA
 * @property int $IDPRODUIT
 * @property int $QUANTITE
 * 
 * @property PRODUIT $p_r_o_d_u_i_t
 *
 * @package App\Models
 */
class REAPPROVISIONNER extends Model
{
	protected $table = 'REAPPROVISIONNER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DATE_REA' => 'datetime',
		'IDPRODUIT' => 'int',
		'QUANTITE' => 'int'
	];

	protected $fillable = [
		'QUANTITE'
	];

	public function p_r_o_d_u_i_t()
	{
		return $this->belongsTo(PRODUIT::class, 'IDPRODUIT');
	}
}
