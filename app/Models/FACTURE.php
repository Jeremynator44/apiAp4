<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FACTURE
 * 
 * @property int $IDFACTURE
 * @property Carbon $DATEFACTURATION
 * 
 * @property Collection|COMMANDE[] $c_o_m_m_a_n_d_e_s
 *
 * @package App\Models
 */
class FACTURE extends Model
{
	protected $table = 'FACTURE';
	protected $primaryKey = 'IDFACTURE';
	public $timestamps = false;

	protected $casts = [
		'DATEFACTURATION' => 'datetime'
	];

	protected $fillable = [
		'DATEFACTURATION'
	];

	public function c_o_m_m_a_n_d_e_s()
	{
		return $this->hasMany(COMMANDE::class, 'IDFACTURE');
	}
}
