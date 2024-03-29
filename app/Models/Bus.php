<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

/**
 * Class Bus
 * 
 * @property int $bus_id
 * @property string|null $plate_number
 * @property int|null $bus_route_id
 * @property int|null $driver_id
 * @property Carbon|null $bus_service_start
 * @property string $service_status
 *
 * @package App\Models
 */
class Bus extends Model
{

	protected $table = 'buses';
	protected $primaryKey = 'bus_id';
	public $incrementing = false;
	public $timestamps = false;

	use Sortable;

	public $sortable = ['bus_id', 'plate_number', 'bus_route_id', 'driver_id'];

	protected $casts = [
		'bus_id' => 'int',
		'bus_route_id' => 'int',
		'driver_id' => 'int',
	];

	protected $fillable = [
		'plate_number',
		'bus_route_id',
		'driver_id',
		'bus_service_start',
		'service_status'
	];
}
