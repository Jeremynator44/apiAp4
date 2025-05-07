<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CONCERNER
 * 
 * @property int $IDCOMMANDE
 * @property int $IDPRODUIT
 * @property int $quantite
 * 
 * @property COMMANDE $c_o_m_m_a_n_d_e
 * @property PRODUIT $p_r_o_d_u_i_t
 *
 * @package App\Models
 */
class CONCERNER extends Model
{
	protected $table = 'CONCERNER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDCOMMANDE' => 'int',
		'IDPRODUIT' => 'int',
		'quantite' => 'int'
	];

	protected $fillable = [
		'quantite'
	];

	public function c_o_m_m_a_n_d_e()
	{
		return $this->belongsTo(COMMANDE::class, 'IDCOMMANDE');
	}

	public function p_r_o_d_u_i_t()
	{
		return $this->belongsTo(PRODUIT::class, 'IDPRODUIT');
	}
}
