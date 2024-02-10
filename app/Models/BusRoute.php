<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


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

	public function busSchedules()
	{
		return $this->hasMany(BusSchedule::class, 'bus_route_id');
	}

	use Sortable;
	public $sortable = ['bus_route_id', 'destination', 'kilometers', 'price'];

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
