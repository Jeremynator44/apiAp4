<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $firstname
 * @property string $email
 * @property string $password
 * @property string|null $tel
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|RESERVATION[] $r_e_s_e_r_v_a_t_i_o_n_s
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'firstname',
		'email',
		'password',
		'tel',
		'email_verified_at',
		'remember_token'
	];

	public function r_e_s_e_r_v_a_t_i_o_n_s()
	{
		return $this->hasMany(RESERVATION::class, 'IDCLIENT');
	}
}
