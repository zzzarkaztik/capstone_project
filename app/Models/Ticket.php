<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 * 
 * @property int $ticket_id
 * @property int $transaction_id
 * @property string $type
 * @property float|null $price
 *
 * @package App\Models
 */
class Ticket extends Model
{
	protected $table = 'tickets';
	protected $primaryKey = 'ticket_id';
	public $timestamps = false;

	protected $casts = [
		'transaction_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'transaction_id',
		'type',
		'price'
	];
}
