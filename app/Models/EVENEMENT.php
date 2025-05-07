<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EVENEMENT
 * 
 * @property int $IDEVENT
 * @property string $LIBELLE
 * @property string $DESCRIPTIF
 * @property Carbon $DATEDEBUT
 * @property Carbon $DATEFIN
 * @property string|null $URLPHOTOEVENEMENT
 *
 * @package App\Models
 */
class EVENEMENT extends Model
{
	protected $table = 'EVENEMENTS';
	protected $primaryKey = 'IDEVENT';
	public $timestamps = false;

	protected $casts = [
		'DATEDEBUT' => 'datetime',
		'DATEFIN' => 'datetime'
	];

	protected $fillable = [
		'LIBELLE',
		'DESCRIPTIF',
		'DATEDEBUT',
		'DATEFIN',
		'URLPHOTOEVENEMENT'
	];
}
