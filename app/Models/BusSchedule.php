<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedule
 * 
 * @property int $bus_schedule_id
 * @property int $bus_id
 * @property Carbon $arrival_time
 * @property Carbon $departure_time
 * @property string $status
 * @property Carbon $date_posted
 *
 * @package App\Models
 */
class BusSchedule extends Model
{
	protected $table = 'bus_schedules';
	protected $primaryKey = 'bus_schedule_id';
	public $timestamps = false;

	protected $casts = [
		'bus_id' => 'int',
	];

	protected $fillable = [
		'bus_id',
		'arrival_time',
		'departure_time',
		'status',
		'date_posted'
	];
}
