<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Driver
 * 
 * @property int $driver_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $bus_id
 *
 * @package App\Models
 */
class Driver extends Model
{

	protected $table = 'drivers';
	protected $primaryKey = 'driver_id';
	public $timestamps = false;

	protected $casts = [
		'bus_id' => 'int'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'bus_id'
	];
}
