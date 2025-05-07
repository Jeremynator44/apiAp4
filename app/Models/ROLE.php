<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ROLE
 * 
 * @property int $IDROLE
 * @property string $LIBELLEROLE
 *
 * @package App\Models
 */
class ROLE extends Model
{
	protected $table = 'ROLES';
	protected $primaryKey = 'IDROLE';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLEROLE'
	];
}
