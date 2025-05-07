<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class COMMANDE
 * 
 * @property int $IDCOMMANDE
 * @property int $NUMTABLE
 * @property int $IDETAT
 * @property int|null $IDFACTURE
 * @property int $IDEMPLOYE
 * @property Carbon $DATE_COMMANDE
 * 
 * @property EMPLACEMENT $e_m_p_l_a_c_e_m_e_n_t
 * @property ETAT $e_t_a_t
 * @property SERVEUR $s_e_r_v_e_u_r
 * @property FACTURE|null $f_a_c_t_u_r_e
 * @property Collection|CONCERNER[] $c_o_n_c_e_r_n_e_r_s
 *
 * @package App\Models
 */
class COMMANDE extends Model
{
	protected $table = 'COMMANDE';
	protected $primaryKey = 'IDCOMMANDE';
	public $timestamps = false;

	protected $casts = [
		'NUMTABLE' => 'int',
		'IDETAT' => 'int',
		'IDFACTURE' => 'int',
		'IDEMPLOYE' => 'int',
		'DATE_COMMANDE' => 'datetime'
	];

	protected $fillable = [
		'NUMTABLE',
		'IDETAT',
		'IDFACTURE',
		'IDEMPLOYE',
		'DATE_COMMANDE'
	];

	public function e_m_p_l_a_c_e_m_e_n_t()
	{
		return $this->belongsTo(EMPLACEMENT::class, 'NUMTABLE');
	}

	public function e_t_a_t()
	{
		return $this->belongsTo(ETAT::class, 'IDETAT');
	}

	public function s_e_r_v_e_u_r()
	{
		return $this->belongsTo(SERVEUR::class, 'IDEMPLOYE');
	}

	public function f_a_c_t_u_r_e()
	{
		return $this->belongsTo(FACTURE::class, 'IDFACTURE');
	}

	public function c_o_n_c_e_r_n_e_r_s()
	{
		return $this->hasMany(CONCERNER::class, 'IDCOMMANDE');
	}
}
