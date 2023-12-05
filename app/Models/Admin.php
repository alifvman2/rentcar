<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 * 
 * @property int $id
 * @property int $users
 * @property string $nama_lengkap
 * @property string $alamat
 * @property string $jenis_kelamin
 * @property string $no_hp
 * @property string $ktp
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Admin extends Model
{
	protected $table = 'admin';

	protected $casts = [
		'users' => 'int'
	];

	protected $fillable = [
		'users',
		'nama_lengkap',
		'alamat',
		'jenis_kelamin',
		'no_hp',
		'ktp'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users');
	}
}
