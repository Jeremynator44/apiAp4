<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PRODUIT
 * 
 * @property int $IDPRODUIT
 * @property int $IDCATEGORIE
 * @property string $TITRE
 * @property string $DESCRIPTION
 * @property float $PRIXHT
 * @property int|null $STOCK
 * @property string|null $URLPHOTO
 * 
 * @property CATEGORIE $c_a_t_e_g_o_r_i_e
 * @property Collection|CONCERNER[] $c_o_n_c_e_r_n_e_r_s
 * @property Collection|CONTENIR[] $c_o_n_t_e_n_i_r_s
 * @property Collection|REAPPROVISIONNER[] $r_e_a_p_p_r_o_v_i_s_i_o_n_n_e_r_s
 *
 * @package App\Models
 */
class PRODUIT extends Model
{
	protected $table = 'PRODUITS';
	protected $primaryKey = 'IDPRODUIT';
	public $timestamps = false;

	protected $casts = [
		'IDCATEGORIE' => 'int',
		'PRIXHT' => 'float',
		'STOCK' => 'int'
	];

	protected $fillable = [
		'IDCATEGORIE',
		'TITRE',
		'DESCRIPTION',
		'PRIXHT',
		'STOCK',
		'URLPHOTO'
	];

	public function c_a_t_e_g_o_r_i_e()
	{
		return $this->belongsTo(CATEGORIE::class, 'IDCATEGORIE');
	}

	public function c_o_n_c_e_r_n_e_r_s()
	{
		return $this->hasMany(CONCERNER::class, 'IDPRODUIT');
	}

	public function c_o_n_t_e_n_i_r_s()
	{
		return $this->hasMany(CONTENIR::class, 'IDPRODUIT');
	}

	public function r_e_a_p_p_r_o_v_i_s_i_o_n_n_e_r_s()
	{
		return $this->hasMany(REAPPROVISIONNER::class, 'IDPRODUIT');
	}
}
