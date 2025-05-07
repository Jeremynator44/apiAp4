<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CLIENT
 * 
 * @property int $IDCLIENT
 * @property string $NOM
 * @property string $PRENOM
 * @property string $MAIL
 * @property string $MDP
 * @property string $TEL
 *
 * @package App\Models
 */
class CLIENT extends Model
{
	protected $table = 'CLIENT';
	protected $primaryKey = 'IDCLIENT';
	public $timestamps = false;

	protected $fillable = [
		'NOM',
		'PRENOM',
		'MAIL',
		'MDP',
		'TEL'
	];
}
