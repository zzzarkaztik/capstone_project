<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusRoute
 * 
 * @property int $bus_route_id
 * @property string|null $origin
 * @property string|null $destination
 * @property int|null $kilometers
 * @property float|null $price
 *
 * @package App\Models
 */
class BusRoute extends Model
{
	protected $table = 'bus_routes';
	protected $primaryKey = 'bus_route_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'bus_route_id' => 'int',
		'kilometers' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'origin',
		'destination',
		'kilometers',
		'price'
	];
}