<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaksi
 * 
 * @property int $id
 * @property int $admin
 * @property int $customer
 * @property int $mobil
 * @property Carbon $tgl_pinjam
 * @property Carbon $tgl_kembali
 * @property string $harga
 * @property string $total_denda
 * @property string $status
 * @property Carbon $tgl_dikembalikan
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Transaksi extends Model
{
	protected $table = 'transaksi';

	protected $casts = [
		'admin' => 'int',
		'customer' => 'int',
		'mobil' => 'int',
		'tgl_pinjam' => 'datetime',
		'tgl_kembali' => 'datetime',
		'tgl_dikembalikan' => 'datetime'
	];

	protected $fillable = [
		'admin',
		'customer',
		'mobil',
		'tgl_pinjam',
		'tgl_kembali',
		'harga',
		'total_denda',
		'status',
		'tgl_dikembalikan'
	];
}
