<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $transaction_id
 * @property int $user_id
 * @property int $bus_schedule_id
 * @property float|null $total_price
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transactions';
	protected $primaryKey = 'transaction_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'bus_schedule_id' => 'int',
		'total_price' => 'float'
	];

	protected $fillable = [
		'user_id',
		'bus_schedule_id',
		'total_price'
	];
}
