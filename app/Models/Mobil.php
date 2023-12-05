<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mobil
 * 
 * @property int $id
 * @property string $merk
 * @property string $plat
 * @property string $warna
 * @property string $tahun
 * @property string $status
 * @property string $deskripsi
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Mobil extends Model
{
	protected $table = 'mobil';

	protected $fillable = [
		'merk',
		'plat',
		'warna',
		'tahun',
		'status',
		'deskripsi'
	];
}
